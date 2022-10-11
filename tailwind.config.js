/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    
  ],
  darkMode: false,
  theme: {
    extend: {},
  },
  plugins: [
    require("daisyui"),
    // require('tailwindcss-plugins/pagination'),
  ],
}