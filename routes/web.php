<?php

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function (Request $request) {
    Illuminate\Support\Facades\App::setLocale($request->lang ?? 'en');
    return view('index');
})->name("index");

Route::get('/success-logout', function (Request $request) {
    Illuminate\Support\Facades\App::setLocale($request->lang ?? 'en');
    return view('success',['info' => 3]);
})->name("success-logout");

Route::get('/login-first', function (Request $request) {
    Illuminate\Support\Facades\App::setLocale($request->lang ?? 'en');
    return view('success',['info' => 4]);
})->name("login-first");

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/search', [SearchController::class, 'search'])->name('search');

    Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::get('/cart-add/{id}', [CartController::class, 'cart_add'])->name('cart-add');
    Route::get('/cart-del/{id}', [CartController::class, 'cart_del'])->name('cart-del');
    Route::get('/cart-checkout', [CartController::class, 'checkout'])->name('cart-checkout');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/profile-update', [ProfileController::class, 'profile_update'])->name('profile-update');

    Route::middleware(['admin'])->group(function () {
        Route::get('/account_maintenance', [UserController::class, 'account_maintenance'])->name('account_maintenance');
        Route::get('/account_role/{id}', [UserController::class, 'account_role'])->name('account_role');
        Route::post('/account_update', [UserController::class, 'account_update'])->name('account_update');
        Route::get('/account_del/{id}', [UserController::class, 'account_del'])->name('account_del');
    });
});
