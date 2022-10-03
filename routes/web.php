<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Order;
use App\Models\ProductPreview;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/','welcome2');
Route::view('/contact','contact');
Route::view('/about','about');
Route::view('/products','products.home');
Route::view('/checkout','checkout');




Route::get('/products/{type}',[ProductController::class,'index']);
Route::get('/products/{type}/{id}',[ProductController::class,'show']);
Route::get('/addtocard/{id}',[CartController::class,'addtocard']);
Route::get('/buynow/{id}',[CartController::class,'buynow']);
Route::get('/cartlist', [CartController::class,'index']);
Route::get('/cartlist/delete/{id}', [CartController::class,'cartlist_remove']);
Route::get('/checkout',[UserController::class,'checkout']);
Route::get('/myorders',[UserController::class,'myorders']);


// Route::get('/test',function(){

//     $orders = Order::paginate(2);;

//     return view('test',compact('orders'));
// });



// Route::get('/signup',function(){
//     return view('auth.signup');
// });
// Route::get('/signin',function(){
//     return view('auth.signin');
// });



//manage signin Routes
Route::get('/auth/signin', function () {
    return view('auth.signin');
});



Route::post('/auth/signin', [UserController::class, 'store2']);
Route::get('/auth/logout', [UserController::class, 'logout']);
Route::resource('/auth', UserController::class);

//this is welcomepage


//admin
Route::get('/admin',function(){
    return view('admin.addProducts');
});
Route::post('/admin',function(Request $request){

    Product::create([
        'img' => $request->img,
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'brand'=> $request->brand,
        'review' => $request->review,
        'type' => $request->type,
        'rate' => $request->rate,
        'discount' => $request->discount
    ]);
    $product_id = Product::latest('id')->first()['id'];
    
    for ($i=0; $i < 3; $i++) { 
        ProductPreview::create([
            'product_id' => $product_id,
            'product_side' => $request->product_side[$i]
        ]);
    }
   

    return redirect('/products');

});