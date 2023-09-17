<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SignerController;
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

// Route::get('/products/order',[OrderController::class,'index'])->name('product.order');

// Route::get('/products/order',[OrderController::class,'index'])->name('product.order');
// Route::view('/products/order','product.order')->name('product.order');

Route::get('/adminpage',[ProductController::class,'adminindex']);
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/products/show/{id}',[ProductController::class,'show'])->name('product.show');
Route::get('/products/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::put('/products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::view('/products/create','product.create')->name('product.create');
// Route::view('/products/create',[ProductController::class,'create'])->name('product.create');
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');

// Route::resource('/category',CategoryController::class);
// Route::post('/sign_in',[SignerController::class,'sign'])->name('signer.sign');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::post('/sign_up',[SignerController::class,'store'])->name('signer.store');

Route::get('/sign_up', function () {
    return view('sign_up');
})->name('sign_up');

Route::get('/logout', function () {
    Session::forget('signer');
    return redirect('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

// Route::get('/product/create', function () {
//     return view('product/create');
// });


Route::post('/adminlogin',[SignerController::class,'adminlogin'] );
Route::post('/login',[SignerController::class,'sign'] );
Route::get('/',[ProductController::class,'index'] );
Route::get('/detail/{id}',[ProductController::class,'detail'] );
Route::get('/search',[ProductController::class,'search'] );
Route::post('/add_to_cart',[ProductController::class,'add_to_cart'] );
Route::get('/cartlist',[ProductController::class,'cartlist'] );
Route::get('/removecart/{id}',[ProductController::class,'removecart'] );
Route::get('ordernow',[ProductController::class,'ordernow'] );
Route::post('orderaddress',[ProductController::class,'orderaddress'] );
Route::get('myorders',[ProductController::class,'myorders'] );

