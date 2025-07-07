import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [
    laravel({
      input: ["resources/css/app.scss", "resources/js/app.js"],
      refresh: true,
    }),
  ],

  build: {
    outDir: 'public/build',   // this should be here or default
    manifest: true,
    rollupOptions: {
      input: ['resources/css/app.css', 'resources/js/app.js'],
    },
   },  
});
