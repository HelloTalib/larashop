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

    <section class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-icon orders">📦</div>
            <div class="stat-details">
                <h3>152</h3>
                <p>New Orders</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon revenue">💰</div>
            <div class="stat-details">
                <h3>$8,542</h3>
                <p>Total Revenue</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon products">🛍️</div>
            <div class="stat-details">
                <h3>284</h3>
                <p>Products</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon customers">👥</div>
            <div class="stat-details">
                <h3>1,253</h3>
                <p>Customers</p>
            </div>
        </div>
    </section>

    <div class="dashboard-grid">
        <div>
            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">Sales Overview</h2>
                    <div class="card-actions">
                        <select>
                            <option>Last 7 Days</option>
                            <option>Last 30 Days</option>
                            <option>Last 3 Months</option>
                            <option>Last Year</option>
                        </select>
                    </div>
                </div>

                <div class="chart-container">
                    <div class="chart-placeholder">
                        [Sales Chart - This would be a real chart in a production environment]
                    </div>
                </div>
            </div>

            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">Recent Orders</h2>
                    <div class="card-actions">
                        <a href="#">View All</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-0045</td>
                                <td>John Doe</td>
                                <td>Jun 15, 2023</td>
                                <td>$125.99</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>#ORD-0044</td>
                                <td>Jane Smith</td>
                                <td>Jun 14, 2023</td>
                                <td>$259.99</td>
                                <td><span class="status processing">Processing</span></td>
                            </tr>
                            <tr>
                                <td>#ORD-0043</td>
                                <td>Mike Johnson</td>
                                <td>Jun 14, 2023</td>
                                <td>$79.99</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>#ORD-0042</td>
                                <td>Sarah Williams</td>
                                <td>Jun 13, 2023</td>
                                <td>$149.99</td>
                                <td><span class="status cancelled">Cancelled</span></td>
                            </tr>
                            <tr>
                                <td>#ORD-0041</td>
                                <td>David Brown</td>
                                <td>Jun 13, 2023</td>
                                <td>$89.99</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div>
            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">Top Selling Products</h2>
                    <div class="card-actions">
                        <a href="#">View All</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-item">
                                        <div class="product-img">
                                            <img src="https://images.pexels.com/photos/1591/technology-music-sound-things.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Wireless Headphones">
                                        </div>
                                        <div class="product-info">
                                            <h4>Wireless Headphones</h4>
                                            <p>Electronics</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$99.99</td>
                                <td>152 sold</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item">
                                        <div class="product-img">
                                            <img src="https://images.pexels.com/photos/437037/pexels-photo-437037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Smart Watch">
                                        </div>
                                        <div class="product-info">
                                            <h4>Smart Watch</h4>
                                            <p>Electronics</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$149.99</td>
                                <td>98 sold</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item">
                                        <div class="product-img">
                                            <img src="https://images.pexels.com/photos/1279107/pexels-photo-1279107.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Bluetooth Speaker">
                                        </div>
                                        <div class="product-info">
                                            <h4>Bluetooth Speaker</h4>
                                            <p>Electronics</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$79.99</td>
                                <td>87 sold</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item">
                                        <div class="product-img">
                                            <img src="https://images.pexels.com/photos/18104/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Laptop Sleeve">
                                        </div>
                                        <div class="product-info">
                                            <h4>Laptop Sleeve</h4>
                                            <p>Accessories</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$29.99</td>
                                <td>65 sold</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">Product Categories</h2>
                </div>

                <div class="chart-container">
                    <div class="chart-placeholder">
                        [Categories Pie Chart - This would be a real chart in a production environment]
                    </div>
                </div>
            </div>

            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">Inventory Status</h2>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>In Stock</th>
                                <th>Low Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Electronics</td>
                                <td>89</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>Clothing</td>
                                <td>124</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>Home & Kitchen</td>
                                <td>56</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Beauty</td>
                                <td>32</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection