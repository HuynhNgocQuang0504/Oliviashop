<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ProductadminController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AddproductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FogotpassController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/sanpham', 'ProductController@list')->name('sanpham');
// Route::get('/sanpham/{id}', 'ProductController@list')->name('chitiet');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/list', [ProController::class, 'list'])->name('list');
Route::get('/detail/{id}', [ProController::class, 'detail'])->name('detail');

Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/bill', [BillController::class, 'bill'])->name('bill');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/update', [UpdateController::class, 'update'])->name('update');
Route::get('/productadmin', [ProductadminController::class, 'productadmin'])->name('productadmin');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/addproduct', [AddproductController::class, 'addproduct'])->name('addproduct');
Route::get('/fogotpass', [FogotpassController::class, 'fogotpass'])->name('fogotpass');



