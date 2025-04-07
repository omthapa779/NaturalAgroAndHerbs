<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(2)->get();

        // Get the total number of products
        $totalProducts = Product::count();

        // Get the number of featured products
        $featuredProducts = Product::where('is_featured', true)->count();

        // Get weekly visitors (unique sessions in the last 7 days)
        $weeklyVisitors = DB::table('sessions')
            ->where('last_activity', '>=', now()->subDays(7)->timestamp)
            ->count();

        // Pass the data to the view
        return view('admin.dashboard', compact('products', 'totalProducts', 'featuredProducts', 'weeklyVisitors'));
    }
}
