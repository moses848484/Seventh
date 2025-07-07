import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true,
    }),
  ],

  build: {
    outDir: 'public/build',   // this should be here or default
    manifest: true,
    rollupOptions: {
      input: ['assets/app-Blh_SI5O.js', 'assets/app-Cr1BV_sL.css'],
    },
   },  
});
