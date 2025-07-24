import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    // 👇 Add this for HTTPS production assets
    base: process.env.APP_URL?.endsWith("/")
        ? `${process.env.APP_URL}build/`
        : `${process.env.APP_URL}/build/`,
});
