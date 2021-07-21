<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class MyOrders extends Controller
{
    public function Myorders()
    {
        // return view('frontend.myorders');
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('frontend.myorders',['orders'=>$orders]);
    }
}
