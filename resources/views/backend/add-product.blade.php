@extends('backend.layout.header')

@section('content')
<main class="main-content">
    <header class="header">
        <button class="toggle-sidebar">☰</button>

        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>

        <div class="header-actions">
            <div class="notification">
                🔔
                <span class="notification-badge">3</span>
            </div>

            <div class="user-profile">
                <div class="user-avatar">
                    <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Admin User">
                </div>
                <span>Admin User</span>
            </div>
        </div>
    </header>

    <div class="page-header">
        <h1 class="page-title">Add New Product</h1>
        <div class="page-actions">
            <a href="{{ route('products') }}" class="btn btn-outline">Cancel</a>
        </div>
    </div>

    <form>
        <div class="form-card">
            <div class="form-section">
                <h3>Basic Information</h3>

                <div class="form-row">
                    <div class="form-group">
                        <label for="product-name">Product Name*</label>
                        <input type="text" id="product-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="sku">SKU*</label>
                        <input type="text" id="sku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select id="brand" class="form-control">
                            <option value="">Select Brand</option>
                            <option value="apple">Apple</option>
                            <option value="samsung">Samsung</option>
                            <option value="sony">Sony</option>
                            <option value="lg">LG</option>
                            <option value="nike">Nike</option>
                            <option value="adidas">Adidas</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="category">Category*</label>
                        <select id="category" class="form-control" required>
                            <option value="">Select Category</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothing">Clothing</option>
                            <option value="home-kitchen">Home & Kitchen</option>
                            <option value="beauty">Beauty</option>
                            <option value="sports">Sports</option>
                            <option value="books">Books</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subcategory">Subcategory</label>
                        <select id="subcategory" class="form-control">
                            <option value="">Select Subcategory</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" rows="4" placeholder="Enter product description"></textarea>
                </div>
            </div>

            <div class="form-section">
                <h3>Product Images</h3>

                <div class="image-upload">
                    <div class="image-preview" id="image-preview">
                        <div class="image-item">
                            <img src="https://images.pexels.com/photos/1591/technology-music-sound-things.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Product Image">
                            <button type="button" class="remove-btn">×</button>
                            <button type="button" class="main-image">Main</button>
                        </div>
                    </div>
                    <div class="file-input-wrapper">
                        <button type="button" class="btn btn-outline">Add Images</button>
                        <input type="file" accept="image/*" multiple>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3>Pricing & Inventory</h3>

                <div class="form-row">
                    <div class="form-group">
                        <label for="regular-price">Regular Price*</label>
                        <input type="number" id="regular-price" class="form-control" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="sale-price">Sale Price</label>
                        <input type="number" id="sale-price" class="form-control" step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="cost-price">Cost Price</label>
                        <input type="number" id="cost-price" class="form-control" step="0.01">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="stock-quantity">Stock Quantity*</label>
                        <input type="number" id="stock-quantity" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="low-stock-threshold">Low Stock Threshold</label>
                        <input type="number" id="low-stock-threshold" class="form-control" value="5">
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight (kg)</label>
                        <input type="number" id="weight" class="form-control" step="0.01">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="dimensions">Dimensions (L × W × H cm)</label>
                        <div style="display: flex; gap: 0.5rem;">
                            <input type="number" placeholder="Length" class="form-control" step="0.1">
                            <input type="number" placeholder="Width" class="form-control" step="0.1">
                            <input type="number" placeholder="Height" class="form-control" step="0.1">
                        </div>
                    </div>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="track-inventory" checked>
                    <label for="track-inventory">Track inventory</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="allow-backorders">
                    <label for="allow-backorders">Allow backorders</label>
                </div>
            </div>

            <div class="form-section">
                <h3>Product Variants</h3>

                <div class="form-check">
                    <input type="checkbox" id="has-variants">
                    <label for="has-variants">This product has variants (e.g., size, color)</label>
                </div>

                <div class="variants-section" id="variants-section" style="display: none;">
                    <div class="variant-item">
                        <div class="variant-header">
                            <span class="variant-title">Variant 1</span>
                            <button type="button" class="remove-variant">Remove</button>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Color</label>
                                <select class="form-control">
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="green">Green</option>
                                    <option value="black">Black</option>
                                    <option value="white">White</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Size</label>
                                <select class="form-control">
                                    <option value="s">Small</option>
                                    <option value="m">Medium</option>
                                    <option value="l">Large</option>
                                    <option value="xl">Extra Large</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" step="0.01">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Stock</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>SKU</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline" id="add-variant">+ Add Variant</button>
                </div>
            </div>

            <div class="form-section">
                <h3>SEO & Marketing</h3>

                <div class="form-group">
                    <label for="meta-title">Meta Title</label>
                    <input type="text" id="meta-title" class="form-control">
                    <div class="form-text">Leave blank to use product name</div>
                </div>

                <div class="form-group">
                    <label for="meta-description">Meta Description</label>
                    <textarea id="meta-description" class="form-control" rows="3"></textarea>
                    <div class="form-text">Leave blank to use product description</div>
                </div>

                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" id="keywords" class="form-control" placeholder="keyword1, keyword2, keyword3">
                </div>

                <div class="form-check">
                    <input type="checkbox" id="featured" checked>
                    <label for="featured">Featured product</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="best-seller">
                    <label for="best-seller">Best seller</label>
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('products') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>
        </div>
    </form>
</main>

@endsection