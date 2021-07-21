<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\product;
use Session;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        $userId=Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('frontend.form',['products'=>$products]);
    }

    public function checkout(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        
        foreach($allCart as $cart )
        {
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->name=$req->name;
            $order->email=$req->email;
            $order->address=$req->address;
            $order->city=$req->city;
            $order->state=$req->state;
            $order->zip=$req->zip;
            $order->cardname=$req->cardname;
            $order->cardnumber=$req->cardnumber;
            $order->expmonth=$req->expmonth;
            $order->expyear=$req->expyear;
            $order->cvv=$req->cvv;

            $order->save();
           
            cart::where('user_id',$userId)->delete();
        }
        // return $req->input();
            //  $req->input();
            return redirect('/orderplaced');
    }




}

