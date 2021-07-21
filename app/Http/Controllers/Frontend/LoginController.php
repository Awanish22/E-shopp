<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use\Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
       
 
    }

    function login(Request $req)
    {
        $user= User:: where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
        return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }





























}






