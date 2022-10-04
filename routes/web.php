<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\PopularProduct;
use Illuminate\Http\Request;

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


    return view('welcome2')->with('Products',PopularProduct::all());

})->name('welcome2');

Route::get('/products', function () {
    return view('products.home');
});

// Route::get('/signup',function(){
//     return view('auth.signup');
// });
// Route::get('/signin',function(){
//     return view('auth.signin');
// });



// most of time just use get method and let handle everything in controller instead
Route::post('/addtocart',[UserController::class,'addToCart']);



//manage signin Routes
Route::get('/auth/signin', function () {
    return view('auth.signin');
});
// Route::get('/cartlist',function(){
//     return view('products.cartlist_test');
// });


Route::post('/auth/signin', [UserController::class, 'store2']);


Route::get('/auth/logout',[UserController::class, 'logout']);
Route::resource('/auth', UserController::class);

//this is welcomepage

