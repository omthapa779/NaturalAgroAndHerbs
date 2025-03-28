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
    
    public function Product(Request $request)
    {
        // Get query parameters
        $category = $request->query('category', 'all');
        $featured = $request->query('featured');
        $search = $request->query('search');
        
        // Start with a base query
        $query = Product::query();
        
        // Apply category filter if not 'all'
        if ($category !== 'all') {
            $query->where('category', $category);
        }
        
        // Apply featured filter if requested
        if ($featured) {
            $query->where('is_featured', 1);
        }
        
        // Apply search filter if provided
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('product_name', 'like', '%' . $search . '%')
                  ->orWhere('product_description', 'like', '%' . $search . '%')
                  ->orWhere('benefits', 'like', '%' . $search . '%')
                  ->orWhere('how_to_use', 'like', '%' . $search . '%');
            });
        }
        
        // Get the products with pagination (initial load)
        $products = $query->paginate(3);
        
        // Get category counts for the sidebar
        $categoryCounts = [
            'essential oil' => Product::where('category', 'essential oil')->count(),
            'blend oils' => Product::where('category', 'blend oils')->count(),
            'herbs and spices' => Product::where('category', 'herbs and spices')->count(),
            'hair and oil' => Product::where('category', 'hair and oil')->count(),
            'our combos' => Product::where('category', 'our combos')->count(),
        ];
        
        return view('product', compact('products', 'categoryCounts', 'category', 'featured', 'search'));
    }
    
    public function loadMoreProducts(Request $request)
    {
        // Get query parameters
        $category = $request->query('category', 'all');
        $featured = $request->query('featured');
        $search = $request->query('search');
        $page = $request->query('page', 1);
        
        // Start with a base query
        $query = Product::query();
        
        // Apply category filter if not 'all'
        if ($category !== 'all') {
            $query->where('category', $category);
        }
        
        // Apply featured filter if requested
        if ($featured) {
            $query->where('is_featured', 1);
        }
        
        // Apply search filter if provided
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('product_name', 'like', '%' . $search . '%')
                  ->orWhere('product_description', 'like', '%' . $search . '%')
                  ->orWhere('benefits', 'like', '%' . $search . '%')
                  ->orWhere('how_to_use', 'like', '%' . $search . '%');
            });
        }
        
        // Get the products with pagination
        $products = $query->paginate(3, ['*'], 'page', $page);
        
        // Return JSON response with HTML and pagination info
        return response()->json([
            'html' => view('partials.product-items', compact('products'))->render(),
            'hasMorePages' => $products->hasMorePages(),
            'nextPage' => $products->hasMorePages() ? $page + 1 : null
        ]);
    }
    public function productDetail($id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);
        
        // Get related products (same category, excluding current product)
        $relatedProducts = Product::where('category', $product->category)
                                ->where('id', '!=', $product->id)
                                ->take(3)
                                ->get();
        
        // If there are not enough related products in the same category, get some featured products
        if ($relatedProducts->count() < 3) {
            $additionalProducts = Product::where('id', '!=', $product->id)
                                    ->where('category', '!=', $product->category)
                                    ->where('is_featured', 1)
                                    ->take(3 - $relatedProducts->count())
                                    ->get();
            
            $relatedProducts = $relatedProducts->concat($additionalProducts);
        }
        
        return view('product_details', compact('product', 'relatedProducts'));
    }
    }