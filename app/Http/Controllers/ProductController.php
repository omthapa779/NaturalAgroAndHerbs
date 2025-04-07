<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // Show the form to upload a product
    public function showUploadForm()
    {
        return view('admin.product_upload');
    }

    // Handle the product upload
    public function uploadProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'product_description' => 'required|string',
            'benefits' => 'required|string',
            'how_to_use' => 'required|string',
            'product_image' => 'required|image|max:2048',
            'extra_image' => 'nullable|image|max:2048',
            'is_featured' => 'required|in:0,1' // Ensure it only accepts 0 or 1
        ]);

        Product::create([
            'product_name' => $request->product_name,
            'category' => $request->category,
            'price' => $request->price,
            'product_description' => $request->product_description,
            'benefits' => $request->benefits,
            'how_to_use' => $request->how_to_use,
            'product_image' => $request->file('product_image')->store('products', 'public'),
            'extra_image' => $request->file('extra_image') ? $request->file('extra_image')->store('products', 'public') : null,
            'is_featured' => $request->is_featured // Now properly stores 1 or 0
        ]);

        return redirect()->route('product.index')->with('success', 'Product uploaded successfully!');
    }

    // Handle product deletion
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        // Delete images from storage
        if ($product->product_image) {
            Storage::disk('public')->delete($product->product_image);
        }
        if ($product->extra_image) {
            Storage::disk('public')->delete($product->extra_image);
        }

        $product->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');
    }
    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product_edit', compact('product'));
    }
    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'product_name' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'product_description' => 'required|string',
            'benefits' => 'required|string',
            'how_to_use' => 'required|string',
            'product_image' => 'nullable|image|max:2048',
            'extra_image' => 'nullable|image|max:2048',
            'is_featured' => 'required|in:0,1'
        ]);

        // Handle the product image update if a new file is uploaded
        if ($request->hasFile('product_image')) {
            // Delete the old image
            Storage::disk('public')->delete($product->product_image);
            // Store the new image and update the product image path
            $product->product_image = $request->file('product_image')->store('products', 'public');
        }

        // Handle the extra image update if a new file is uploaded
        if ($request->hasFile('extra_image')) {
            // Delete the old extra image
            Storage::disk('public')->delete($product->extra_image);
            // Store the new extra image and update the extra image path
            $product->extra_image = $request->file('extra_image')->store('products', 'public');
        }

        // Update the other fields (make sure image fields are not overwritten)
        $product->product_name = $request->product_name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->product_description = $request->product_description;
        $product->benefits = $request->benefits;
        $product->how_to_use = $request->how_to_use;
        $product->is_featured = $request->is_featured;

        $product->save();

        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully!');
    }
   
    public function index(Request $request)
    {
        $query = Product::query();
        
        // Apply search filter if provided
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('product_name', 'like', "%{$search}%")
                ->orWhere('product_description', 'like', "%{$search}%")
                ->orWhere('category', 'like', "%{$search}%");
            });
        }
        
        // Apply category filter if provided
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        
        // Get paginated results
        $products = $query->orderBy('created_at', 'desc')->paginate(12);
        
        return view('admin.product_index', compact('products'));
    }
}
