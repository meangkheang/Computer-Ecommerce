<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Ui\Presets\React;

class CartController extends Controller
{

    public function cartlist_remove($id)
    {

        Cart::find($id)->delete();

        // session()->flush();
        session()->put('cart_count', Cart::count());

        return back();
    }

    public function index()
    {

        $cart_projects = Cart::all();

        session()->put('cart_count', Cart::count());
        return view('products.cartlist', compact('cart_projects'));
    }


    public function buynow(Request $request, $id)
    {

        $check_product = Cart::where('product_id', $id)->first();
        if($check_product) return redirect('/cartlist');
        //create temporary
        Cart::create([
            'product_id' => $id,
            'quantity' => 1
        ]);

        session()->put('cart_count', Cart::count());

        return redirect('/cartlist');
    }



    public function addtocard(Request $request, $id)
    {

        //check to see if product already added.
        $check_product = Cart::where('product_id', $id)->first();


        if ($check_product) {
            //if product already added
            $new_quantity = $request['quantity'];
            $check_product->increment('quantity', $new_quantity);


            session()->put('cart_count', Cart::count());
            return back();
        }

        //create temporary
        Cart::create([
            'product_id' => $id,
            'quantity' => $request['quantity']
        ]);

        session()->put('cart_count', Cart::count());

        return back();
    }
}
