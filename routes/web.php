<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\User\AddToCartController;
use App\Http\Controllers\User\UserController;
use App\Models\User\CategoryProducts;

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
Route::get('/remove-all-from-cart', [AddToCartController::class, 'removeAllFormCart'])->name('removeAllFormCart');



// search product by category
Route::get('/products/{slug}', [CategoryProducts::class, 'category'])->name('category');
Route::get('/product-details/{slug}', [DashboardController::class, 'details'])->name('product_detail');


// user routes end

// admin routes start


// Route::get('/admin/login', [AdminAuthController::class, 'index'])->name('admin.login.from');
// Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
// Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');


// localhost:8080/admin
Route::middleware(['auth', 'admin', 'verified'])->prefix('admin')->as('admin.')->group(function () {


    // admin user can got admin/dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

// use this route for category management
    Route::controller(CategoryController::class)->group(function () {

        Route::get('/categories', 'index')->name('categories');

        Route::prefix('category')->as('category.')->group(function () {
            Route::post('/store', 'store')->name('store');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });

    });

// use this route for brand management
    Route::controller(BrandController::class)->group(function () {

        Route::get('/brands', 'index')->name('brands');

        Route::prefix('brand')->as('brand.')->group(function () {
            Route::post('/store', 'store')->name('store');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });

    });


    Route::controller(ProductController::class)->group(function () {

        Route::get('/products', 'index')->name('products');

        Route::as('product.')->group(function () {
            Route::post('/product/store', 'store')->name('store');
            Route::post('/product/update/{id}', 'update')->name('update');
            Route::get('/product/delete/{id}', 'destroy')->name('destroy');
            Route::get('/product/show/{id}', 'show')->name('show');
            Route::get('/remove/product/image/{id}', 'remove_image')->name('remove');
        });

    });



});

Route::fallback(function (){
    return '404 page';
});



require __DIR__ . '/auth.php';




