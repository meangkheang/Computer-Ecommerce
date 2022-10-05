/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            nunito: ["nunito", "sans-serif"],
            main: ["Poppins", "sans-serif"], // Ensure fonts with spaces have " " surrounding it.
            mavenPro : ['Maven Pro', 'sans-serif'],
        },
        screens: {
            xs: { min: "240px" },
            // => @media (min-width: 240px) { ... }
            ss: { min: "520px" },
            sm: "640px",
            // => @media (min-width: 640px) { ... }

            md: "768px",
            // => @media (min-width: 768px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1280px",
            // => @media (min-width: 1280px) { ... }

            "2xl": "1536px",
            // => @media (min-width: 1536px) { ... }
        },
        extend: {
            keyframes: {
                slowDrop: {
                  '0%':{ transform: 'translate(50%,-20px)', },
                  '50%':{ transform: 'translate(50%,5px)', opacity: 1},
                  '80%':{ transform: 'translate(50%,20px)', opacity: 0.9},
                  '90%':{ transform: 'translate(50%,35px)', opacity: 0.5},
                  '100%': { opacity: 0 ,transform: 'translate(50%,45px)'},
                }
              },
            animation: {
                slowDrop: 'slowDrop 800ms ease-out forwards',
            }
        },
    },
    plugins: [],
};
