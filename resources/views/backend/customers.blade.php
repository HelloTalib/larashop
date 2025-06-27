@extends('backend.layout.header')

@section('content')
        <main class="main-content">
            <header class="header">
                <button class="toggle-sidebar">☰</button>

                <div class="search-bar">
                    <input type="text" placeholder="Search customers...">
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
                <h1 class="page-title">Customers</h1>
                <div class="page-actions">
                    <button class="btn btn-outline">Export</button>
                    <button class="btn btn-primary" onclick="window.location.href='{{ route('add-customer') }}'">+ Add Customer</button>
                </div>
            </div>

            <div class="filter-bar">
                <div class="filter-item">
                    <label for="status-filter">Status:</label>
                    <select id="status-filter">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <div class="filter-item">
                    <label for="date-filter">Registration Date:</label>
                    <input type="date" id="date-from">
                    <span style="margin: 0 0.5rem;">to</span>
                    <input type="date" id="date-to">
                </div>

                <div class="filter-item">
                    <label for="orders-filter">Orders:</label>
                    <select id="orders-filter">
                        <option value="">All</option>
                        <option value="0">No Orders</option>
                        <option value="1-5">1-5 Orders</option>
                        <option value="6+">6+ Orders</option>
                    </select>
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
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Orders</th>
                                <th>Spent</th>
                                <th>Registered</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <div class="customer-item">
                                        <div class="customer-avatar">
                                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="John Doe">
                                        </div>
                                        <div class="customer-info">
                                            <h4>John Doe</h4>
                                            <p>United States</p>
                                        </div>
                                    </div>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>(123) 456-7890</td>
                                <td>8</td>
                                <td>$845.99</td>
                                <td>Jun 15, 2022</td>
                                <td><span class="status active">Active</span></td>
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
                                    <div class="customer-item">
                                        <div class="customer-avatar">
                                            <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Jane Smith">
                                        </div>
                                        <div class="customer-info">
                                            <h4>Jane Smith</h4>
                                            <p>Canada</p>
                                        </div>
                                    </div>
                                </td>
                                <td>jane.smith@example.com</td>
                                <td>(234) 567-8901</td>
                                <td>5</td>
                                <td>$429.95</td>
                                <td>Aug 22, 2022</td>
                                <td><span class="status active">Active</span></td>
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
                                    <div class="customer-item">
                                        <div class="customer-avatar">
                                            <img src="https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Mike Johnson">
                                        </div>
                                        <div class="customer-info">
                                            <h4>Mike Johnson</h4>
                                            <p>United Kingdom</p>
                                        </div>
                                    </div>
                                </td>
                                <td>mike.johnson@example.com</td>
                                <td>(345) 678-9012</td>
                                <td>3</td>
                                <td>$229.97</td>
                                <td>Oct 10, 2022</td>
                                <td><span class="status active">Active</span></td>
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
                                    <div class="customer-item">
                                        <div class="customer-avatar">
                                            <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Sarah Williams">
                                        </div>
                                        <div class="customer-info">
                                            <h4>Sarah Williams</h4>
                                            <p>Australia</p>
                                        </div>
                                    </div>
                                </td>
                                <td>sarah.williams@example.com</td>
                                <td>(456) 789-0123</td>
                                <td>1</td>
                                <td>$149.99</td>
                                <td>Nov 5, 2022</td>
                                <td><span class="status inactive">Inactive</span></td>
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
                                    <div class="customer-item">
                                        <div class="customer-avatar">
                                            <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="David Brown">
                                        </div>
                                        <div class="customer-info">
                                            <h4>David Brown</h4>
                                            <p>United States</p>
                                        </div>
                                    </div>
                                </td>
                                <td>david.brown@example.com</td>
                                <td>(567) 890-1234</td>
                                <td>12</td>
                                <td>$1,245.88</td>
                                <td>Jan 15, 2023</td>
                                <td><span class="status active">Active</span></td>
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
                                    <div class="customer-item">
                                        <div class="customer-avatar">
                                            <img src="https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Emily Davis">
                                        </div>
                                        <div class="customer-info">
                                            <h4>Emily Davis</h4>
                                            <p>Canada</p>
                                        </div>
                                    </div>
                                </td>
                                <td>emily.davis@example.com</td>
                                <td>(678) 901-2345</td>
                                <td>4</td>
                                <td>$379.96</td>
                                <td>Feb 8, 2023</td>
                                <td><span class="status active">Active</span></td>
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
                                    <div class="customer-item">
                                        <div class="customer-avatar">
                                            <img src="https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Robert Wilson">
                                        </div>
                                        <div class="customer-info">
                                            <h4>Robert Wilson</h4>
                                            <p>United Kingdom</p>
                                        </div>
                                    </div>
                                </td>
                                <td>robert.wilson@example.com</td>
                                <td>(789) 012-3456</td>
                                <td>2</td>
                                <td>$159.98</td>
                                <td>Mar 20, 2023</td>
                                <td><span class="status inactive">Inactive</span></td>
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
                        Showing 1 to 7 of 28 entries
                    </div>
                    <div class="pagination-controls">
                        <div class="pagination-btn">«</div>
                        <div class="pagination-btn active">1</div>
                        <div class="pagination-btn">2</div>
                        <div class="pagination-btn">3</div>
                        <div class="pagination-btn">4</div>
                        <div class="pagination-btn">»</div>
                    </div>
                </div>
            </div>
        </main>

@endsection