<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(2)->get();

        // Get the number of products added this month
        $newProductsThisMonth = Product::whereMonth('created_at', now()->month)->count();

        // Get the total number of products
        $totalProducts = Product::count();

        // Get the number of featured products
        $featuredProducts = Product::where('is_featured', true)->count();

        // Pass the data to the view
        return view('admin.dashboard', compact('products', 'newProductsThisMonth', 'totalProducts', 'featuredProducts'));
    }
}
