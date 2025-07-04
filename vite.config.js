import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // Frontend assets
                'resources/css/frontend/global.css',
                'resources/css/frontend/index.css',
                'resources/css/frontend/shop.css',
                'resources/css/frontend/product.css',
                'resources/css/frontend/about.css',
                'resources/css/frontend/contact.css',
                'resources/css/frontend/auth/login.css',
                'resources/css/frontend/auth/register.css',
                'resources/css/frontend/cart.css',
                'resources/css/frontend/categories.css',
                'resources/css/frontend/checkout.css',
                // Backend/Dashboard assets
                'resources/css/backend/admin.css',
                'resources/css/backend/dashboard.css',
                'resources/css/backend/products.css',
                'resources/css/backend/orders.css',
                'resources/css/backend/customers.css',
                'resources/css/backend/add-product.css',
                'resources/css/backend/add-order.css',
                'resources/css/backend/add-customer.css',
                'resources/css/backend/add-user.css',

            ],
            refresh: true,
        }),
        tailwindcss({
            theme: {
                extend: {
                    colors: {
                        primary: '#3498db',
                        primaryDark: '#2980b9',
                        secondary: '#2c3e50',
                    }
                }
            }
        }),
    ],
});
