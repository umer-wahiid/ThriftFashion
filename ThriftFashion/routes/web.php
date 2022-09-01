<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;


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




Route::get('/',[WebsiteController::class,'index']);
Route::get('products',[WebsiteController::class,'products']);
Route::get('contact',[WebsiteController::class,'contact']);
Route::get('about',[WebsiteController::class,'about']);
Route::get('feedback',[WebsiteController::class,'feedback']);
Route::get('order',[WebsiteController::class,'order']);
Route::get('product_by_brand/{id}',[WebsiteController::class,'product_by_brand']);
Route::get('product_by_category/{id}',[WebsiteController::class,'product_by_category']);
Route::get('product_details/{id}',[WebsiteController::class,'product_details']);

Route::group(['prefix'=>'order'],function(){
    Route::get('update/{id}',[OrderController::class,'update']);
});

Route::group(['prefix'=>'cart'],function(){
    Route::get('show',[CartController::class,'show']);
    Route::post('store',[CartController::class,'store']);
    Route::get('delete/{id}',[CartController::class,'destroy']);
});

Route::group(['prefix'=>'checkout'],function(){
    Route::get('show',[CheckoutController::class,'show']);
    Route::post('store',[CheckoutController::class,'store']);
});

Route::group(['prefix'=>'profile'],function(){
    Route::get('/',[WebsiteController::class,'profile']);
    Route::get('edit',[WebsiteController::class,'edit']);
    Route::post('update/{id}',[WebsiteController::class,'update']);
});


Route::group(['prefix'=>'auth'],function(){
    
    Route::get('login',[AuthController::class,'create']);
    Route::get('register',[AuthController::class,'createregister']);
    Route::post('store',[AuthController::class,'store']);
    Route::get('show',[AuthController::class,'show']);
    Route::post('storelogin',[AuthController::class,'storelogin']);
    Route::get('logout',[AuthController::class,'logout']);

});

Route::group(['prefix'=>'dashboard'],function(){
    Route::get('/',[AdminController::class,'index']);

    Route::group(['prefix'=>'brand'],function(){
        Route::get('create',[BrandController::class,'create']);
        Route::post('store',[BrandController::class,'store']);
        Route::get('edit/{id}',[BrandController::class,'edit']);
        Route::post('update/{id}',[BrandController::class,'update']);
        Route::get('show',[BrandController::class,'show']);
        Route::get('destroy/{id}',[BrandController::class,'destroy']);
    });


    Route::group(['prefix'=>'category'],function(){
        Route::get('create',[CategoryController::class,'create']);
        Route::post('store',[CategoryController::class,'store']);
        Route::get('edit/{id}',[CategoryController::class,'edit']);
        Route::post('update/{id}',[CategoryController::class,'update']);
        Route::get('show',[CategoryController::class,'show']);
        Route::get('destroy/{id}',[CategoryController::class,'destroy']);
    });


    Route::group(['prefix'=>'product'],function(){
        Route::get('create',[ProductController::class,'create']);
        Route::post('store',[ProductController::class,'store']);
        Route::get('edit/{id}',[ProductController::class,'edit']);
        Route::post('update/{id}',[ProductController::class,'update']);
        Route::get('show',[ProductController::class,'show']);
        Route::get('destroy/{id}',[ProductController::class,'destroy']);
    });
    Route::group(['prefix'=>'deal'],function(){
        Route::get('create',[DealController::class,'create']);
        Route::post('store',[DealController::class,'store']);
        Route::get('edit/{id}',[DealController::class,'edit']);
        Route::post('update/{id}',[DealController::class,'update']);
        Route::get('show',[DealController::class,'show']);
        Route::get('destroy/{id}',[DealController::class,'destroy']);
    });
    Route::group(['prefix'=>'payment'],function(){
        Route::get('create',[PaymentController::class,'create']);
        Route::post('store',[PaymentController::class,'store']);
        Route::get('edit/{id}',[PaymentController::class,'edit']);
        Route::post('update/{id}',[PaymentController::class,'update']);
        Route::get('show',[PaymentController::class,'show']);
        Route::get('destroy/{id}',[PaymentController::class,'destroy']);
    });

    Route::group(['prefix'=>'role'],function(){
        Route::get('create',[RoleController::class,'create']);
        Route::post('store',[RoleController::class,'store']);
        Route::get('edit/{id}',[RoleController::class,'edit']);
        Route::post('update/{id}',[RoleController::class,'update']);
        Route::get('show',[RoleController::class,'show']);
        Route::get('destroy/{id}',[RoleController::class,'destroy']);
    });


    Route::group(['prefix'=>'contact'],function(){
        Route::post('store',[ContactController::class,'store']);
        Route::get('show',[ContactController::class,'show']);
        Route::get('destroy/{id}',[ContactController::class,'destroy']);
    });


    Route::group(['prefix'=>'feedback'],function(){
        Route::post('store',[FeedbackController::class,'store']);
        Route::get('show',[FeedbackController::class,'show']);
        Route::get('destroy/{id}',[FeedbackController::class,'destroy']);
    });


    Route::group(['prefix'=>'checkout'],function(){
        Route::get('show',[CheckoutController::class,'show']);
    });
    Route::group(['prefix'=>'order'],function(){
        Route::get('show',[OrderController::class,'show']);
    });
    Route::group(['prefix'=>'cart'],function(){
        Route::get('show',[CartController::class,'show']);
    });
    Route::group(['prefix'=>'users'],function(){
        Route::get('show',[UserController::class,'show']);
    });


});