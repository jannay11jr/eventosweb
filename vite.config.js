import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '/',
    plugins: [
        laravel({
            input: [
                'resources/bootstrap/css/bootstrap.min.css',
                'resources/bootstrap/js/bootstrap.min.js',
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
