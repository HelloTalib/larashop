@extends('frontend.layout.header')
@section('title', 'Register')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="active">Register</li>
        </ul>
    </div>
</div>

<main>
    <div class="container">
        <section class="register-section">
            <h1 class="section-title">Create an Account</h1>

            <div class="register-container">
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
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" id="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password *</label>
                        <input type="password" id="confirm-password" class="form-control" required>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="newsletter">
                        <label for="newsletter">Subscribe to our newsletter</label>
                    </div>

                    <button type="submit" class="btn btn-block">Register</button>
                </form>

                <div class="social-register">
                    <div class="social-register-title">
                        <span>Or register with</span>
                    </div>
                    <div class="social-buttons">
                        <a href="#" class="social-btn">F</a>
                        <a href="#" class="social-btn">G</a>
                        <a href="#" class="social-btn">T</a>
                    </div>
                </div>

                <div class="login-link">
                    <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </div>
        </section>
    </div>
</main>
@include('frontend.layout.footer')
@endsection