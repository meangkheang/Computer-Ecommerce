<?php

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductPreview;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WhiteListController;

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
Route::view('/checkout','checkout');

Route::get('/whitelist',[WhiteListController::class,'index']);
Route::get('/whitelist/{id}',[WhitelistController::class,'addtowhitelist']);
Route::get('/whitelist/delete/{id}',[WhitelistController::class,'removeWhiteListItem']);
Route::get('/products',[ProductController::class,'home']);
Route::get('/products/{type}',[ProductController::class,'index']);
Route::get('/products/{type}/{id}',[ProductController::class,'show']);
Route::get('/addtocard/{id}',[CartController::class,'addtocard']);
Route::get('/buynow/{id}',[CartController::class,'buynow']);
Route::get('/cartlist', [CartController::class,'index']);
Route::get('/cartlist/delete/{id}', [CartController::class,'cartlist_remove']);
Route::get('/myorders',[UserController::class,'myorders']);
Route::get('/checkoutPayment',[UserController::class,'checkoutPayment']);
Route::post('/checkout',[UserController::class,'checkout']);
Route::post('/products/sortBy',[ProductController::class,'sortBy']);
Route::post('/products/filter',[ProductController::class,'filter']);




//myaccount homepage
Route::get('/myaccount',[UserController::class,'myaccount']);



//manage signin Routes
Route::get('/auth/signin', function () {
    return view('auth.signin');
});



Route::post('/auth/signin', [UserController::class, 'store2']);
Route::get('/auth/logout', [UserController::class, 'logout']);
Route::resource('/auth', UserController::class);

//this is welcomepage

Route::redirect('/admin-login','auth/signin');
Route::get('/admin/users',function(){

    $users =  \App\Models\User::all();

    return view('admin.userhistory',compact('users'));

})->name('admin.viewusers');

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