import path from 'path';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // <-- This is the default (Tailwind CSS used in Auth Views)
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/js/enable_tooltip_popover.js',
                'resources/js/enable_select2.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    },
});
