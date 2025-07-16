import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
               
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'

Alpine.plugin(focus)
window.Alpine = Alpine
Alpine.start()
