<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderPlaced extends Controller
{
    public function orderPlaced()
    {
        return view('frontend.orderplaced');
    }
}
