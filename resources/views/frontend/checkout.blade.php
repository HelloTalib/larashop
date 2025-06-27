@extends('frontend.layout.header')
@section('title', 'Checkout')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="cart.html">Shopping Cart</a></li>
            <li class="active">Checkout</li>
        </ul>
    </div>
</div>

<main>
    <div class="container">
        <section class="checkout-section">
            <h1 class="section-title">Checkout</h1>

            <div class="checkout-container">
                <div class="checkout-form">
                    <h2 class="form-title">Billing Details</h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first-name">First Name *</label>
                                <input type="text" id="first-name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="last-name">Last Name *</label>
                                <input type="text" id="last-name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="company">Company Name (Optional)</label>
                            <input type="text" id="company" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="country">Country / Region *</label>
                            <select id="country" class="form-control" required>
                                <option value="">Select a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="UK">United Kingdom</option>
                                <option value="AU">Australia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="street">Street Address *</label>
                            <input type="text" id="street" class="form-control" placeholder="House number and street name" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                        </div>

                        <div class="form-group">
                            <label for="city">Town / City *</label>
                            <input type="text" id="city" class="form-control" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">State / Province *</label>
                                <input type="text" id="state" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="postcode">Postcode / ZIP *</label>
                                <input type="text" id="postcode" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone *</label>
                                <input type="tel" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" id="create-account">
                                <label for="create-account">Create an account?</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" id="ship-different">
                                <label for="ship-different">Ship to a different address?</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="notes">Order Notes (Optional)</label>
                            <textarea id="notes" class="form-control" rows="4" placeholder="Notes about your order, e.g. special delivery instructions"></textarea>
                        </div>
                    </form>

                    <h2 class="form-title" style="margin-top: 2rem;">Shipping Method</h2>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="radio" id="shipping-standard" name="shipping" checked>
                            <label for="shipping-standard">Standard Shipping - $0.00</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="shipping-express" name="shipping">
                            <label for="shipping-express">Express Shipping - $15.00</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="shipping-next" name="shipping">
                            <label for="shipping-next">Next Day Delivery - $25.00</label>
                        </div>
                    </div>

                    <h2 class="form-title" style="margin-top: 2rem;">Payment Method</h2>
                    <div class="payment-methods">
                        <div class="payment-method active">
                            <div class="payment-method-header">
                                <input type="radio" id="payment-card" name="payment" checked>
                                <label for="payment-card">Credit / Debit Card</label>
                            </div>
                            <div class="payment-method-content">
                                <div class="form-group">
                                    <label for="card-number">Card Number *</label>
                                    <input type="text" id="card-number" class="form-control" placeholder="1234 5678 9012 3456" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="expiry">Expiry Date *</label>
                                        <input type="text" id="expiry" class="form-control" placeholder="MM / YY" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cvv">CVV *</label>
                                        <input type="text" id="cvv" class="form-control" placeholder="123" required>
                                    </div>
                                </div>
                                <div class="payment-icons">
                                    <div class="payment-icon">Visa</div>
                                    <div class="payment-icon">MC</div>
                                    <div class="payment-icon">Amex</div>
                                    <div class="payment-icon">Disc</div>
                                </div>
                            </div>
                        </div>

                        <div class="payment-method">
                            <div class="payment-method-header">
                                <input type="radio" id="payment-paypal" name="payment">
                                <label for="payment-paypal">PayPal</label>
                            </div>
                            <div class="payment-method-content">
                                <p>You will be redirected to PayPal to complete your purchase securely.</p>
                            </div>
                        </div>

                        <div class="payment-method">
                            <div class="payment-method-header">
                                <input type="radio" id="payment-bank" name="payment">
                                <label for="payment-bank">Direct Bank Transfer</label>
                            </div>
                            <div class="payment-method-content">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-summary">
                    <h2 class="summary-title">Your Order</h2>
                    <div class="order-items">
                        <div class="order-item">
                            <div class="item-name">Wireless Headphones</div>
                            <div class="item-quantity">x1</div>
                            <div class="item-price">$99.99</div>
                        </div>
                        <div class="order-item">
                            <div class="item-name">Smart Watch</div>
                            <div class="item-quantity">x1</div>
                            <div class="item-price">$149.99</div>
                        </div>
                        <div class="order-item">
                            <div class="item-name">Bluetooth Speaker</div>
                            <div class="item-quantity">x1</div>
                            <div class="item-price">$79.99</div>
                        </div>
                    </div>

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

                    <button type="submit" class="place-order-btn">Place Order</button>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection