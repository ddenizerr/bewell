import { wayfinder } from '@laravel/vite-plugin-wayfinder';
import tailwindcss from '@tailwindcss/vite';
import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.tsx'],
            ssr: 'resources/js/ssr.tsx',
            refresh: true,
        }),
        react({
            babel: {
                plugins: ['babel-plugin-react-compiler'],
            },
        }),
        tailwindcss(),
        wayfinder({
            formVariants: true,
        }),
    ],
    server: {
        proxy: {
            '/api': { target: 'http://127.0.0.1:8000', changeOrigin: true},
            '/login':  { target: 'http://127.0.0.1:8000', changeOrigin: true },
            '/logout': { target: 'http://127.0.0.1:8000', changeOrigin: true },
            '/user':   { target: 'http://127.0.0.1:8000', changeOrigin: true },
            '/sanctum':{ target: 'http://127.0.0.1:8000', changeOrigin: true },
        },
    },
    esbuild: {
        jsx: 'automatic',
    },
});
