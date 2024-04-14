<?php

use App\Http\Controllers\DashboardController;
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
