<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Whitelist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhiteListController extends Controller
{
    public function index(){
       
        $whitelist = Whitelist::all();

        session()->put('whitelist_count',Whitelist::count());

        return view('whitelist',compact('whitelist'));
    }

    public function addtowhitelist($id){
        //check to see if product already added.
        $check_product = Whitelist::where('product_id',$id)->first();


        if($check_product){
            return back();
        }
        Whitelist::create([
            'product_id' => $id
        ]);
        session()->put('whitelist_count',Whitelist::count());

        return redirect()->back();
    }
    public function removeWhiteListItem($id){

        Whitelist::find($id)->delete();
        session()->put('whitelist_count',Whitelist::count());

        return redirect('/whitelist');
    }
}
