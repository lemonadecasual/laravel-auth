/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                type: "1e2233",
                "type-second": "#8f8f99",
                primary: "#0062ff",
                error: "#fc5a5a",
                warning: "#ff974a",
                success: "#3dd598",
                gray: "#878690",
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
      ],
};
