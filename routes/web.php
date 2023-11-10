<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\DashboardController;

// user routes start


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


/*User dashboard*/
Route::group(['middleware' => ['auth', 'user','verified']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});



// user routes end

// admin routes start


Route::get('/admin/login', [AdminAuthController::class, 'index'])->name('admin.login.from');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');


// localhost:8080/admin
Route::middleware(['auth','admin','verified'])->prefix('admin')->as('admin.')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');


    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

});





require __DIR__ . '/auth.php';
