import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import postcssImport from 'postcss-import';
import autoprefixer from 'autoprefixer';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  css: {
    postcss: {
      plugins: [postcssImport(), autoprefixer()],
    },
  },
  server: {
    proxy: {
      '/': {
        target: 'http://localhost:8000',
        changeOrigin: true,
      },
    },
  },
});