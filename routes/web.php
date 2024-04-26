<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PageSettingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TemporaryFileController;
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

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/info', [LandingController::class, 'info'])->name('info');
Route::get('/service', [LandingController::class, 'service'])->name('service');
Route::get('/features', [LandingController::class, 'features'])->name('features');
Route::get('/appointment', [LandingController::class, 'appointment'])->name('appointment');
Route::get('/team', [LandingController::class, 'team'])->name('team');
Route::get('/testimonial', [LandingController::class, 'testimonial'])->name('testimonial');
Route::get('/notfound', [LandingController::class, 'notfound'])->name('notfound');
// Route::get('/registration', [LandingController::class, 'registration'])->name('registration');
Route::match(['get', 'post'], '/registration', [LandingController::class, 'registration'])->name('registration');


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', function() {
    return view('pages.samples.login');
})->name('login');
Route::get('/register', function() {
    return view('pages.samples.register');
})->name('register');
Route::get('/blank-page', function() {
    return view('pages.samples.blank-page');
})->name('blank-page');
Route::get('/error-404', function() {
    return view('pages.samples.error-404');
})->name('error-404');
Route::get('/error-500', function() {
    return view('pages.samples.error-500');
})->name('error-500');
Route::resource('/dashboard', DashboardController::class)->name('dashboard', 'dashboard.index');

Route::controller(TemporaryFileController::class)->group(function(){
    Route::match(['post','delete'],'temp/upload','index')->name('temporary.upload');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/user-register', 'index')->name('user-register.index');
    Route::delete('/user-register/{id}', 'destroy')->name('user-register.delete');
});

Route::controller(PageSettingController::class)->group(function () {
    Route::get('/page-setting', 'index')->name('page-setting.index');
    Route::get('/page-setting/home', 'homeSetting')->name('page-setting.home');
    Route::put('/page-setting/home/update', 'update')->name('page-setting.homeupdate');
});

Route::get('buttons', function() {
    return view('pages.ui-features.buttons');
})->name('buttons');
Route::get('typography', function() {
    return view('pages.ui-features.typography');
})->name('typography');
Route::get('icons', function() {
    return view('pages.icons.mdi');
})->name('icons');
Route::get('forms', function() {
    return view('pages.forms.basic_elements');
})->name('forms');
Route::get('charts', function() {
    return view('pages.charts.charts');
})->name('charts');
Route::get('table', function() {
    return view('pages.tables.basic-table');
})->name('table');
