<?php

use App\Http\Controllers\CasesController;
use App\Http\Controllers\OrderOnlineController;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::any('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // return "All Cache is cleared";
    // $pageInfo = PageSettingInfo::getHomeBanner('/index');
    // return view('index', ['pageInfo' => $pageInfo]);
    return redirect()->route('index');
});

Route::get('/', function () {
    $seoInfo = SeoSettingRepository::getInfo('/*');
    return view('index')->with('seoInfo', $seoInfo);
})->name('index');

Route::get('/about', function () {
    $seoInfo = SeoSettingRepository::getInfo('/about');
    return view('about')->with('seoInfo', $seoInfo);
})->name('about');

Route::get('/service', function () {
    $seoInfo = SeoSettingRepository::getInfo('/service');
    return view('service')->with('seoInfo', $seoInfo);
})->name('service');

Route::get('/process', function () {
    $seoInfo = SeoSettingRepository::getInfo('/process');
    return view('process')->with('seoInfo', $seoInfo);
})->name('process');

Route::any('/cases/{category?}', [CasesController::class, 'index'])->name('cases');

Route::any('/cases_inner/{id}/{category?}', [CasesController::class, 'show'])->name('cases_inner');

Route::get('/faq', function () {
    $seoInfo = SeoSettingRepository::getInfo('/faq');
    return view('faq')->with('seoInfo', $seoInfo);
})->name('faq');

Route::get('/order_online', [OrderOnlineController::class, 'index'])->name('order_online');

Route::any('/order_online/submit', [OrderOnlineController::class, 'submit'])->name('order_online.submit');

Route::any('/order_pay_atm', [OrderOnlineController::class, 'atm'])->name('order_pay_atm');

Route::any('/update-order/{id}', [OrderOnlineController::class, 'updateOrder'])->name('update-order');

Route::get('/order_pay_credit', function () {
    $seoInfo = SeoSettingRepository::getInfo('/order_pay_credit');
    return view('order_pay_credit')->with('seoInfo', $seoInfo);
})->name('order_pay_credit');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::resource('seoSettings', App\Http\Controllers\Admin\SeoSettingController::class, ["as" => 'admin']);
        // Route::resource('marqueeInfos', App\Http\Controllers\Admin\MarqueeInfoController::class, ["as" => 'admin']);
        Route::resource('caseInfos', App\Http\Controllers\Admin\CaseInfoController::class, ["as" => 'admin']);
        Route::resource('planInfos', App\Http\Controllers\Admin\PlanInfoController::class, ["as" => 'admin']);
        Route::resource('orderInfos', App\Http\Controllers\Admin\OrderInfoController::class, ["as" => 'admin']);

        Route::any('adminUsers', [App\Http\Controllers\Admin\AdminAccountController::class, 'index'])->name('admin.adminUsers.index');
        Route::any('adminUsers/create', [App\Http\Controllers\Admin\AdminAccountController::class, 'create'])->name('admin.adminUsers.create');
        Route::any('adminUsers/store', [App\Http\Controllers\Admin\AdminAccountController::class, 'store'])->name('admin.adminUsers.store');
        Route::any('adminUsers/show/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'show'])->name('admin.adminUsers.show');
        Route::any('adminUsers/edit/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'edit'])->name('admin.adminUsers.edit');
        Route::any('adminUsers/update/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'update'])->name('admin.adminUsers.update');
        Route::any('adminUsers/destroy/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'destroy'])->name('admin.adminUsers.destroy');
    });
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('caseCategoryInfos', App\Http\Controllers\Admin\CaseCategoryInfoController::class, ["as" => 'admin']);
});
