import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    build: {
        outDir: "dist",
    },
    preview: {
        host: true,
        port: process.env.PORT || 4173,
        // Autoriser le domaine Render
        allowedHosts: ["car-brand.onrender.com"],
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
