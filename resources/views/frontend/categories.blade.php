@extends('frontend.layout.header')
@section('title', 'Categories')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li class="active">Categories</li>
        </ul>
    </div>
</div>

<main>
    <div class="container">
        <div class="page-title">
            <h1>Shop by Categories</h1>
            <p>Browse our wide range of product categories to find exactly what you're looking for</p>
        </div>

        <section class="featured-categories">
            <div class="section-title">
                <h2>Featured Categories</h2>
            </div>

            <div class="featured-grid">
                <div class="featured-category">
                    <img src="https://via.placeholder.com/600x600" alt="Electronics">
                    <div class="featured-overlay">
                        <h3>Electronics</h3>
                        <p>Latest gadgets and tech accessories</p>
                        <a href="#" class="btn btn-outline">Shop Now</a>
                    </div>
                </div>

                <div class="featured-category">
                    <img src="https://via.placeholder.com/600x600" alt="Fashion">
                    <div class="featured-overlay">
                        <h3>Fashion</h3>
                        <p>Trendy clothing and accessories</p>
                        <a href="#" class="btn btn-outline">Shop Now</a>
                    </div>
                </div>

                <div class="featured-category">
                    <img src="https://via.placeholder.com/600x600" alt="Home & Kitchen">
                    <div class="featured-overlay">
                        <h3>Home & Kitchen</h3>
                        <p>Everything for your living space</p>
                        <a href="#" class="btn btn-outline">Shop Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="categories-section">
            <div class="section-title">
                <h2>All Categories</h2>
            </div>

            <div class="category-grid">
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://via.placeholder.com/400x300" alt="Electronics">
                    </div>
                    <div class="category-content">
                        <h3>Electronics</h3>
                        <p>Smartphones, laptops, and more</p>
                        <span class="category-count">45 Products</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <img src="https://via.placeholder.com/400x300" alt="Clothing">
                    </div>
                    <div class="category-content">
                        <h3>Clothing</h3>
                        <p>Men's, women's, and children's apparel</p>
                        <span class="category-count">78 Products</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <img src="https://via.placeholder.com/400x300" alt="Home & Kitchen">
                    </div>
                    <div class="category-content">
                        <h3>Home & Kitchen</h3>
                        <p>Appliances, decor, and kitchenware</p>
                        <span class="category-count">56 Products</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <img src="https://via.placeholder.com/400x300" alt="Beauty">
                    </div>
                    <div class="category-content">
                        <h3>Beauty</h3>
                        <p>Skincare, makeup, and fragrances</p>
                        <span class="category-count">32 Products</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <img src="https://via.placeholder.com/400x300" alt="Sports & Outdoors">
                    </div>
                    <div class="category-content">
                        <h3>Sports & Outdoors</h3>
                        <p>Equipment, apparel, and accessories</p>
                        <span class="category-count">41 Products</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <img src="https://via.placeholder.com/400x300" alt="Books">
                    </div>
                    <div class="category-content">
                        <h3>Books</h3>
                        <p>Fiction, non-fiction, and textbooks</p>
                        <span class="category-count">63 Products</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <img src="https://via.placeholder.com/400x300" alt="Toys & Games">
                    </div>
                    <div class="category-content">
                        <h3>Toys & Games</h3>
                        <p>For children of all ages</p>
                        <span class="category-count">37 Products</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <img src="https://via.placeholder.com/400x300" alt="Health & Wellness">
                    </div>
                    <div class="category-content">
                        <h3>Health & Wellness</h3>
                        <p>Supplements, fitness gear, and more</p>
                        <span class="category-count">29 Products</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="subcategories">
            <div class="section-title">
                <h2>Popular Subcategories</h2>
            </div>

            <div class="subcategory-list">
                <div class="subcategory-item">
                    <div class="subcategory-icon">📱</div>
                    <h4>Smartphones</h4>
                    <p>Latest models from top brands</p>
                </div>

                <div class="subcategory-item">
                    <div class="subcategory-icon">💻</div>
                    <h4>Laptops</h4>
                    <p>For work, gaming, and more</p>
                </div>

                <div class="subcategory-item">
                    <div class="subcategory-icon">👕</div>
                    <h4>Men's Clothing</h4>
                    <p>Shirts, pants, and accessories</p>
                </div>

                <div class="subcategory-item">
                    <div class="subcategory-icon">👗</div>
                    <h4>Women's Clothing</h4>
                    <p>Dresses, tops, and more</p>
                </div>

                <div class="subcategory-item">
                    <div class="subcategory-icon">🍳</div>
                    <h4>Kitchen Appliances</h4>
                    <p>Tools for cooking and baking</p>
                </div>

                <div class="subcategory-item">
                    <div class="subcategory-icon">🏠</div>
                    <h4>Home Decor</h4>
                    <p>Beautify your living space</p>
                </div>

                <div class="subcategory-item">
                    <div class="subcategory-icon">💄</div>
                    <h4>Makeup</h4>
                    <p>Foundations, lipsticks, and more</p>
                </div>

                <div class="subcategory-item">
                    <div class="subcategory-icon">⌚</div>
                    <h4>Watches</h4>
                    <p>Analog, digital, and smart</p>
                </div>
            </div>
        </section>
    </div>

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
</main>
@endsection