<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request, $type)
    {

        $brand = $request->brand;
        $search = $request->search;
        $sortBy = "Recommend";

        if($search){

            $products =  Product::where('name','like','%'. $search. '%')
                                ->orWhere('type','like','%'. $search. '%')
                                ->get();
            return view('products.product',compact('products','sortBy'));
        }
        if($brand){

            $products =  Product::where('type',$type)->where('brand',$brand)->get();

         //set product type in session
            session()->put('type',$type);
            return view('products.product',compact('products','sortBy'));
        }


        $products =  Product::where('type',$type)->get();

        return view('products.product',compact('products','sortBy'));
    }

    public function show($type,$id)
    {
        $product =  Product::where('type',$type)->where('id',$id)->get()->first();

        return view('products.show',compact('product'));
    }

    public function sortBy(Request $request){

        $sortBy = $request->sortby;
        $brand = $request->brand;
        $type = $request->type;

        switch ($sortBy) {
            case 'Recommend':

                $products =  Product::where('type',$type)->where('brand',$brand)->get();
                return view('products.product',compact('products','sortBy'));

                break;
            case 'Popular':
                
                $products =  Product::where('type',$type)->where('brand',$brand)->orderBy('rate','desc')->orderBy('review','desc')->get();
                return view('products.product',compact('products','sortBy'));

                break;
            case 'Newest':
               
                $products = Product::where('type',$type)->where('brand',$brand)->orderBy('id','desc')->get();

                return view('products.product',compact('products','sortBy'));
                break;        
            default:
                # code...
                break;
        }


    }
    public function filter(Request $request){
        dd($request->all());

        return redirect('/');
    }
}
