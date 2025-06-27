@extends('backend.layout.header')

@section('content')
<main class="main-content">
    <header class="header">
        <button class="toggle-sidebar">☰</button>

        <div class="search-bar">
            <input type="text" placeholder="Search orders...">
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
        <h1 class="page-title">Orders</h1>
        <div class="page-actions">
            <button class="btn btn-outline">Export</button>
            <button class="btn btn-primary" onclick="window.location.href='{{ route('add-order') }}';">+ Create Order</button>
        </div>
    </div>

    <div class="filter-bar">
        <div class="filter-item">
            <label for="status-filter">Status:</label>
            <select id="status-filter">
                <option value="">All Status</option>
                <option value="pending">Pending</option>
                <option value="processing">Processing</option>
                <option value="shipped">Shipped</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <div class="filter-item">
            <label for="date-filter">Date Range:</label>
            <input type="date" id="date-from">
            <span style="margin: 0 0.5rem;">to</span>
            <input type="date" id="date-to">
        </div>

        <div class="filter-item">
            <label for="payment-filter">Payment:</label>
            <select id="payment-filter">
                <option value="">All Methods</option>
                <option value="credit-card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank-transfer">Bank Transfer</option>
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
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#ORD-0045</td>
                        <td>John Doe</td>
                        <td>Jun 15, 2023</td>
                        <td>$125.99</td>
                        <td>Credit Card</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ORD-0044</td>
                        <td>Jane Smith</td>
                        <td>Jun 14, 2023</td>
                        <td>$259.99</td>
                        <td>PayPal</td>
                        <td><span class="status processing">Processing</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ORD-0043</td>
                        <td>Mike Johnson</td>
                        <td>Jun 14, 2023</td>
                        <td>$79.99</td>
                        <td>Credit Card</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ORD-0042</td>
                        <td>Sarah Williams</td>
                        <td>Jun 13, 2023</td>
                        <td>$149.99</td>
                        <td>Bank Transfer</td>
                        <td><span class="status cancelled">Cancelled</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ORD-0041</td>
                        <td>David Brown</td>
                        <td>Jun 13, 2023</td>
                        <td>$89.99</td>
                        <td>Credit Card</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ORD-0040</td>
                        <td>Emily Davis</td>
                        <td>Jun 12, 2023</td>
                        <td>$199.99</td>
                        <td>PayPal</td>
                        <td><span class="status shipped">Shipped</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ORD-0039</td>
                        <td>Robert Wilson</td>
                        <td>Jun 12, 2023</td>
                        <td>$59.99</td>
                        <td>Credit Card</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ORD-0038</td>
                        <td>Jennifer Taylor</td>
                        <td>Jun 11, 2023</td>
                        <td>$129.99</td>
                        <td>Bank Transfer</td>
                        <td><span class="status processing">Processing</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ORD-0037</td>
                        <td>Michael Anderson</td>
                        <td>Jun 11, 2023</td>
                        <td>$75.99</td>
                        <td>Credit Card</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>
                            <div class="action-buttons">
                                <div class="action-btn view">👁️</div>
                                <div class="action-btn edit">✏️</div>
                                <div class="action-btn delete">🗑️</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ORD-0036</td>
                        <td>Lisa Thomas</td>
                        <td>Jun 10, 2023</td>
                        <td>$249.99</td>
                        <td>PayPal</td>
                        <td><span class="status shipped">Shipped</span></td>
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
                Showing 1 to 10 of 45 entries
            </div>
            <div class="pagination-controls">
                <div class="pagination-btn">«</div>
                <div class="pagination-btn active">1</div>
                <div class="pagination-btn">2</div>
                <div class="pagination-btn">3</div>
                <div class="pagination-btn">4</div>
                <div class="pagination-btn">5</div>
                <div class="pagination-btn">»</div>
            </div>
        </div>
    </div>
</main>

@endsection