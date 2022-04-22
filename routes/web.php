<?php

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

Route::get('/', function () {
    return view('sections.home');
});
Route::get('/order', function () {
    return view('sections.order');
});
Route::get('/about', function () {
    return view('sections.about');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

// Route::get('/login', function () {
//     return view('admin.login');
// });

Auth::routes();

// These routes retrieve the data for the orders of all statuses (Pending, Completed, Cancelled)
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/completed', [App\Http\Controllers\HomeController::class, 'getCompletedOrders']);
Route::get('/admin/cancelled', [App\Http\Controllers\HomeController::class, 'getCancelledOrders']);
