<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductRatingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductRecommendationController;


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



Route::get('/product-recommendations', [ProductRecommendationController::class, 'recommend'])
    ->middleware(['auth'])
    ->name('product.recommendations');

Route::post('/product/{productId}', [ProductRatingController::class, 'store'])->name('product.like');

Route::resource('products', ProductController::class);





Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    $products = Product::all(); // Fetch all products
    return view('dashboard', ['products' => $products]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
