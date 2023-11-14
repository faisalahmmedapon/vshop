<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\User\AddToCartController;
use App\Http\Controllers\User\UserController;

// user routes start

Route::get('/', [UserController::class, 'index'])->name('home');


/*User dashboard*/
Route::group(['middleware' => ['auth', 'user', 'verified']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// add to cart routes
Route::get('/add-to-cart/{id}', [AddToCartController::class, 'addToCart'])->name('addToCart');
Route::get('/cart-views', [AddToCartController::class, 'cartViews'])->name('cartViews');
Route::get('/update-cart-views', [AddToCartController::class, 'updateCartViews'])->name('updateCartViews');
Route::get('/add-to-cart-increment/{id}', [AddToCartController::class, 'addToCartIncrement'])->name('addToCartIncrement');
Route::get('/add-to-cart-decrement/{id}', [AddToCartController::class, 'addToCartDecrement'])->name('addToCartDecrement');
Route::get('/add-to-cart-remove/{id}', [AddToCartController::class, 'addToCartRemove'])->name('addToCartRemove');


// user routes end

// admin routes start


// Route::get('/admin/login', [AdminAuthController::class, 'index'])->name('admin.login.from');
// Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
// Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');


// localhost:8080/admin
Route::middleware(['auth', 'admin', 'verified'])->prefix('admin')->as('admin.')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
});




require __DIR__ . '/auth.php';
