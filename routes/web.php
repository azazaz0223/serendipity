<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\CarouselController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\Backend\ContactController;


use App\Http\Middleware\BackendAuthenticated;


// 前台路由
Route::get('', [IndexController::class, 'index'])->name('frontend.index');
Route::post('createContact', [IndexController::class, 'storeContact'])->name('frontend.createContact');

// 後台路由
Route::group(['namespace' => 'Backend', 'prefix' => 'backend'], function () {
    // 登入登出模組路由
    Route::group([], function () {
        Route::get('login', [LoginController::class, 'login'])->name('backend.login');
        Route::post('logging', [LoginController::class, 'logging'])->name('backend.logging');
        Route::get('logout', [LoginController::class, 'logout'])->name('backend.logout');
    });
    Route::patch('api/password/{staff}', [StaffController::class, 'updatePassword'])->name('backend.updatePassword');

    // auth 中間層保護機制
    Route::middleware([BackendAuthenticated::class])->group(function () {
        // 大廳畫面路由
        Route::get('index', function () {
            return view('backend.index');
        })->name('backend.index');

        // 輪播圖與logo路由
        Route::group(['namespace' => 'Carousel', 'prefix' => 'carousel'], function () {
            Route::get('', [CarouselController::class, 'index'])->name('backend.carousel.index');
            Route::post('api/logo', [CarouselController::class, 'updateLogo'])->name('backend.carousel.updateLogo');
            Route::post('api', [CarouselController::class, 'upsert'])->name('backend.carousel.upsert');
        });

        // 關於我們路由
        Route::group(['namespace' => 'About', 'prefix' => 'about'], function () {
            Route::get('', [AboutController::class, 'index'])->name('backend.about.index');
            Route::patch('api/{about}', [AboutController::class, 'update'])->name('backend.about.update');
            Route::post('api/image/{about}', [AboutController::class, 'UpdateImageInfo'])->name('backend.about.UpdateImageInfo');
        });

        // 最新消息路由
        Route::group(['namespace' => 'News', 'prefix' => 'news'], function () {
            Route::get('', [NewsController::class, 'index'])->name('backend.news.index');
            Route::get('{news}', [NewsController::class, 'show'])->name('backend.news.detail');
            Route::post('api', [NewsController::class, 'store'])->name('backend.news.create');
            Route::patch('api/{news}', [NewsController::class, 'update'])->name('backend.news.update');
            Route::delete('api/{news}', [NewsController::class, 'destroy'])->name('backend.news.delete');
        });

        // 商品介紹路由
        Route::group(['namespace' => 'Product', 'prefix' => 'product'], function () {
            Route::get('', [ProductController::class, 'index'])->name('backend.product.index');
            Route::get('{product}', [ProductController::class, 'show'])->name('backend.product.detail');
            Route::post('api', [ProductController::class, 'store'])->name('backend.product.create');
            Route::patch('api/{product}', [ProductController::class, 'update'])->name('backend.product.update');
            Route::delete('api/{product}', [ProductController::class, 'destroy'])->name('backend.product.delete');
        });

        // 聯絡我們路由
        Route::group(['namespace' => 'Contact', 'prefix' => 'contact'], function () {
            Route::get('', [ContactController::class, 'index'])->name('backend.contact.index');
            Route::patch('api/{contact}', [ContactController::class, 'update'])->name('backend.contact.update');
        });

    });
});
