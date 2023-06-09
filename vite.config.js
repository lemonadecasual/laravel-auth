import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/auth/index.js",
                "resources/js/auth/register.js",
                "resources/js/profile/index.js",
                "resources/css/profile/index.scss",
            ],
            refresh: true,
        }),
    ],
});
