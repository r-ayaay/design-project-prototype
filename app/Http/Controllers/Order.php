<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Controller
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_email',
        'photo',
        'product',
        'quantity',
        'dimension_x',
        'dimension_y',
        'price',
        'status',
        'method_of_receiving',
    ];
}
