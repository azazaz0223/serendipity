<?php

use App\Http\Controllers\Backend\CarouselController;
use App\Http\Controllers\Backend\CaseShareController;
use App\Http\Controllers\Backend\ClinicController;
use App\Http\Controllers\Backend\EvaluationFormController;
use App\Http\Controllers\Backend\IndexSettingController;
use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\ShareExperienceController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\Frontend\CaseShareController as FrontendCaseShareController;
use App\Http\Controllers\Frontend\ClinicController as FrontendClinicController;
use App\Http\Controllers\Frontend\EvaluationFormController as FrontendEvaluationFormController;
use App\Http\Middleware\BackendAuthenticated;
use UniSharp\LaravelFilemanager\Lfm;

// 前台路由
// 首頁
Route::get('', [IndexController::class, 'index'])->name('frontend.index');
// 診所地圖
Route::get('clinic', [FrontendClinicController::class, 'index'])->name('frontend.clinic.index');
// 案例分享
Route::group(['namespace' => 'CashShare', 'prefix' => 'cashShare'], function () {
    Route::get('', [FrontendCaseShareController::class, 'index'])->name('frontend.cashShare.index');
    Route::get('more', [FrontendCaseShareController::class, 'more'])->name('frontend.caseShare.more');
    Route::get('{caseShare}', [FrontendCaseShareController::class, 'show'])->name('frontend.caseShare.detail');
});
// 評估單
Route::group(['namespace' => 'EvaluationForm', 'prefix' => 'evaluationForm'], function () {
    Route::get('', [FrontendEvaluationFormController::class, 'index'])->name('frontend.evaluationForm.index');
    Route::get('variety', [FrontendEvaluationFormController::class, 'variety'])->name('frontend.evaluationForm.variety');
    Route::post('api', [FrontendEvaluationFormController::class, 'store'])->name('frontend.evaluationForm.store');
    Route::get('{evaluationForm}', [FrontendEvaluationFormController::class, 'show'])->name('frontend.evaluationForm.detail');
    Route::get('camera/{evaluationForm}', [FrontendEvaluationFormController::class, 'camera'])->name('frontend.evaluationForm.camera');
    Route::patch('api/{evaluationForm}', [FrontendEvaluationFormController::class, 'update'])->name('frontend.evaluationForm.update');
});


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

        // 輪播 banner 模組
        Route::group(['namespace' => 'Carousel', 'prefix' => 'carousel'], function () {
            Route::get('', [CarouselController::class, 'index'])->name('backend.carousel.index');
            Route::post('api', [CarouselController::class, 'store'])->name('backend.carousel.store');
            Route::get('api/{carousel}', [CarouselController::class, 'show'])->name('backend.carousel.show');
            Route::patch('api/{carousel}', [CarouselController::class, 'update'])->name('backend.carousel.update');
            Route::delete('api/{carousel}', [CarouselController::class, 'destroy'])->name('backend.carousel.delete');
        });

        // 影片設定模組
        Route::group(['namespace' => 'Video', 'prefix' => 'video'], function () {
            Route::get('', [VideoController::class, 'index'])->name('backend.video.index');
            Route::post('api', [VideoController::class, 'save'])->name('backend.video.save');
        });

        // 診療心得分享模組
        Route::group(['namespace' => 'ShareExperience', 'prefix' => 'shareExperience'], function () {
            Route::get('', [ShareExperienceController::class, 'index'])->name('backend.shareExperience.index');
            // Route::post('api', [ShareExperienceController::class, 'store'])->name('backend.shareExperience.store');
            Route::get('api/{shareExperience}', [ShareExperienceController::class, 'show'])->name('backend.shareExperience.show');
            Route::patch('api/{shareExperience}', [ShareExperienceController::class, 'update'])->name('backend.shareExperience.update');
            // Route::delete('api/{shareExperience}', [ShareExperienceController::class, 'destroy'])->name('backend.shareExperience.delete');
        });

        // Q&A 模組
        Route::group(['namespace' => 'Question', 'prefix' => 'question'], function () {
            Route::get('', [QuestionController::class, 'index'])->name('backend.question.index');
            Route::post('api', [QuestionController::class, 'store'])->name('backend.question.store');
            Route::get('api/{question}', [QuestionController::class, 'show'])->name('backend.question.show');
            Route::patch('api/{question}', [QuestionController::class, 'update'])->name('backend.question.update');
            Route::delete('api/{question}', [QuestionController::class, 'destroy'])->name('backend.question.delete');
        });

        // 首頁設定模組
        Route::group(['namespace' => 'IndexSetting', 'prefix' => 'indexSetting'], function () {
            Route::get('', [IndexSettingController::class, 'index'])->name('backend.indexSetting.index');
            Route::patch('api/{indexSetting}', [IndexSettingController::class, 'update'])->name('backend.indexSetting.update');
        });

        // 案例分享模組
        Route::group(['namespace' => 'CaseShare', 'prefix' => 'caseShare'], function () {
            Route::get('', [CaseShareController::class, 'index'])->name('backend.caseShare.index');
            Route::get('create', [CaseShareController::class, 'create'])->name('backend.caseShare.create');
            Route::post('api', [CaseShareController::class, 'store'])->name('backend.caseShare.store');
            Route::get('{caseShare}', [CaseShareController::class, 'show'])->name('backend.caseShare.show');
            Route::patch('api/{caseShare}', [CaseShareController::class, 'update'])->name('backend.caseShare.update');
            Route::delete('api/{caseShare}', [CaseShareController::class, 'destroy'])->name('backend.caseShare.delete');
        });

        // 診所地圖模組
        Route::group(['namespace' => 'Clinic', 'prefix' => 'clinic'], function () {
            Route::get('', [ClinicController::class, 'index'])->name('backend.clinic.index');
            Route::post('api', [ClinicController::class, 'store'])->name('backend.clinic.store');
            Route::get('api/{clinic}', [ClinicController::class, 'show'])->name('backend.clinic.show');
            Route::patch('api/{clinic}', [ClinicController::class, 'update'])->name('backend.clinic.update');
            Route::delete('api/{clinic}', [ClinicController::class, 'destroy'])->name('backend.clinic.delete');
        });

        // 評估單管理模組
        Route::group(['namespace' => 'EvaluationForm', 'prefix' => 'evaluationForm'], function () {
            Route::get('', [EvaluationFormController::class, 'index'])->name('backend.evaluationForm.index');
            Route::get('create', [EvaluationFormController::class, 'create'])->name('backend.evaluationForm.create');
            Route::post('api', [EvaluationFormController::class, 'store'])->name('backend.evaluationForm.store');
            Route::get('{evaluationForm}', [EvaluationFormController::class, 'show'])->name('backend.evaluationForm.show');
            Route::patch('api/{evaluationForm}', [EvaluationFormController::class, 'update'])->name('backend.evaluationForm.update');
            Route::delete('api/{evaluationForm}', [EvaluationFormController::class, 'destroy'])->name('backend.evaluationForm.delete');
        });
    });
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});