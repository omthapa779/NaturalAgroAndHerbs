<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function About(){
        return view('about');
    }
    
    public function Process(){
        return view('process');
    }
    
    public function Contact(){
        return view('contact');
    }
    // Add this method to your PagesController
    public function productDetail($id)
    {
        $product = Product::with('sizes')->findOrFail($id);
        
        // Get related products in the same category
        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->with('sizes')
            ->limit(3)
            ->get();
        
        return view('product_details', compact('product', 'relatedProducts'));
    }

    // Update the Product method to include sizes
    public function Product(Request $request)
    {
        $query = Product::with('sizes');
        
        // Apply category filter
        if ($request->has('category') && $request->category != 'all') {
            $query->where('category', $request->category);
        }
        
        // Apply featured filter
        if ($request->has('featured')) {
            $query->where('is_featured', 1);
        }
        
        // Apply search filter
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('product_name', 'like', "%{$search}%")
                ->orWhere('product_description', 'like', "%{$search}%");
            });
        }
        
        // Get paginated results
        $products = $query->paginate(12);
        
        // Get category counts
        $categoryCounts = [
            'essential oil' => Product::where('category', 'essential oil')->count(),
            'blend oils' => Product::where('category', 'blend oils')->count(),
            'herbs and spices' => Product::where('category', 'herbs and spices')->count(),
            'hair and oil' => Product::where('category', 'hair and oil')->count(),
            'our combos' => Product::where('category', 'our combos')->count(),
        ];
        
        return view('product', compact('products', 'categoryCounts'));
    }

    // Update the loadMoreProducts method to include sizes
    public function loadMoreProducts(Request $request)
    {
        $query = Product::with('sizes');
        
        // Apply category filter
        if ($request->has('category') && $request->category != 'all') {
            $query->where('category', $request->category);
        }
        
        // Apply featured filter
        if ($request->has('featured')) {
            $query->where('is_featured', 1);
        }
        
        // Apply search filter
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('product_name', 'like', "%{$search}%")
                ->orWhere('product_description', 'like', "%{$search}%");
            });
        }
        
        // Get paginated results
        $products = $query->paginate(12, ['*'], 'page', $request->page);
        
        // Render the products as HTML
        $html = view('partials.product-items', compact('products'))->render();
        
        return response()->json([
            'html' => $html,
            'hasMorePages' => $products->hasMorePages()
        ]);
    }    
}