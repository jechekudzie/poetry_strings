<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [SiteController::class, 'index']);
Route::get('/checkout/{bookType}', [SiteController::class, 'chooseCopy']);

Route::post('/purchase/{bookType}', [SiteController::class, 'purchase']);

Route::get('/paynow/{purchase}', [SiteController::class, 'paynow']);

Route::get('/purchase_confirmation/{purchase}', [SiteController::class, 'purchaseConfirmation']);

Route::get('/qr_codes', [SiteController::class, 'qr_codes']);


Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/first-book', [BookController::class, 'getFirstBook']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
