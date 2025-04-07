<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    // Fetch only the featured products
    $featuredProducts = Product::where('is_featured', 1)->get();

    // Fetch the count of products in each category
    $categoryCounts = [
        'essential oil' => Product::where('category', 'essential oil')->count(),
        'blend oils' => Product::where('category', 'blend oils')->count(),
        'herbs and spices' => Product::where('category', 'herbs and spices')->count(),
        'hair and oil' => Product::where('category', 'hair and oil')->count(),
        'our combos' => Product::where('category', 'our combos')->count(),
    ];

    // Return the welcome view and pass the featured products and category counts data
    return view('welcome', compact('featuredProducts', 'categoryCounts'));
});


//404 page
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

//static pages
Route::get('/about', [PagesController::class, 'About']);
Route::get('/process', [PagesController::class, 'Process']);
Route::get('/contact', [PagesController::class, 'Contact']);
Route::get('/products', [PagesController::class, 'Product'])->name('products');

// AJAX route for loading more products
Route::get('/products/load-more', [PagesController::class, 'loadMoreProducts'])->name('products.load-more');
// Product detail page
Route::get('/product/{id}', [PagesController::class, 'productDetail'])->name('product.detail');

//Dynamic Pages
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');


//dashboard Routes
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin')->name('admin.dashboard');
    // Show the product upload form
    Route::get('/product-upload', [ProductController::class, 'showUploadForm'])->name('product.upload');
    // Handle the product upload form submission
    Route::post('product-upload', [ProductController::class, 'uploadProduct'])->name('product.store');
    // Product Index
Route::get('/products-admin', [ProductController::class, 'index'])->name('product.index');
    // Route to delete a product
    Route::delete('admin/product/{id}', [ProductController::class, 'deleteProduct'])->name('admin.product.delete');
    Route::get('admin/product/{id}/edit', [ProductController::class, 'editProduct'])->name('admin.product.edit');
    Route::put('admin/product/{id}', [ProductController::class, 'updateProduct'])->name('admin.product.update');    
});

