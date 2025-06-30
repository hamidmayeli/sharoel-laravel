import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js','resources/css/components/map.css','resources/js/components/map.js',],
            refresh: true,
            publicDirectory: 'public_html',
        }),
    ],
    build: {
        outDir: 'public_html/build',
    },
    server: {
        hmr: {
            host: 'localhost',
        },
    },
});
