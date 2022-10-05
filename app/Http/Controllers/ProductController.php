<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function home(){
        return view('products.home');
    }

    public function index(Request $request, $type)
    {
        //use for somewhere else view that require type
        session()->put('type',$type);

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

        session()->put('type',$type);
        

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

        $brand = $request->brand;
        $type = $request->type;
        $price = $request->price;
        $rate = $request->rate;


        if($type == 'all'){
            
        } 
       
        if($brand){

            $products = Product::where('type',$type)->where(function($query) use ($brand){
                for ($i=0; $i < count($brand); $i++) { 
                    $query->orWhere('brand',$brand[$i]);
                }
            })->get();

            return view('products.product',compact('products'));
        }

        
        if($price){
            $products = Product::where('type',$type)->where(function($query) use ($price){
                for ($i=0; $i < count($price); $i++) { 

                    if($price[$i] == '<500'){
                        $query->orWhere('price','<=',500);

                    }else if($price[$i] == '>500'){

                        $query->orWhere('price','>=',500)->where('price' ,'<=',1000);

                    }else if($price[$i] == '>1000'){
                        $query->orWhere('price','>=',1000);
                    }
                    
                }
            })->get();

            return view('products.product',compact('products'));
        }
        if($rate){
            $products = Product::where('type',$type)->where(function($query) use ($rate){
                for ($i=0; $i < count($rate); $i++) { 

                    if($rate[$i] == '3'){
                        $query->orWhere('rate','<=',3);

                    }else if($rate[$i] == '4'){

                        $query->orWhere('rate','>=',4)->where('price' ,'<=',1000);

                    }else if($rate[$i] == '5'){
                        $query->orWhere('rate','>=',5);
                    }
                    
                }
            })->get();

            return view('products.product',compact('products'));
        }

        return redirect('/');
    }
}
