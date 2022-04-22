<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $orders = Order::all()->where('status','=','Pending');
        return view('home')->with('orders',$orders);
    }

    public function getCompletedOrders()
    {
        $orders = Order::all()->where('status','=','Completed');
        return view('home')->with('orders',$orders);
    }

    public function getCancelledOrders()
    {
        $orders = Order::all()->where('status','=','Cancelled');
        return view('home')->with('orders',$orders);
    }
}
