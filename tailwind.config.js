/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "index.html",
    "pages/*.html",
    "assets/css/*.css",
    "assets/ts/*.ts"
  ],
  theme: {
    extend: {
      colors: {
        paraBlue: "oklch(82.65% 0.066 250.73)",
        paraRed: "oklch(40.42% 0.107 21.64)"
      }
    },
  },
  plugins: [],
}

