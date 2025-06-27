@extends('frontend.layout.header')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact Us</li>
        </ul>
    </div>
</div>

<main>
    <div class="container">
        <div class="page-title">
            <h1>Get In Touch</h1>
            <p>We'd love to hear from you. Whether you have a question about our products, need help with an order, or want to provide feedback, our team is ready to assist you.</p>
        </div>

        <section class="contact-section">
            <div class="contact-grid">
                <div class="contact-form">
                    <h2 class="form-title">Send Us a Message</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number (Optional)</label>
                            <input type="tel" id="phone" class="form-control" placeholder="Enter your phone number">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" class="form-control" placeholder="Enter message subject" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control" placeholder="Write your message here..." required></textarea>
                        </div>

                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>

                <div class="contact-info">
                    <h2 class="info-title">Contact Information</h2>

                    <div class="info-list">
                        <div class="info-item">
                            <div class="info-icon">📍</div>
                            <div class="info-content">
                                <h4>Address</h4>
                                <p>123 Commerce Street, Business District, City, Country</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">📞</div>
                            <div class="info-content">
                                <h4>Phone</h4>
                                <p>Customer Support: (123) 456-7890</p>
                                <p>Sales Inquiries: (123) 456-7891</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">✉️</div>
                            <div class="info-content">
                                <h4>Email</h4>
                                <p>General Inquiries: info@larashop.com</p>
                                <p>Support: support@larashop.com</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">🕒</div>
                            <div class="info-content">
                                <h4>Business Hours</h4>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                                <p>Saturday: 10:00 AM - 4:00 PM</p>
                                <p>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#">🔗</a>
                        <a href="#">🔗</a>
                        <a href="#">🔗</a>
                        <a href="#">🔗</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="map-section">
        <div class="container">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986432970718!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1625124127403!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find quick answers to common questions</p>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">How long does shipping take?</div>
                    <div class="faq-answer">
                        <p>Shipping times vary depending on your location and the shipping method selected at checkout. Domestic orders typically arrive within 3-5 business days, while international orders may take 7-14 business days.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">What is your return policy?</div>
                    <div class="faq-answer">
                        <p>We offer a 30-day return policy for most items. Products must be in their original condition with tags attached and original packaging. Some exceptions apply for hygiene products and custom orders.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">Do you ship internationally?</div>
                    <div class="faq-answer">
                        <p>Yes, we ship to most countries worldwide. International shipping costs and delivery times vary by location. You can see the shipping options available for your country during checkout.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">How can I track my order?</div>
                    <div class="faq-answer">
                        <p>Once your order ships, you'll receive a confirmation email with tracking information. You can also log in to your account on our website to view your order status and tracking details.</p>
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
                <a href="shop.html" class="btn btn-white">Shop Now</a>
            </div>
        </div>
    </section>
</main>
@endsection