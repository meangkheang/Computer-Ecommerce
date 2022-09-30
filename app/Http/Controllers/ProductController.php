<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->type;
        
        if($type=='all'){

            $products = Product::all();

            if(session()->has('products')){
                $products = session('products');
            }
            return view('products.product')->with('products',$products);

        }else{

            $products = Product::where('type',$type)->get();

            if(session()->has('products')){
                $products = session('products');
            }
            return view('products.product')->with('products',$products);
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($producttype,$id)
    {
        
        $product = Product::find($id);

        return view('products.showproduct')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function filter(Request $request,$producttype)
    {
        $input = $request->all();
        $type = $request->type;
        
        if(empty($input['rate'])){
            return back();
        } 

        if(count($input['rate']) != 0 ){
            if($type == 'all'){

                $products = Product::where('rate',$input['rate'][0])->get();
                return redirect()->to('/products/filter?type=' . $type)->with('products',$products); 
            }

            if(count($input['rate']) > 1 ){

                $products = Product::where('rate',$input['rate'][0])->orWhere('rate',$input['rate'][1])->get();

                return redirect()->to('/products/filter?type=laptop')->with('products',$products);
            }
            else{
                $products = Product::where('type',$type)->where('rate',$input['rate'][0])->get();

                return redirect()->to('/products/filter?type=' . $type)->with('products',$products); 
            }
        }else{

            //just in develop process only (just filter on rate)
            session()->flush();

            return view('products.product')->with('products',null);
        }


        
    }

    public function addtocart(Request $request,$producttype,$id){
       
       
        $check = Cart::where('product_id',$id)->first();
        $quantity = $request['quantity'];

        if($check){


            //update product quantity in product table from cart table
            Cart::where('product_id',$id)->first()->Product->update(array('quantity'=>$quantity));

            //get sepecific product from cart.product_id
            // $Product = Cart::where('product_id',$id)->first()->Product;

            $CartProducts = Cart::all();

            session()->put('CartProducts',$CartProducts);
            return redirect()->to('/cartlist');


        }else{


            Cart::create([
                    'product_id' => $id
            ]);

            //update product quantity in product table from cart table
            Cart::where('product_id',$id)->first()->Product->update(array('quantity'=>$quantity));

            return redirect('/cartlist');
        }

      
        
    }

    public function remove_product_in_cart(Request $request,$id){

        Cart::where('product_id',$id)->first()->delete();

        return redirect('/cartlist');
    }

    public function remove_carts(){

        Cart::query()->delete();
        
        return redirect('/cartlist?pay_sucess=1');
    }
}
