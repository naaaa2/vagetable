import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        // outDir に manifest.json を出力
        manifest: true,
        rollupOptions: {
           // デフォルトの .html エントリを上書き
          input: '/path/to/main.js'
        }
    },
    server: {
        hmr: {
            host: 'us-cdbr-east-06.cleardb.net',
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
