@extends('frontend.layout.header')

@section('content')

<section class="hero">
    <div class="container">
        <h1>Welcome to LaraShop</h1>
        <p>Discover amazing products with unbeatable prices. Shop now and enjoy free shipping on all orders.</p>
        <a href="{{ route('shop') }}" class="btn">Shop Now</a>
    </div>
</section>

<section class="categories">
    <div class="container">
        <div class="section-title">
            <h2>Shop by Category</h2>
        </div>
        <div class="category-grid">
            <div class="category-card">
                <img src="https://images.pexels.com/photos/356056/pexels-photo-356056.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Electronics">
                <div class="category-content">
                    <h3>Electronics</h3>
                </div>
            </div>
            <div class="category-card">
                <img src="https://images.pexels.com/photos/934070/pexels-photo-934070.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Clothing">
                <div class="category-content">
                    <h3>Clothing</h3>
                </div>
            </div>
            <div class="category-card">
                <img src="https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Home & Kitchen">
                <div class="category-content">
                    <h3>Home & Kitchen</h3>
                </div>
            </div>
            <div class="category-card">
                <img src="https://images.pexels.com/photos/3373736/pexels-photo-3373736.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Beauty">
                <div class="category-content">
                    <h3>Beauty</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-products">
    <div class="container">
        <div class="section-title">
            <h2>Featured Products</h2>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-img">
                    <img src="https://images.pexels.com/photos/1591/technology-music-sound-things.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Wireless Headphones">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Wireless Headphones</h3>
                    <div class="product-price">$99.99</div>
                    <div class="product-rating">★★★★☆</div>
                    <a href="product.html" class="btn">View Details</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-img">
                    <img src="https://images.pexels.com/photos/437037/pexels-photo-437037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Smart Watch">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Smart Watch</h3>
                    <div class="product-price">$149.99</div>
                    <div class="product-rating">★★★★★</div>
                    <a href="product.html" class="btn">View Details</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-img">
                    <img src="https://images.pexels.com/photos/18104/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Laptop Sleeve">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Laptop Sleeve</h3>
                    <div class="product-price">$29.99</div>
                    <div class="product-rating">★★★★☆</div>
                    <a href="product.html" class="btn">View Details</a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-img">
                    <img src="https://images.pexels.com/photos/1279107/pexels-photo-1279107.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Bluetooth Speaker">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Bluetooth Speaker</h3>
                    <div class="product-price">$79.99</div>
                    <div class="product-rating">★★★★★</div>
                    <a href="product.html" class="btn">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="section-title">
            <h2>What Our Customers Say</h2>
        </div>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="testimonial-img">
                    <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Customer 1">
                </div>
                <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <p class="testimonial-author">John Doe</p>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-img">
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Customer 2">
                </div>
                <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <p class="testimonial-author">Jane Smith</p>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-img">
                    <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Customer 3">
                </div>
                <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <p class="testimonial-author">Mike Johnson</p>
            </div>
        </div>
    </div>
</section>

<section class="newsletter">
    <div class="container">
        <h2>Subscribe to Our Newsletter</h2>
        <p>Get the latest updates about new products and upcoming sales.</p>
        <form class="newsletter-form">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</section>
@endsection