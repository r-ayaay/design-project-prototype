<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\order;

class OrderController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('sections.order');
    }

    public function orderProduct($product)
    {

        switch ($product) {
            case "A1":
                return view('forms.a1');
                break;

            case "A3":
                return view('forms.a3');
                break;

            case "A4":
                return view('forms.a4');
                break;
        }
    }
}
