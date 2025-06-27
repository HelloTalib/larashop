@extends('frontend.layout.header')
@section('title', 'Login')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li class="active">Login</li>
        </ul>
    </div>
</div>

<main>
    <div class="container">
        <section class="login-section">
            <h1 class="section-title">Login to Your Account</h1>

            <div class="login-container">
                <form>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" id="password" class="form-control" required>
                    </div>

                    <div class="login-actions">
                        <div class="form-check">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="#">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn btn-block">Login</button>
                </form>

                <div class="social-login">
                    <div class="social-login-title">
                        <span>Or login with</span>
                    </div>
                    <div class="social-buttons">
                        <a href="#" class="social-btn">F</a>
                        <a href="#" class="social-btn">G</a>
                        <a href="#" class="social-btn">T</a>
                    </div>
                </div>

                <div class="register-link">
                    <p>Don't have an account? <a href="register.html">Register now</a></p>
                </div>
            </div>
        </section>
    </div>
</main>
@include('frontend.layout.footer')
@endsection