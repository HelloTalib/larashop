@extends('frontend.layout.header')
@section('title', 'Cart')
@section('content')

<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="active">Shopping Cart</li>
        </ul>
    </div>
</div>

<main>
    <div class="container">
        <section class="cart-section">
            <h1 class="section-title">Your Shopping Cart</h1>

            <div class="cart-container">
                <div class="cart-items">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-info">
                                        <div class="product-img">
                                            <img src="https://via.placeholder.com/80x80" alt="Wireless Headphones">
                                        </div>
                                        <div class="product-details">
                                            <h4>Wireless Headphones</h4>
                                            <div class="category">Electronics</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-input">
                                        <button class="quantity-btn">-</button>
                                        <input type="number" value="1" min="1">
                                        <button class="quantity-btn">+</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-price">$99.99</div>
                                </td>
                                <td>
                                    <div class="product-subtotal">$99.99</div>
                                </td>
                                <td>
                                    <button class="remove-btn">×</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-info">
                                        <div class="product-img">
                                            <img src="https://via.placeholder.com/80x80" alt="Smart Watch">
                                        </div>
                                        <div class="product-details">
                                            <h4>Smart Watch</h4>
                                            <div class="category">Electronics</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-input">
                                        <button class="quantity-btn">-</button>
                                        <input type="number" value="1" min="1">
                                        <button class="quantity-btn">+</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-price">$149.99</div>
                                </td>
                                <td>
                                    <div class="product-subtotal">$149.99</div>
                                </td>
                                <td>
                                    <button class="remove-btn">×</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-info">
                                        <div class="product-img">
                                            <img src="https://via.placeholder.com/80x80" alt="Bluetooth Speaker">
                                        </div>
                                        <div class="product-details">
                                            <h4>Bluetooth Speaker</h4>
                                            <div class="category">Electronics</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-input">
                                        <button class="quantity-btn">-</button>
                                        <input type="number" value="1" min="1">
                                        <button class="quantity-btn">+</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-price">$79.99</div>
                                </td>
                                <td>
                                    <div class="product-subtotal">$79.99</div>
                                </td>
                                <td>
                                    <button class="remove-btn">×</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="cart-actions">
                        <a href="{{ route('shop') }}" class="continue-shopping">
                            <span>←</span> Continue Shopping
                        </a>
                        <button class="update-cart">Update Cart</button>
                    </div>
                </div>

                <div class="cart-summary">
                    <h3 class="summary-title">Order Summary</h3>
                    <div class="summary-row">
                        <div>Subtotal</div>
                        <div>$329.97</div>
                    </div>
                    <div class="summary-row">
                        <div>Shipping</div>
                        <div>$0.00</div>
                    </div>
                    <div class="summary-row">
                        <div>Tax</div>
                        <div>$33.00</div>
                    </div>
                    <div class="summary-row total">
                        <div>Total</div>
                        <div>$362.97</div>
                    </div>

                    <div class="promo-code">
                        <div class="promo-title">Promo Code</div>
                        <div class="promo-form">
                            <input type="text" class="promo-input" placeholder="Enter promo code">
                            <button class="promo-btn">Apply</button>
                        </div>
                    </div>

                    <a href="{{ route('checkout') }}" class="checkout-btn">Proceed to Checkout</a>
                </div>
            </div>

            <!-- Empty Cart State (Hidden by default) -->
            <div class="empty-cart" style="display: none;">
                <div class="empty-cart-icon">🛒</div>
                <h3>Your cart is empty</h3>
                <p>Looks like you haven't added any products to your cart yet.</p>
                <a href="{{ route('shop') }}" class="btn">Start Shopping</a>
            </div>
        </section>
    </div>
</main>
@endsection