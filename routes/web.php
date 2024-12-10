<?php

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

$seoInfo = SeoSettingRepository::getInfo('/*');

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

Route::get('/', function () use ($seoInfo) {
    return view('index')->with('seoInfo', $seoInfo);
})->name('index');

Route::get('/about', function () use ($seoInfo) {
    return view('about')->with('seoInfo', $seoInfo);
})->name('about');

Route::get('/service', function () use ($seoInfo) {
    return view('service')->with('seoInfo', $seoInfo);
})->name('service');

Route::get('/process', function () use ($seoInfo) {
    return view('process')->with('seoInfo', $seoInfo);
})->name('process');

Route::get('/cases', function () use ($seoInfo) {
    return view('cases')->with('seoInfo', $seoInfo);
})->name('cases');

Route::get('/cases_inner', function () use ($seoInfo) {
    return view('cases_inner')->with('seoInfo', $seoInfo);
})->name('cases_inner');

Route::get('/faq', function () use ($seoInfo) {
    return view('faq')->with('seoInfo', $seoInfo);
})->name('faq');

Route::get('/order_online', function () use ($seoInfo) {
    return view('order_online')->with('seoInfo', $seoInfo);
})->name('order_online');

Route::get('/order_pay_atm', function () use ($seoInfo) {
    return view('order_pay_atm')->with('seoInfo', $seoInfo);
})->name('order_pay_atm');

Route::get('/order_pay_credit', function () use ($seoInfo) {
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
