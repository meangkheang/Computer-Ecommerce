<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request, $type)
    {
        $brand = $request->brand;
        if($brand){

            $products =  Product::where('type',$type)->where('brand',$brand)->get();
            return view('products.product',compact('products'));
        }

        $products =  Product::where('type',$type)->get();

        return view('products.product',compact('products'));
    }

    public function show($type,$id)
    {
        $product =  Product::where('type',$type)->where('id',$id)->get()->first();

        return view('products.show',compact('product'));
    }
}
