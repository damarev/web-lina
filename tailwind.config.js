/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,php,js}","./www/**/*.{html,php,js}"],
  theme: {
    extend: {},
  },
  plugins: [
    'postcss-import',
  	require('@tailwindcss/typography'),
    'autoprefixer'
  ],
}
