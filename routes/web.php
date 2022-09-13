<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

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
});

Route::get('/products/order-list', function (Request $request) {
    return view('products.orders');
});






//manage signin Routes
Route::get('/auth/signin', function(){
    return view('auth.signin');
});
Route::post('/auth/signin',[UserController::class,'store2']);



Route::resource('/auth', UserController::class);
Route::resource('/products', SearchController::class);