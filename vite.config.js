import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/frontend/css/bootstrap.min.css',
                'resources/frontend/css/fontawesome.css',
                'resources/frontend/css/owl.css',
                'resources/frontend/css/templatemo-digimedia-v1.css',
                'resources/frontend/js/bootstrap.bundle.min.js',
                'resources/frontend/js/owl-carousel.js',
                'resources/frontend/js/custom.js',

            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
