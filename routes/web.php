<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\order;
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
Route::get('/order/{product}', [OrderController::class, 'orderProduct']);

Route::post('/addOrder', function (Request $request) {

    $destination_path = 'public/order';
    $photo = $_FILES['photo'];
    request(('photo'))->storeAs($destination_path, $photo['name']);

    $order = new order;
    $order->client_name = $request->name;
    $order->client_email = $request->email;
    $order->photo = $photo['name'];
    $order->quantity = $request->quantity;
    $order->product = $request->product;
    $order->method_of_receiving = $request->method_of_receiving;
    switch ($request->product) {
        case "A1":
            $order->dimension_x = 59.4;
            $order->dimension_y = 84.1;
            $order->price = 22 * $order->quantity;
            break;

        case "A3":
            $order->dimension_x = 29.7;
            $order->dimension_y = 42;
            $order->price = 15 * $order->quantity;
            break;

        case "A4":
            $order->dimension_x = 21;
            $order->dimension_y = 29.7;
            $order->price = 2 * $order->quantity;
            break;
    }

    $order->save();
    return redirect('/order');
});

Route::get('/contact', function () {
    return view('sections.contact');
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
