@extends('layouts.admin_navs')
@section('title', 'Product Upload')

@section('content')
<div class="product_upload_page w_100 h_fc padding_vs padding_s10 relative">
    <!-- Page Header -->
    <div class="flex justify_sb align_c w_100 mtop_s">
        <div class="flex_cl gap_xvh">
            <h2 class="black_cl">Product Upload</h2>
            <h4 class="font_w400 primary_cl">Add a new product to your inventory</h4>
        </div>
    </div>

    <!-- Upload Form -->
    <div class="upload_form_container bg_white bradius_s shadow_s mtop_m padding_sxxs padding_vxs">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="product_form w_100 flex_cl gap_s">
            @csrf

            <div class="form_grid">
                <!-- Product Name -->
                <div class="form_group">
                    <label for="product_name" class="form_label">
                        <h4 class="font_w500">Product Name</h4>
                    </label>
                    <input type="text" name="product_name" id="product_name" value="{{ old('product_name') }}" required class="form_input w_100">
                </div>

                <!-- Category -->
                <div class="form_group">
                    <label for="category" class="form_label">
                        <h4 class="font_w500">Category</h4>
                    </label>
                    <select name="category" id="category" required class="form_input w_100">
                        <option value="essential oil" {{ old('category') == 'essential oil' ? 'selected' : '' }}>Essential Oil</option>
                        <option value="blend oils" {{ old('category') == 'blend oils' ? 'selected' : '' }}>Blend Oils</option>
                        <option value="herbs and spices" {{ old('category') == 'herbs and spices' ? 'selected' : '' }}>Herbs and Spices</option>
                        <option value="hair and oil" {{ old('category') == 'hair and oil' ? 'selected' : '' }}>Hair and Oil</option>
                        <option value="our combos" {{ old('category') == 'our combos' ? 'selected' : '' }}>Our Combos</option>
                    </select>
                </div>

                <!-- Price -->
                <div class="form_group">
                    <label for="price" class="form_label">
                        <h4 class="font_w500">Price (NPR)</h4>
                    </label>
                    <input type="number" step="0.01" name="price" id="price" value="{{ old('price') }}" required class="form_input w_100">
                </div>
            </div>

            <!-- Featured Checkbox -->
            <div class="form_group">
                <label for="is_featured" class="form_label">
                    <h4 class="font_w500">Mark as Featured Product</h4>
                </label>
                <div class="flex gap_s">
                    <label class="flex align_c gap_xs">
                        <input type="radio" name="is_featured" class="featured_checkbox" value="1" {{ old('is_featured') == '1' ? 'checked' : '' }}>
                        <h4>Yes</h4>
                    </label>
                    <label class="flex align_c gap_xs">
                        <input type="radio" name="is_featured" class="featured_checkbox" value="0" {{ old('is_featured') == '0' ? 'checked' : '' }}>
                        <h4>No</h4>
                    </label>
                </div>
            </div>



            <!-- Product Description -->
            <div class="form_group w_100">
                <label for="product_description" class="form_label">
                    <h4 class="font_w500">Product Description</h4>
                </label>
                <textarea name="product_description" id="product_description" required class="form_textarea w_100">{{ old('product_description') }}</textarea>
            </div>

            <!-- Benefits -->
            <div class="form_group w_100">
                <label for="benefits" class="form_label">
                    <h4 class="font_w500">Benefits</h4>
                </label>
                <textarea name="benefits" id="benefits" required class="form_textarea w_100">{{ old('benefits') }}</textarea>
            </div>

            <!-- How to Use -->
            <div class="form_group w_100">
                <label for="how_to_use" class="form_label">
                    <h4 class="font_w500">How to Use</h4>
                </label>
                <textarea name="how_to_use" id="how_to_use" required class="form_textarea w_100">{{ old('how_to_use') }}</textarea>
            </div>

            <!-- Images Section -->
            <div class="images_section w_100 flex gap_s flex_wrap">
                <!-- Main Image -->
                <label for="product_image" class="form_label">
                    <h4 class="font_w500">Product Image</h4>
                </label>
                <input type="file" name="product_image" id="product_image" required class="file_input form_input">
                <!-- Extra Image -->
                <label for="product_image" class="form_label">
                    <h4 class="font_w500">Product Image Extra (Optional)</h4>
                </label>
                <input type="file" name="extra_image" id="extra_image" class="file_input form_input">
            </div>

            <!-- Submit Button -->
            <div class="form_actions w_100 flex justify_fe mtop_s">
                <button type="submit" class="custom-button primary form_submit_button">
                    <h4 class="background_cl"><i class="ri-upload-2-line background_cl"></i> Upload Product</h4>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

