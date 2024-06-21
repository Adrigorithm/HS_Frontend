/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/assets/css/*.css",
    "./src/assets/ts/*.ts",
    "./src/pages/*.html"
  ],
  theme: {
    colors: {
      "paraBlue": "oklch(82.65% 0.066 250.73)",
      "paraRed": "oklch(40.42% 0.107 21.64)"
    },
    extend: {},
  },
  plugins: [],
}

