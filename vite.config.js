import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
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
