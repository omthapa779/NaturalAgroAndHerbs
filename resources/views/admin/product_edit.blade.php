@extends('layouts.admin_navs')
@section('title', 'Edit Product')

@section('content')
<!-- Include Quill stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<div class="product_upload_page w_100 h_fc padding_vs padding_s10 relative">
    <!-- Page Header -->
    <div class="flex justify_sb align_c w_100 mtop_s">
        <div class="flex_cl gap_xvh">
            <h2 class="black_cl">Edit Product</h2>
            <h4 class="font_w400 primary_cl">Update product details</h4>
        </div>
    </div>

    <!-- Edit Form -->
    <div class="upload_form_container bg_white bradius_s shadow_s mtop_m padding_sxxs padding_vxs">
        <form method="POST" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data" class="product_form w_100 flex_cl gap_s" id="product-form">
            @csrf
            @method('PUT')

            <div class="form_grid">
                <!-- Product Name -->
                <div class="form_group">
                    <label for="product_name" class="form_label">
                        <h4 class="font_w500">Product Name</h4>
                    </label>
                    <input type="text" name="product_name" id="product_name" value="{{ old('product_name', $product->product_name) }}" required class="form_input w_100">
                </div>

                <!-- Category -->
                <div class="form_group">
                    <label for="category" class="form_label">
                        <h4 class="font_w500">Category</h4>
                    </label>
                    <select name="category" id="category" required class="form_input w_100">
                        <option value="essential oil" {{ $product->category == 'essential oil' ? 'selected' : '' }}>Essential Oil</option>
                        <option value="blend oils" {{ $product->category == 'blend oils' ? 'selected' : '' }}>Blend Oils</option>
                        <option value="herbs and spices" {{ $product->category == 'herbs and spices' ? 'selected' : '' }}>Herbs and Spices</option>
                        <option value="hair and oil" {{ $product->category == 'hair and oil' ? 'selected' : '' }}>Hair and Oil</option>
                        <option value="our combos" {{ $product->category == 'our combos' ? 'selected' : '' }}>Our Combos</option>
                    </select>
                </div>

                <!-- Price -->
                <div class="form_group">
                    <label for="price" class="form_label">
                        <h4 class="font_w500">Price (NPR)</h4>
                    </label>
                    <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $product->price) }}" required class="form_input w_100">
                </div>
            </div>

            <!-- Featured Checkbox -->
            <div class="form_group">
                <label for="is_featured" class="form_label">
                    <h4 class="font_w500">Mark as Featured Product</h4>
                </label>
                <div class="flex gap_s">
                    <label class="flex align_c gap_xs">
                        <input type="radio" name="is_featured" value="1" {{ $product->is_featured == 1 ? 'checked' : '' }}>
                        <h4>Yes</h4>
                    </label>
                    <label class="flex align_c gap_xs">
                        <input type="radio" name="is_featured" value="0" {{ $product->is_featured == 0 ? 'checked' : '' }}>
                        <h4>No</h4>
                    </label>
                </div>
            </div>

            <!-- Product Description -->
            <div class="form_group w_100">
                <label for="product_description" class="form_label">
                    <h4 class="font_w500">Product Description</h4>
                </label>
                <div id="product_description_editor" class="quill_editor" style="height: 300px;">{!! old('product_description', $product->product_description) !!}</div>
                <input type="hidden" name="product_description" id="product_description_input">
            </div>

            <!-- Benefits -->
            <div class="form_group w_100">
                <label for="benefits" class="form_label">
                    <h4 class="font_w500">Benefits</h4>
                </label>
                <div id="benefits_editor" class="quill_editor" style="height: 300px;">{!! old('benefits', $product->benefits) !!}</div>
                <input type="hidden" name="benefits" id="benefits_input">
            </div>

            <!-- How to Use -->
            <div class="form_group w_100">
                <label for="how_to_use" class="form_label">
                    <h4 class="font_w500">How to Use</h4>
                </label>
                <div id="how_to_use_editor" class="quill_editor" style="height: 300px;">{!! old('how_to_use', $product->how_to_use) !!}</div>
                <input type="hidden" name="how_to_use" id="how_to_use_input">
            </div>

            <!-- Image Section -->
            <div class="images_section w_100 flex gap_s flex_wrap">
                <label class="form_label">
                    <h4 class="font_w500">Current Product Image</h4>
                </label>
                <img src="{{ asset('storage/'.$product->product_image) }}" width="100">
                
                <label for="product_image" class="form_label">
                    <h4 class="font_w500">Replace Product Image</h4>
                </label>
                <input type="file" name="product_image" id="product_image" class="file_input form_input">

                <label class="form_label">
                    <h4 class="font_w500">Current Extra Image</h4>
                </label>
                @if($product->extra_image)
                <img src="{{ asset('storage/'.$product->extra_image) }}" width="100">
                @endif
                
                <label for="extra_image" class="form_label">
                    <h4 class="font_w500">Replace Extra Image</h4>
                </label>
                <input type="file" name="extra_image" id="extra_image" class="file_input form_input">
            </div>

            <!-- Submit Button -->
            <div class="form_actions w_100 flex justify_fe mtop_s">
                <button type="submit" class="custom-button primary form_submit_button">
                    <h4 class="background_cl"><i class="ri-upload-2-line background_cl"></i> Update Product</h4>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Include Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Quill editors
    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [{ 'header': 1 }, { 'header': 2 }],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],
        [{ 'indent': '-1'}, { 'indent': '+1' }],
        [{ 'direction': 'rtl' }],
        [{ 'size': ['small', false, 'large', 'huge'] }],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'font': [] }],
        [{ 'align': [] }],
        ['clean']
    ];

    const productDescriptionEditor = new Quill('#product_description_editor', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });

    const benefitsEditor = new Quill('#benefits_editor', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });

    const howToUseEditor = new Quill('#how_to_use_editor', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });

    // Form submission handler
    document.getElementById('product-form').addEventListener('submit', function() {
        // Get HTML content from Quill editors and set to hidden inputs
        document.getElementById('product_description_input').value = productDescriptionEditor.root.innerHTML;
        document.getElementById('benefits_input').value = benefitsEditor.root.innerHTML;
        document.getElementById('how_to_use_input').value = howToUseEditor.root.innerHTML;
    });
});
</script>

<style>
.quill_editor {
    background-color: white;
    border-radius: 0.7vw;
    margin-bottom: 2vh;
}

.ql-toolbar {
    border-top-left-radius: 0.7vw;
    border-top-right-radius: 0.7vw;
    background-color: #f8f9fa;
    border-color: rgba(0, 0, 0, 0.2);
}

.ql-container {
    border-bottom-left-radius: 0.7vw;
    border-bottom-right-radius: 0.7vw;
    border-color: rgba(0, 0, 0, 0.2);
    font-family: "Montserrat Alternates", sans-serif;
    font-size: 0.95vw;
}

.ql-editor {
    min-height: 250px;
}
</style>
@endsection