<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
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
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');


// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/dashboard', DashboardController::class)->name('dashboard', 'dashboard.index');
Route::get('icons', function() {
    return view('pages.icons.mdi');
})->name('icons');
Route::get('forms', function() {
    return view('pages.forms.basic_elements');
})->name('forms');
Route::get('table', function() {
    return view('pages.tables.basic-table');
})->name('table');
