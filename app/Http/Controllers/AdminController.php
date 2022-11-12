<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.edit');
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
    public function show($id)
    {
        $product = Product::find($id);

        return view('admin.product.show',compact('product'));
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
        $product = Product::find($id);
        return view('admin.product.destroy',compact('product'));
    }
    public function users()
    {
        // $allUser = User::all();
        return view('admin.users');
    }

    public function pending()
    {
 
        $pending = User::whereHas('orders',function($query){
            $query->where('status',0);
        })
        ->where('email','!=','admin@email.com')
        ->where('password','!=','secret')
        ->get();

        return view('admin.pendingOrder', ['pending' => $pending]);
    }



    public function add_product(){
        return view('admin.addProducts');
    }

    public function accept_pending($order_id){
        $order_users = Order::where('order_id', $order_id)->get();

        foreach ($order_users as $key => $order) {
           $order->update(array('status'=>1));
        }

        return redirect('/admin/orders');
    }

    public function remove($id){

        $product = Product::find($id);

        if(File::exists(public_path('/images/products/'. $product->img))) {
            
            $files = $product->Product_preview;
            //delete image icon
            File::delete(public_path('/images/products/'. $product->img));

            //delte preview image
            foreach ($files as $file) {
                File::delete(public_path('/images/products/'. $file->product_side));
            }
        }
        

        Product::find($id)->delete();
        return redirect()->to('admin/products')->with('message','Deleted product successfully');
    }
}
