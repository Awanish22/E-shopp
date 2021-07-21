<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\SingleproductController;
use App\Http\Controllers\Frontend\FormController;
use App\Http\Controllers\Frontend\OrderPlaced;
use App\Http\Controllers\Frontend\MyOrders;
use App\Http\Controllers\Frontend\SmsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/aboutus', [AboutusController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/cart', [CartController::class, 'index']);
// Route::get('single-product', [SingleproductController::class, 'index']);
Route::POST('/', [LoginController::class, 'login']);
Route::get('single-product/{id}', [SingleproductController::class, 'singleproduct']);
Route::post('/add to cart', [CartController::class, 'addToCart']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});
Route::get('/cart', [CartController::class, 'cartlist']);
Route::get('/removecart/{id}', [CartController::class, 'removeCart']);
Route::get('/total', [CartController::class, 'total']);
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'checkout']);
Route::get('/orderplaced', [OrderPlaced::class, 'orderPlaced']);
Route::get('/myorders', [MyOrders::class, 'Myorders']);
Route::get('/sms', [SmsController::class, 'index']);


