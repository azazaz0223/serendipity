<?php

use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\StaffController;


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

        Route::group(['namespace' => 'Question', 'prefix' => 'question'], function () {
            Route::get('', [QuestionController::class, 'index'])->name('backend.question.index');
            Route::get('api/{question}', [QuestionController::class, 'show'])->name('backend.question.show');
            Route::patch('api/{question}', [QuestionController::class, 'update'])->name('backend.question.update');
            Route::delete('api/{question}', [QuestionController::class, 'destroy'])->name('backend.question.delete');
        });
    });
});
