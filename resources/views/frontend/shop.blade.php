@extends('frontend.layout.header')
@section('title', 'Shop')
@section('content')

<main>
    <div class="container">
        <h1 style="margin: 2rem 0 1rem;">Shop</h1>
        <div class="shop-container">
            <aside class="filter-sidebar">
                <h2 style="margin-bottom: 1.5rem;">Filters</h2>

                <div class="filter-group">
                    <h3 class="filter-title">Categories</h3>
                    <div class="filter-item">
                        <input type="checkbox" id="electronics">
                        <label for="electronics">Electronics</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="clothing">
                        <label for="clothing">Clothing</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="home">
                        <label for="home">Home & Kitchen</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="beauty">
                        <label for="beauty">Beauty</label>
                    </div>
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Price Range</h3>
                    <div class="price-range">
                        <div class="price-inputs">
                            <input type="number" placeholder="Min">
                            <input type="number" placeholder="Max">
                        </div>
                    </div>
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Rating</h3>
                    <div class="filter-item">
                        <input type="checkbox" id="rating5">
                        <label for="rating5"><span class="rating-stars">★★★★★</span></label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="rating4">
                        <label for="rating4"><span class="rating-stars">★★★★☆</span></label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="rating3">
                        <label for="rating3"><span class="rating-stars">★★★☆☆</span></label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="rating2">
                        <label for="rating2"><span class="rating-stars">★★☆☆☆</span></label>
                    </div>
                </div>

                <button class="filter-btn">Apply Filters</button>
            </aside>

            <section class="product-section">
                <div class="product-header">
                    <div class="product-count">Showing 1-12 of 36 products</div>
                    <div class="product-sort">
                        <label for="sort">Sort by:</label>
                        <select id="sort">
                            <option>Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest First</option>
                            <option>Best Rated</option>
                        </select>
                    </div>
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
                            <a href="{{ route('product') }}" class="btn">View Details</a>
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
                            <a href="{{ route('product') }}" class="btn">View Details</a>
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
                            <a href="{{ route('product') }}" class="btn">View Details</a>
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
                            <a href="{{ route('product') }}" class="btn">View Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.pexels.com/photos/607812/pexels-photo-607812.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Smartphone Case">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Smartphone Case</h3>
                            <div class="product-price">$19.99</div>
                            <div class="product-rating">★★★★☆</div>
                            <a href="{{ route('product') }}" class="btn">View Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.pexels.com/photos/3153198/pexels-photo-3153198.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Wireless Mouse">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Wireless Mouse</h3>
                            <div class="product-price">$39.99</div>
                            <div class="product-rating">★★★★☆</div>
                            <a href="{{ route('product') }}" class="btn">View Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.pexels.com/photos/1112598/pexels-photo-1112598.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Desk Lamp">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Desk Lamp</h3>
                            <div class="product-price">$49.99</div>
                            <div class="product-rating">★★★★★</div>
                            <a href="{{ route('product') }}" class="btn">View Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.pexels.com/photos/362216/pexels-photo-362216.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Coffee Maker">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Coffee Maker</h3>
                            <div class="product-price">$89.99</div>
                            <div class="product-rating">★★★★☆</div>
                            <a href="{{ route('product') }}" class="btn">View Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.pexels.com/photos/4498482/pexels-photo-4498482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Fitness Tracker">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Fitness Tracker</h3>
                            <div class="product-price">$59.99</div>
                            <div class="product-rating">★★★★☆</div>
                            <a href="{{ route('product') }}" class="btn">View Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.pexels.com/photos/3780681/pexels-photo-3780681.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Portable Charger">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Portable Charger</h3>
                            <div class="product-price">$49.99</div>
                            <div class="product-rating">★★★★★</div>
                            <a href="{{ route('product') }}" class="btn">View Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.pexels.com/photos/3394650/pexels-photo-3394650.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Wireless Earbuds">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Wireless Earbuds</h3>
                            <div class="product-price">$129.99</div>
                            <div class="product-rating">★★★★★</div>
                            <a href="product.html" class="btn">View Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.pexels.com/photos/51383/photo-camera-subject-photographer-51383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Digital Camera">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Digital Camera</h3>
                            <div class="product-price">$299.99</div>
                            <div class="product-rating">★★★★☆</div>
                            <a href="{{ route('product') }}" class="btn">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="pagination">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">Next &raquo;</a>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection