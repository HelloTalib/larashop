@extends('backend.layout.header')

@section('content')
<main class="main-content">
    <header class="header">
        <button class="toggle-sidebar">☰</button>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
        <div class="header-actions">
            <div class="notification">🔔<span class="notification-badge">3</span></div>
            <div class="user-profile">
                <div class="user-avatar">
                    <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Admin User">
                </div>
                <span>Admin User</span>
            </div>
        </div>
    </header>

    <div class="page-header">
        <h1 class="page-title">Create New Order</h1>
        <div class="page-actions">
            <a href="{{ route('orders') }}" class="btn btn-outline">Cancel</a>
        </div>
    </div>

    <form>
        <div class="form-card">
            <div class="form-section">
                <h3>Customer Information</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="customer">Customer*</label>
                        <select id="customer" class="form-control" required>
                            <option value="">Select Customer</option>
                            <option value="1">John Doe (john.doe@example.com)</option>
                            <option value="2">Jane Smith (jane.smith@example.com)</option>
                            <option value="3">Mike Johnson (mike.johnson@example.com)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="order-date">Order Date*</label>
                        <input type="date" id="order-date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="order-status">Order Status</label>
                        <select id="order-status" class="form-control">
                            <option value="pending">Pending</option>
                            <option value="processing">Processing</option>
                            <option value="shipped">Shipped</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3>Billing Address</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="billing-first-name">First Name*</label>
                        <input type="text" id="billing-first-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="billing-last-name">Last Name*</label>
                        <input type="text" id="billing-last-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="billing-email">Email*</label>
                        <input type="email" id="billing-email" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="billing-phone">Phone</label>
                        <input type="tel" id="billing-phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="billing-address">Address*</label>
                        <input type="text" id="billing-address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="billing-city">City*</label>
                        <input type="text" id="billing-city" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="billing-state">State*</label>
                        <input type="text" id="billing-state" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="billing-zip">ZIP Code*</label>
                        <input type="text" id="billing-zip" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="billing-country">Country*</label>
                        <select id="billing-country" class="form-control" required>
                            <option value="">Select Country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="UK">United Kingdom</option>
                            <option value="AU">Australia</option>
                        </select>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="shipping-same" checked>
                    <label for="shipping-same">Shipping address same as billing address</label>
                </div>
            </div>

            <div class="form-section">
                <h3>Order Items</h3>
                <div class="order-summary" id="order-items">
                    <div class="order-item">
                        <div class="product-info">
                            <div class="product-img">
                                <img src="https://images.pexels.com/photos/1591/technology-music-sound-things.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Wireless Headphones">
                            </div>
                            <div class="product-details">
                                <h4>Wireless Headphones</h4>
                                <p>$99.99</p>
                            </div>
                        </div>
                        <div class="quantity-controls">
                            <button type="button" class="quantity-btn">-</button>
                            <input type="number" class="quantity-input" value="1" min="1">
                            <button type="button" class="quantity-btn">+</button>
                        </div>
                        <div class="item-total">$99.99</div>
                        <button type="button" class="remove-item">Remove</button>
                    </div>
                </div>
                <button type="button" class="btn btn-outline" id="add-item">+ Add Item</button>
            </div>

            <div class="form-section">
                <h3>Payment Information</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="payment-method">Payment Method*</label>
                        <select id="payment-method" class="form-control" required>
                            <option value="">Select Payment Method</option>
                            <option value="credit-card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                            <option value="bank-transfer">Bank Transfer</option>
                            <option value="cash">Cash on Delivery</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="payment-status">Payment Status</label>
                        <select id="payment-status" class="form-control">
                            <option value="pending">Pending</option>
                            <option value="paid">Paid</option>
                            <option value="failed">Failed</option>
                            <option value="refunded">Refunded</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="transaction-id">Transaction ID</label>
                        <input type="text" id="transaction-id" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3>Shipping Information</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="shipping-method">Shipping Method</label>
                        <select id="shipping-method" class="form-control">
                            <option value="standard">Standard Shipping</option>
                            <option value="express">Express Shipping</option>
                            <option value="overnight">Overnight Shipping</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="shipping-cost">Shipping Cost</label>
                        <input type="number" id="shipping-cost" class="form-control" value="9.99" step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="tracking-number">Tracking Number</label>
                        <input type="text" id="tracking-number" class="form-control">
                    </div>
                </div>
            </div>

            <div class="total-section">
                <div class="total-row">
                    <span>Subtotal:</span>
                    <span>$99.99</span>
                </div>
                <div class="total-row">
                    <span>Shipping:</span>
                    <span>$9.99</span>
                </div>
                <div class="total-row">
                    <span>Tax:</span>
                    <span>$8.00</span>
                </div>
                <div class="total-row final">
                    <span>Total:</span>
                    <span>$117.98</span>
                </div>
            </div>

            <div class="form-section">
                <h3>Order Notes</h3>
                <div class="form-group">
                    <label for="customer-notes">Customer Notes</label>
                    <textarea id="customer-notes" class="form-control" rows="3" placeholder="Any special instructions from the customer"></textarea>
                </div>
                <div class="form-group">
                    <label for="admin-notes">Admin Notes</label>
                    <textarea id="admin-notes" class="form-control" rows="3" placeholder="Internal notes (not visible to customer)"></textarea>
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('orders') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Create Order</button>
            </div>
        </div>
    </form>
</main>
@endsection