<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use\Illuminate\Support\Facades\Hash;
use Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('frontend.register');
    }


    function register(Request $req)
    {
       $user= new User;
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password=$req->password=Hash::make($req->password);
       $user->save();
       return redirect('/login');
    }


}
