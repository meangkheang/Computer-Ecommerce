<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllUserController;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductPreview;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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

Route::view('/', 'welcome2');
Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/checkout', 'checkout');

Route::get('/whitelist', [WhiteListController::class, 'index']);
Route::get('/whitelist/{id}', [WhitelistController::class, 'addtowhitelist']);
Route::get('/whitelist/delete/{id}', [WhitelistController::class, 'removeWhiteListItem']);
Route::get('/products', [ProductController::class, 'home']);
Route::get('/products/{type}', [ProductController::class, 'index']);
Route::get('/products/{type}/{id}', [ProductController::class, 'show']);
Route::get('/addtocard/{id}', [CartController::class, 'addtocard']);
Route::get('/buynow/{id}', [CartController::class, 'buynow']);
Route::get('/cartlist', [CartController::class, 'index']);
Route::get('/cartlist/delete/{id}', [CartController::class, 'cartlist_remove']);
Route::get('/myorders', [UserController::class, 'myorders']);
Route::get('/checkoutPayment', [UserController::class, 'checkoutPayment']);
Route::post('/checkout', [UserController::class, 'checkout']);
Route::post('/products/sortBy', [ProductController::class, 'sortBy']);
Route::post('/products/filter', [ProductController::class, 'filter']);




//myaccount homepage
Route::get('/myaccount', [UserController::class, 'myaccount']);



//manage signin Routes
Route::get('/auth/signin', function () {
    return view('auth.signin');
});



Route::post('/auth/signin', [UserController::class, 'store2']);
Route::get('/auth/logout', [UserController::class, 'logout']);
Route::resource('/auth', UserController::class);

//this is welcomepage

Route::redirect('/admin-login', 'auth/signin');


//admin

Route::group(['prefix' => 'admin','middleware' => 'isAdmin','as' => 'admin.'],function (){

    Route::get('/products/add', [AdminController::class,'add_product'])->name('products.add');
    Route::get('/products/destroy/{id}', [AdminController::class,'destroy'])->name('products.destroy');
    Route::post('/products/remove/{id}', [AdminController::class,'remove'])->name('products.remove');


    Route::get('/orders', [OrderController::class, 'orderHistory']);
    Route::get('/dashboard', [OrderController::class,'dashboard']);
    Route::get('/products', [AdminController::class,'index']);
    Route::get('/allusers', [AdminController::class, 'users'])->name('allusers');
    Route::get('/pending', [AdminController::class, 'pending']);
    Route::get('/pending/{id}', [AdminController::class, 'accept_pending'])->name('accept_pending');
    Route::get('/products/{id}', [AdminController::class,'show'])->name('products.show');

   
    
    //admin view user
    Route::group(['prefix'=>'allusers','as' => 'allusers.'],function (){
        
        Route::get('/{id}',[AllUserController::class,'show'])->name('show');
        Route::get('/edit/{id}',[AllUserController::class,'edit'])->name('edit');
        Route::get('/destory/{id}',[AllUserController::class,'destroy'])->name('destroy');
        Route::post('/edit/{id}',[AllUserController::class,'update'])->name('update');
        Route::post('/delete/{id}',[AllUserController::class,'remove'])->name('remove');

    });
});



