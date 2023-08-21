<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\PageController;


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


//LoginConotroller
Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('detail', [PageController::class, 'detail'])->name('detail');
Route::get('cart', [PageController::class, 'cart'])->name('cart');
Route::get('checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('my-account', [PageController::class, 'myAccount'])->name('myAccount');

//LoginController
Route::get('login', [LoginController::class, 'viewLogin'])->name('viewLogin');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
//Register
Route::get('register', [RegisterController::class, 'viewRegister'])->name('viewRegister');
Route::post('register/store', [RegisterController::class, 'register'])->name('register');




Route::middleware('check_signin')->group(function () {

    //user
    Route::get('user/{id}', [PageController::class, 'indexId'])->name('indexId');

    //DashboardController
    Route::get('admin/dashboard/index', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    //CategoryController
    Route::prefix('admin')->controller(CategoryController::class)->name('admin.')->group(function () {
        Route::get('category/index', 'index')->name('category.index');
        Route::get('category/create', 'create')->name('category.create');
        Route::post('category/store', 'store')->name('category.store');

        Route::get('category/edit/{id}', 'edit')->name('category.edit');
        Route::post('category/update/{id}', 'update')->name('category.update');

        Route::get('category/delete/{id}', 'delete')->name('category.delete');
    });

    //ProductController
    Route::prefix('admin')->controller(ProductController::class)->name('admin.')->group(function () {
        Route::get('product/index', 'index')->name('product.index');
        Route::get('product/create', 'create')->name('product.create');
        Route::post('product/store', 'store')->name('product.store');

        Route::get('product/edit/{id}', 'edit')->name('product.edit');
        Route::post('product/update/{id}', 'update')->name('product.update');

        Route::get('product/delete/{id}', 'delete')->name('product.delete');
    });

    //UserController
    Route::prefix('admin')->controller(UserController::class)->name('admin.')->group(function () {
        Route::get('user/index', 'index')->name('user.index');
        Route::get('user/create', 'create')->name('user.create');
        Route::get('user/create', 'create')->name('user.create');
        Route::post('user/create', 'create')->name('user.create');

        Route::get('user/edit/{id}', 'edit')->name('user.edit');
        Route::post('user/update/{id}', 'update')->name('user.update');

        Route::get('user/delete/{id}', 'delete')->name('user.delete');
    });

});

