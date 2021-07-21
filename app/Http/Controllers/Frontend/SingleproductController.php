<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class SingleproductController extends Controller
{
    public function index()
    {
        return view('frontend.single-product');
    }





    public function singleproduct($id)
    {
        $data= product::find($id);
        return view('frontend.single-product',['product'=>$data]);
    }
}




