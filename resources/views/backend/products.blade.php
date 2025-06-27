@extends('backend.layout.header')

@section('content')
<main class="main-content">
    <header class="header">
        <button class="toggle-sidebar">☰</button>

        <div class="search-bar">
            <input type="text" placeholder="Search products...">
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
        <h1 class="page-title">Products</h1>
        <div class="page-actions">
            <button class="btn btn-outline">Import</button>
            <button class="btn btn-outline">Export</button>
            <button class="btn btn-primary" onclick="window.location.href='{{ route('add-product') }}'">+ Add Product</button>
        </div>
    </div>

    <div class="filter-bar">
        <div class="filter-item">
            <label for="category-filter">Category:</label>
            <select id="category-filter">
                <option value="">All Categories</option>
                <option value="electronics">Electronics</option>
                <option value="clothing">Clothing</option>
                <option value="home-kitchen">Home & Kitchen</option>
                <option value="beauty">Beauty</option>
            </select>
        </div>

        <div class="filter-item">
            <label for="status-filter">Status:</label>
            <select id="status-filter">
                <option value="">All Status</option>
                <option value="in-stock">In Stock</option>
                <option value="low-stock">Low Stock</option>
                <option value="out-of-stock">Out of Stock</option>
            </select>
        </div>

        <div class="filter-item">
            <label for="price-filter">Price Range:</label>
            <input type="number" id="price-min" placeholder="Min" style="width: 80px;">
            <span style="margin: 0 0.5rem;">to</span>
            <input type="number" id="price-max" placeholder="Max" style="width: 80px;">
        </div>

        <button class="btn btn-primary">Apply Filters</button>
        <button class="btn btn-outline">Reset</button>
    </div>

    <div class="content-card">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>Product</th>
                        <th>SKU</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="https://images.pexels.com/photos/1591/technology-music-sound-things.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Wireless Headphones">
                                </div>
                                <div class="product-info">
                                    <h4>Wireless Headphones</h4>
                                    <p>Premium sound quality</p>
                                </div>
                            </div>
                        </td>
                        <td>WH-1234</td>
                        <td>Electronics</td>
                        <td>$99.99</td>
                        <td>45</td>
                        <td><span class="status in-stock">In Stock</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="https://images.pexels.com/photos/437037/pexels-photo-437037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Smart Watch">
                                </div>
                                <div class="product-info">
                                    <h4>Smart Watch</h4>
                                    <p>Fitness & health tracking</p>
                                </div>
                            </div>
                        </td>
                        <td>SW-5678</td>
                        <td>Electronics</td>
                        <td>$149.99</td>
                        <td>28</td>
                        <td><span class="status in-stock">In Stock</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="https://images.pexels.com/photos/18104/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Laptop Sleeve">
                                </div>
                                <div class="product-info">
                                    <h4>Laptop Sleeve</h4>
                                    <p>Protective case for laptops</p>
                                </div>
                            </div>
                        </td>
                        <td>LS-9012</td>
                        <td>Accessories</td>
                        <td>$29.99</td>
                        <td>62</td>
                        <td><span class="status in-stock">In Stock</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="https://images.pexels.com/photos/1279107/pexels-photo-1279107.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Bluetooth Speaker">
                                </div>
                                <div class="product-info">
                                    <h4>Bluetooth Speaker</h4>
                                    <p>Portable wireless speaker</p>
                                </div>
                            </div>
                        </td>
                        <td>BS-3456</td>
                        <td>Electronics</td>
                        <td>$79.99</td>
                        <td>8</td>
                        <td><span class="status low-stock">Low Stock</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="https://images.pexels.com/photos/607812/pexels-photo-607812.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Smartphone Case">
                                </div>
                                <div class="product-info">
                                    <h4>Smartphone Case</h4>
                                    <p>Protective case for phones</p>
                                </div>
                            </div>
                        </td>
                        <td>SC-7890</td>
                        <td>Accessories</td>
                        <td>$19.99</td>
                        <td>124</td>
                        <td><span class="status in-stock">In Stock</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="https://images.pexels.com/photos/3153198/pexels-photo-3153198.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Wireless Mouse">
                                </div>
                                <div class="product-info">
                                    <h4>Wireless Mouse</h4>
                                    <p>Ergonomic design</p>
                                </div>
                            </div>
                        </td>
                        <td>WM-2345</td>
                        <td>Electronics</td>
                        <td>$39.99</td>
                        <td>52</td>
                        <td><span class="status in-stock">In Stock</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="https://images.pexels.com/photos/1112598/pexels-photo-1112598.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Desk Lamp">
                                </div>
                                <div class="product-info">
                                    <h4>Desk Lamp</h4>
                                    <p>Adjustable LED lamp</p>
                                </div>
                            </div>
                        </td>
                        <td>DL-6789</td>
                        <td>Home & Kitchen</td>
                        <td>$49.99</td>
                        <td>35</td>
                        <td><span class="status in-stock">In Stock</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <div class="pagination-info">
                Showing 1 to 8 of 24 entries
            </div>
            <div class="pagination-controls">
                <div class="pagination-btn">«</div>
                <div class="pagination-btn active">1</div>
                <div class="pagination-btn">2</div>
                <div class="pagination-btn">3</div>
                <div class="pagination-btn">»</div>
            </div>
        </div>
    </div>
</main>
@endsection