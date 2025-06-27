<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraShop - @yield('title', 'Home')</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/frontend/global.css', 'resources/js/app.js'])

    {{-- Load page-specific CSS based on the current route --}}
    @if(Route::currentRouteName() == 'index' || Route::is('/'))
    @vite(['resources/css/frontend/index.css'])
    @elseif(Route::currentRouteName() == 'shop')
    @vite(['resources/css/frontend/shop.css'])
    @elseif(Route::currentRouteName() == 'product')
    @vite(['resources/css/frontend/product.css'])
    @elseif(Route::currentRouteName() == 'about')
    @vite(['resources/css/frontend/about.css'])
    @elseif(Route::currentRouteName() == 'contact')
    @vite(['resources/css/frontend/contact.css'])
    @elseif(Route::currentRouteName() == 'login')
    @vite(['resources/css/frontend/auth/login.css'])
    @elseif(Route::currentRouteName() == 'register')
    @vite(['resources/css/frontend/auth/register.css'])
    @elseif(Route::currentRouteName() == 'cart')
    @vite(['resources/css/frontend/cart.css'])
    @elseif(Route::currentRouteName() == 'categories')
    @vite(['resources/css/frontend/categories.css'])
    @elseif(Route::currentRouteName() == 'checkout')
    @vite(['resources/css/frontend/checkout.css'])
    @endif
    @endif
</head>

<body>
    <header>
        <div class="container header-container">
            <div class="logo">Lara<span>Shop</span></div>
            <nav>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                <a href="{{ route('cart') }}">Cart (0)</a>
            </div>
            <div class="mobile-menu">☰</div>
        </div>
    </header>
    @yield('content')
    @include('frontend.layout.footer')
</body>

</html>