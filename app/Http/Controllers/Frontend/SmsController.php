<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facades\Nexmo;

class SmsController extends Controller
{
    public function index()
{
    // Nexmo::message()->send([
    //     'to'   => '7275198770',
    //     'from' => 'Drone',
    //     'text' => 'dron placed.'
    // ]);
    
    echo "message  sent";
}
}
