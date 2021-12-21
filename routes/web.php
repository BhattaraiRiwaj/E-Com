<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error', 'Logout Successful!');
        return redirect('admin');
    });
    Route::get('admin/updatepassword', [AdminController::class, 'updatepassword']);

    //Route Dashboard
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    //Route Category
    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('manage_category', [CategoryController::class, 'manage_category'])->name('manage_category');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('category/status/{status}/{id}', [CategoryController::class, 'status'])->name('category.status');

    //Coupon Route
    Route::get('coupon', [CouponController::class, 'index'])->name('coupon.index');
    Route::get('coupon/create', [CouponController::class, 'create'])->name('coupon.create');
    Route::post('coupon/store', [CouponController::class, 'store'])->name('coupon.store');
    Route::get('coupon/show/{id}', [CouponController::class, 'show'])->name('coupon.show');
    Route::get('coupon/edit/{id}', [CouponController::class, 'edit'])->name('coupon.edit');
    Route::post('coupon/update/{id}', [CouponController::class, 'update'])->name('coupon.update');
    Route::get('coupon/destroy/{id}', [CouponController::class, 'destroy'])->name('coupon.destroy');
    Route::get('coupon/status/{status}/{id}', [CouponController::class, 'status'])->name('coupon.status');

    //size Routes
    Route::get('size', [SizeController::class, 'index'])->name('size.index');
    Route::get('size/create', [SizeController::class, 'create'])->name('size.create');
    Route::post('size/store', [SizeController::class, 'store'])->name('size.store');
    Route::get('size/show/{id}', [SizeController::class, 'show'])->name('size.show');
    Route::get('size/edit/{id}', [SizeController::class, 'edit'])->name('size.edit');
    Route::post('size/update/{id}', [SizeController::class, 'update'])->name('size.update');
    Route::get('size/destroy/{id}', [SizeController::class, 'destroy'])->name('size.destroy');
    Route::get('size/status/{status}/{id}', [SizeController::class, 'status'])->name('size.status');

    //color Routes
    Route::get('color', [ColorController::class, 'index'])->name('color.index');
    Route::get('color/create', [ColorController::class, 'create'])->name('color.create');
    Route::post('color/store', [ColorController::class, 'store'])->name('color.store');
    Route::get('color/show/{id}', [ColorController::class, 'show'])->name('color.show');
    Route::get('color/edit/{id}', [ColorController::class, 'edit'])->name('color.edit');
    Route::post('color/update/{id}', [ColorController::class, 'update'])->name('color.update');
    Route::get('color/destroy/{id}', [ColorController::class, 'destroy'])->name('color.destroy');
    Route::get('color/status/{status}/{id}', [ColorController::class, 'status'])->name('color.status');


    //product Routes
    Route::get('product',[ProductController::class,'index'])->name('product.index');
    Route::get('product/manage_product',[ProductController::class,'manage_product'])->name('product.manage_product');
    Route::get('product/manage_product/{id}',[ProductController::class,'manage_product'])->name('product.edit');
    Route::post('product/manage_producty_process',[ProductController::class,'manage_product_process'])->name('product.manage_product_process');
    Route::get('product/show/{id}',[ProductController::class,'show'])->name('product.show');
    Route::get('product/delete/{id}',[ProductController::class,'delete'])->name('product.destroy');
    Route::get('product/status/{status}/{id}',[ProductController::class,'status'])->name('product.status');
    Route::get('product/product_attr_delete/{paid}/{pid}',[ProductController::class,'product_attr_delete']);


});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');