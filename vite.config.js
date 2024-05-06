import { defineConfig } from 'vite';
import mkcert from 'vite-plugin-mkcert';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    mkcert(),
  ],
});
