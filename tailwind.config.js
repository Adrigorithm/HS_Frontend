/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
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

