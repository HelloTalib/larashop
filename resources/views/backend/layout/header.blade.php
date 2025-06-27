<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraShop - Admin Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/backend/admin.css', 'resources/js/app.js'])

    {{-- Load page-specific CSS based on the current route --}}
    @if(Route::currentRouteName() == 'dashboard')
    @vite(['resources/css/backend/dashboard.css'])
    @elseif(Route::currentRouteName() == 'products')
    @vite(['resources/css/backend/products.css'])
    @elseif(Route::currentRouteName() == 'orders')
    @vite(['resources/css/backend/orders.css'])
    @elseif(Route::currentRouteName() == 'customers')
    @vite(['resources/css/backend/customers.css'])
    @elseif(Route::currentRouteName() == 'add-product')
    @vite(['resources/css/backend/add-product.css'])
    @elseif(Route::currentRouteName() == 'add-order')
    @vite(['resources/css/backend/add-order.css'])
    @elseif(Route::currentRouteName() == 'add-customer')
    @vite(['resources/css/backend/add-customer.css'])
    @endif
    @endif
</head>

<body>
    <div class="admin-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo">Lara<span>Shop</span></div>
            </div>

            <nav class="sidebar-menu">
                <a href="{{ route('dashboard') }}" class="menu-item active">
                    📊 <span>Dashboard</span>
                </a>
                <a href="{{ route('orders') }}" class="menu-item">
                    🛒 <span>Orders</span>
                </a>
                <a href="{{ route('products') }}" class="menu-item">
                    📦 <span>Products</span>
                </a>
                <a href="{{ route('customers') }}" class="menu-item">
                    👥 <span>Customers</span>
                </a>

                <div class="menu-category">Content</div>
                <a href="admin-categories.html" class="menu-item">
                    📝 <span>Categories</span>
                </a>
                <a href="admin-brands.html" class="menu-item">
                    🏷️ <span>Brands</span>
                </a>
                <a href="admin-banners.html" class="menu-item">
                    🖼️ <span>Banners</span>
                </a>

                <div class="menu-category">Settings</div>
                <a href="admin-general.html" class="menu-item">
                    ⚙️ <span>General</span>
                </a>
                <a href="admin-security.html" class="menu-item">
                    🔒 <span>Security</span>
                </a>
                <a href="admin-users.html" class="menu-item">
                    👤 <span>Users</span>
                </a>
                <a href="index.html" class="menu-item">
                    🏪 <span>View Store</span>
                </a>
            </nav>
        </aside>
        @yield('content')
    </div>
</body>

</html>