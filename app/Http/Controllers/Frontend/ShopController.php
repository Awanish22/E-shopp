<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ShopController extends Controller
{
    public function index()
    {
        $data=product::all();
        return view('frontend.collection',['products'=>$data]);
        // return product::all();
    }

    // public function singleproduct($id)
    // {
    //     return product::find($id);
    // }




}
