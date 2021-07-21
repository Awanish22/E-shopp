<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\product;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;



class CartController extends Controller
{
    public function index()
    {
        return view('frontend.cart');
    }


    function addToCart(Request $req)
    {
        {   
            if($req->session()->has('user'))
            
            {
                $cart=new cart;
                $cart->user_id=$req->session()->get('user')['id'];
                $cart->product_id =$req->product_id;
                $cart->save();
                return redirect('/cart');
            
            }
            else{
                return redirect('/login');
            }
        }
    }


    static function cartItem()
    {
        $userId=session::get('user')['id'];
        return Cart::where('user_id' ,$userId)->count();
    }

    function cartlist()
    {
        $userId=Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('frontend.cart',['products'=>$products]);



        // $products= DB::table('cart')
        // ->join('products','cart.product_id','=','products.id')
        // ->get();
        // return view('frontend.cart',['products'=>$products]);



        // $userId=Session::get('user')['id'];

        // $products= DB::table('cart')
        // ->join('products','cart.product_id','=','products_id')
        // ->where('cart.user_id',$userId)
        // ->select('products.*','cart.id as cart_id')
        // ->get();
       







    }


            function removecart($id)
            {
                Cart::destroy($id);
                return redirect('/cart');
            }



          public  function total()
          
            {
                $userId=Session::get('user')['id'];
       return $total= $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        
                
            }
        






}
