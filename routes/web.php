<?php

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function (Request $request) {

    return view('welcome2');
})->name('welcome2');




//routes products
Route::get('/cartlist/{id}',[ProductController::class,'remove_product_in_cart']);
Route::post('/cartlist/remove_carts',[ProductController::class,'remove_carts'] );
Route::get('/products/{producttype}/{id}',[ProductController::class,'show'] );
Route::post('/products/{producttype}/filter',[ProductController::class,'filter']);
Route::post('/products/{producttype}/{id}',[ProductController::class,'addtocart'] );
Route::get('/products/filter',[ProductController::class,'index']);
Route::get('/products', function () {
    return view('products.home');
});


//routes cartlist
Route::get('/cartlist', function (Request $request) {

    //get all from cart after delete
    $CartProducts = Cart::all();

    return view('products.cartlist')->with('CartProducts',$CartProducts);
});


//manage signin Routes
Route::get('/auth/signin', function () {
    return view('auth.signin');
});
Route::post('/auth/signin', [UserController::class, 'store2']);


Route::get('/auth/logout', [UserController::class, 'logout']);
Route::resource('/auth', UserController::class);

//this is welcomepage
