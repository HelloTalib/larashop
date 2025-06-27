@extends('frontend.layout.header')
@section('title', 'Product')
@section('content')

<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="#">Electronics</a></li>
            <li class="active">Wireless Headphones</li>
        </ul>
    </div>
</div>

<main>
    <div class="container">
        <section class="product-details">
            <div class="product-details-grid">
                <div class="product-gallery">
                    <div class="gallery-thumbs">
                        <div class="thumb-item active">
                            <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Thumbnail 1">
                        </div>
                        <div class="thumb-item">
                            <img src="https://images.pexels.com/photos/3394650/pexels-photo-3394650.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Thumbnail 2">
                        </div>
                        <div class="thumb-item">
                            <img src="https://images.pexels.com/photos/3394654/pexels-photo-3394654.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Thumbnail 3">
                        </div>
                        <div class="thumb-item">
                            <img src="https://images.pexels.com/photos/3394665/pexels-photo-3394665.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Thumbnail 4">
                        </div>
                    </div>
                    <div class="main-image">
                        <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Wireless Headphones">
                    </div>
                </div>

                <div class="product-info">
                    <h1>Wireless Bluetooth Headphones</h1>
                    <div class="product-rating">
                        <span>★★★★☆</span>
                        <span class="rating-count">(24 reviews)</span>
                    </div>
                    <div class="product-price">$99.99</div>
                    <div class="product-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="product-meta">
                        <div class="meta-item">
                            <span>SKU:</span> WH-1234
                        </div>
                        <div class="meta-item">
                            <span>Category:</span> Electronics
                        </div>
                        <div class="meta-item">
                            <span>Availability:</span> In Stock
                        </div>
                    </div>
                    <div class="quantity-selector">
                        <span>Quantity:</span>
                        <div class="quantity-input">
                            <button class="quantity-btn">-</button>
                            <input type="number" value="1" min="1">
                            <button class="quantity-btn">+</button>
                        </div>
                    </div>
                    <div class="product-actions">
                        <button class="btn btn-primary">Add to Cart</button>
                        <button class="btn btn-outline">Add to Wishlist</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-tabs">
            <div class="tabs-nav">
                <div class="tab-item active">Description</div>
                <div class="tab-item">Specifications</div>
                <div class="tab-item">Reviews (24)</div>
            </div>

            <div class="tab-content active">
                <h3>Product Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul style="list-style-type: disc; margin-left: 20px; margin-top: 10px;">
                    <li>High-quality sound with deep bass</li>
                    <li>Bluetooth 5.0 connectivity</li>
                    <li>Up to 20 hours of battery life</li>
                    <li>Comfortable over-ear design</li>
                    <li>Built-in microphone for calls</li>
                </ul>
            </div>

            <div class="tab-content">
                <h3>Technical Specifications</h3>
                <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: 600;">Brand</td>
                        <td>LaraSound</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: 600;">Model</td>
                        <td>LS-500</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: 600;">Color</td>
                        <td>Black</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: 600;">Connectivity</td>
                        <td>Bluetooth 5.0, 3.5mm jack</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: 600;">Battery Life</td>
                        <td>Up to 20 hours</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: 600;">Weight</td>
                        <td>250g</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; font-weight: 600;">Warranty</td>
                        <td>1 year</td>
                    </tr>
                </table>
            </div>

            <div class="tab-content">
                <div class="review-form">
                    <h3>Write a Review</h3>
                    <form>
                        <div class="rating-select">
                            <button type="button" class="active">★</button>
                            <button type="button" class="active">★</button>
                            <button type="button" class="active">★</button>
                            <button type="button" class="active">★</button>
                            <button type="button">★</button>
                        </div>
                        <div class="form-group">
                            <label for="review-title">Review Title</label>
                            <input type="text" id="review-title" class="form-control" placeholder="Give your review a title">
                        </div>
                        <div class="form-group">
                            <label for="review-content">Your Review</label>
                            <textarea id="review-content" class="form-control" rows="5" placeholder="Write your review here"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="review-name">Your Name</label>
                            <input type="text" id="review-name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="review-email">Your Email</label>
                            <input type="email" id="review-email" class="form-control" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </form>
                </div>

                <div class="review-list">
                    <div class="review-item">
                        <div class="review-header">
                            <div class="review-author">John Doe</div>
                            <div class="review-date">June 15, 2023</div>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <h4>Amazing sound quality!</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>

                    <div class="review-item">
                        <div class="review-header">
                            <div class="review-author">Jane Smith</div>
                            <div class="review-date">May 28, 2023</div>
                        </div>
                        <div class="review-rating">★★★★☆</div>
                        <h4>Great headphones, but battery could be better</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>

                    <div class="review-item">
                        <div class="review-header">
                            <div class="review-author">Mike Johnson</div>
                            <div class="review-date">April 10, 2023</div>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <h4>Perfect for my daily commute</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="related-products">
            <h2 class="section-title">Related Products</h2>
            <div class="product-grid">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="https://images.pexels.com/photos/1279107/pexels-photo-1279107.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Bluetooth Speaker">
                    </div>
                    <div class="product-card-info">
                        <h3 class="product-card-title">Bluetooth Speaker</h3>
                        <div class="product-card-price">$79.99</div>
                        <a href="product.html" class="btn btn-primary">View Details</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-img">
                        <img src="https://images.pexels.com/photos/3394650/pexels-photo-3394650.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Wireless Earbuds">
                    </div>
                    <div class="product-card-info">
                        <h3 class="product-card-title">Wireless Earbuds</h3>
                        <div class="product-card-price">$129.99</div>
                        <a href="product.html" class="btn btn-primary">View Details</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-img">
                        <img src="https://images.pexels.com/photos/437037/pexels-photo-437037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Smart Watch">
                    </div>
                    <div class="product-card-info">
                        <h3 class="product-card-title">Smart Watch</h3>
                        <div class="product-card-price">$149.99</div>
                        <a href="product.html" class="btn btn-primary">View Details</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-img">
                        <img src="https://images.pexels.com/photos/3780681/pexels-photo-3780681.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Portable Charger">
                    </div>
                    <div class="product-card-info">
                        <h3 class="product-card-title">Portable Charger</h3>
                        <div class="product-card-price">$49.99</div>
                        <a href="product.html" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection