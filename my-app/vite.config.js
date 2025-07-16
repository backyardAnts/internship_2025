import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',     // your Bootstrap styles
                'resources/js/app.jsx',      // your React entry point
            ],
            refresh: true,
        }),
        react(),
    ],
});
