<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
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


Route::get('/', [Front\Home::class, 'index']);



Route::prefix('shop')->group(function() {
    Route::get('/', [Front\Shop::class, 'index']);

    Route::get('/product/{id}', [Front\Shop::class, 'show']);

    Route::post('/product/{id}', [Front\Shop::class, 'postComment']);

    Route::get('category/{categoryName}', [Front\Shop::class, 'category']);
});

Route::prefix('blog')->group(function() {
    Route::get('/', [Front\Blog::class, 'index']);
    Route::get('/blog_details', [Front\Blog::class, 'blog_details']);
});

Route::get('/contact', [Front\Contact::class, 'indexContact']);

Route::get('/faq', [Front\Faq::class, 'indexFaq']);

Route::prefix('login')->group(function()
{
    Route::get('/', [Front\Login::class, 'index']);
    Route::post('/', [Front\Login::class, 'checkLogin']);

    Route::get('/register', [Front\Login::class, 'register']);
    Route::post('/register', [Front\Login::class, 'postRegister']);

    Route::prefix('my-order')->middleware('CheckMemberLogin')->group(function (){
        Route::get('/', [Front\Login::class, 'myOrderIndex']);
        Route::get('/{id}', [Front\Login::class, 'myOrderShow']);
    });

    Route::prefix('my-account')->middleware('CheckMemberLogin')->group(function (){
        Route::get('/', [Front\Login::class, 'myAccountIndex']);
        Route::get('/{id}', [Front\Login::class, 'myAccountEdit']);
        Route::post('/user/{id}', [Front\Login::class, 'myAccountUpdate']);
    });

    Route::get('/logout', [Front\Login::class, 'logout']);
});

Route::prefix('cart')->group(function (){
    Route::get('add', [Front\CartController::class, 'add']);
    Route::get('/', [Front\CartController::class, 'index']);
    Route::get('delete', [Front\CartController::class, 'delete']);
    Route::get('destroy', [Front\CartController::class, 'destroy']);
    Route::get('update', [Front\CartController::class, 'update']);
});

Route::prefix('checkout')->group(function (){
    Route::get('', [Front\CheckOutController::class, 'index']);
    Route::post('/', [Front\CheckOutController::class, 'addOrder']);
    Route::get('/result', [Front\CheckOutController::class, 'result']);
    Route::get('/vnPayCheck', [Front\CheckOutController::class, 'vnPayCheck']);
});

//Admin
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function (){
    Route::redirect('', 'admin/user');
    Route::resource('user', UserController::class);
    Route::resource('category', ProductCategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('product/{product_id}/image', ProductImageController::class);
    Route::resource('product/{product_id}/detail', ProductDetailController::class);
    Route::resource('order', OrderController::class);

    Route::prefix('login')->group(function (){
        Route::get('', [HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('',[HomeController::class,'postLogin'])->withoutMiddleware('CheckAdminLogin');
    });

    Route::get('logout', [HomeController::class, 'logout']);

});
