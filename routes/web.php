<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Seller\SellerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// ******************  Admin Route   ***********

Route::prefix('admin')->group(function(){
    Route::get('login',[AdminController::class,'index'])->name('login_form');
    Route::post('login/owner',[AdminController::class,'login'])->name('admin.login');
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('admin_logout',[AdminController::class,'admin_logout'])->name('admin.logout')->middleware('admin');
    Route::get('register',[AdminController::class,'admin_register'])->name('admin.register');
    Route::post('register/store',[AdminController::class,'admin_store'])->name('admin.register.store');



});


// ****************** End Admin Route   ***********


// ******************  Seller Route   ***********

Route::prefix('seller')->group(function(){
    Route::get('login',[SellerController::class,'index'])->name('seller_login_form');
    Route::post('login/owner',[SellerController::class,'login'])->name('seller.login');
    Route::get('dashboard',[SellerController::class,'dashboard'])->name('seller.dashboard')->middleware('seller');
    Route::get('seller_logout',[SellerController::class,'seller_logout'])->name('seller.logout')->middleware('seller');
    Route::get('register',[SellerController::class,'seller_register'])->name('seller.register');
    Route::post('register/store',[SellerController::class,'seller_store'])->name('seller.register.store');



});


// ****************** End Seller Route   ***********
