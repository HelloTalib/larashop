@extends('frontend.layout.header')

@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="active">About Us</li>
        </ul>
    </div>
</div>

<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1>Our Story</h1>
            <p>We're passionate about providing quality products and exceptional shopping experiences. Learn more about our journey, our team, and our mission.</p>
            <a href="{{ route('contact') }}" class="btn">Get in Touch</a>
        </div>
    </div>
</section>

<main>
    <section class="about-section">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2>Who We Are</h2>
                    <p>LaraShop was founded in 2015 with a simple mission: to create an online shopping destination that combines quality products, competitive prices, and exceptional customer service.</p>
                    <p>What started as a small venture has grown into a trusted e-commerce platform serving thousands of customers worldwide. We take pride in curating products that meet our high standards for quality, design, and functionality.</p>
                    <p>Our team of dedicated professionals works tirelessly to ensure that every aspect of your shopping experience exceeds expectations, from browsing our carefully selected inventory to receiving your package at your doorstep.</p>

                    <div class="about-stats">
                        <div class="stat-item">
                            <div class="stat-number">50K+</div>
                            <div class="stat-label">Happy Customers</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5K+</div>
                            <div class="stat-label">Products</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Countries Served</div>
                        </div>
                    </div>
                </div>

                <div class="about-image">
                    <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="About LaraShop">
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Values</h2>
                <p>These core principles guide everything we do at LaraShop</p>
            </div>

            <div class="mission-grid">
                <div class="mission-card">
                    <div class="mission-icon">🌟</div>
                    <h3>Quality First</h3>
                    <p>We never compromise on the quality of our products. Each item in our inventory undergoes rigorous quality checks to ensure it meets our high standards.</p>
                </div>

                <div class="mission-card">
                    <div class="mission-icon">👥</div>
                    <h3>Customer Obsession</h3>
                    <p>Our customers are at the heart of everything we do. We continuously strive to improve our services based on your feedback and needs.</p>
                </div>

                <div class="mission-card">
                    <div class="mission-icon">🌍</div>
                    <h3>Sustainability</h3>
                    <p>We're committed to reducing our environmental footprint through eco-friendly packaging, sustainable sourcing, and responsible business practices.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <div class="section-title">
                <h2>Meet Our Team</h2>
                <p>The passionate individuals behind LaraShop's success</p>
            </div>

            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="John Doe">
                    </div>
                    <div class="member-info">
                        <h3>John Doe</h3>
                        <div class="member-position">CEO & Founder</div>
                        <p class="member-bio">With over 15 years of e-commerce experience, John leads our company with vision and passion.</p>
                        <div class="social-links">
                            <a href="#">🔗</a>
                            <a href="#">🔗</a>
                            <a href="#">🔗</a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Jane Smith">
                    </div>
                    <div class="member-info">
                        <h3>Jane Smith</h3>
                        <div class="member-position">Chief Operations Officer</div>
                        <p class="member-bio">Jane ensures our operations run smoothly and efficiently, always with the customer in mind.</p>
                        <div class="social-links">
                            <a href="#">🔗</a>
                            <a href="#">🔗</a>
                            <a href="#">🔗</a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Mike Johnson">
                    </div>
                    <div class="member-info">
                        <h3>Mike Johnson</h3>
                        <div class="member-position">Product Manager</div>
                        <p class="member-bio">Mike has a keen eye for quality and trends, curating our product selection with expertise.</p>
                        <div class="social-links">
                            <a href="#">🔗</a>
                            <a href="#">🔗</a>
                            <a href="#">🔗</a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Sarah Williams">
                    </div>
                    <div class="member-info">
                        <h3>Sarah Williams</h3>
                        <div class="member-position">Customer Experience Lead</div>
                        <p class="member-bio">Sarah is dedicated to ensuring every customer interaction with LaraShop is exceptional.</p>
                        <div class="social-links">
                            <a href="#">🔗</a>
                            <a href="#">🔗</a>
                            <a href="#">🔗</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Customers Say</h2>
                <p>Don't just take our word for it - hear from our satisfied customers</p>
            </div>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>LaraShop has been my go-to online store for electronics for the past two years. Their product quality and customer service are unmatched. I highly recommend them!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Robert Wilson">
                        </div>
                        <div class="author-info">
                            <h4>Robert Wilson</h4>
                            <p>Loyal Customer</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>I had an issue with my order and contacted customer support. They resolved my problem within minutes! That's what I call exceptional service.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Emily Davis">
                        </div>
                        <div class="author-info">
                            <h4>Emily Davis</h4>
                            <p>Happy Shopper</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>The quality of products from LaraShop is consistently excellent. I've never been disappointed with any of my purchases, and delivery is always prompt.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="David Brown">
                        </div>
                        <div class="author-info">
                            <h4>David Brown</h4>
                            <p>Frequent Buyer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Start Shopping?</h2>
                <p>Explore our wide selection of quality products and experience the LaraShop difference for yourself.</p>
                <a href="{{ route('shop') }}" class="btn btn-white">Shop Now</a>
            </div>
        </div>
    </section>
</main>
@endsection