<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\LikeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('test', function () {
    return view('website/home')->name('shop');
});
Route::get('test2', function () {
    return view('website/cart_details')->name('cart_details');
});
Route::get('test3', function () {
    return view('website/checkout')->name('checkout');
});
Route::view('cart_details', 'website/cart_details')->name('cart_details');
Route::view('shop', 'website/shop')->name('shop');

Auth::routes();

Route::get('/home', [HomeController::class, 'index2'])->name('home');




Route::get('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('update-password');

Route::get('privacy-policy', function () {
    return view('privacy_policy');
})->name('privacy.policy');

Route::get('cookie-policy', function () {
    return view('cookie-policy');
})->name('cookie.policy');

Route::get('upload-file', [UploadController::class, 'create'])->name('upload.file');
Route::post('upload-file', [UploadController::class, 'store'])->name('upload.file');

Route::get('clear_cache', function () {

    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('migrate');

    dd("Cache is cleared");
});


Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::post('category', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

Route::get('product/{id}', [ProductController::class, 'detail'])->name('product.detail');

Route::get('/search', [SimpleController::class, 'search'])->name('search');

//PAYMENT
Route::get('/payment',  [PaymentController::class, 'index']);
Route::post('/payment', [PaymentController::class, 'payment'])->name('payment.store');

Route::get('checkout/{id}', [CheckoutController::class, 'create'])->name('checkout.create');
Route::get('like/{id}', [LikeController::class, 'likePost'])->name('like.store');
Route::get('dislike/{id}', [LikeController::class, 'dislikePost'])->name('dislike.store');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('account', [UploadController::class,'getAccountUploads'])->name('account.uploads');

