/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,php,js}","./www/**/*.{html,php,js}"],
  theme: {
    fontFamily: {
      'sans': ['"Raleway", Helvetica, Roboto, "Helvetica Neue", Arial, sans-serif'],
      'serif': ['"Cormorant Garamond", ui-serif, Georgia, "Times New Roman", Times, serif'],
    },
  },
  plugins: [
    'postcss-import',
  	require('@tailwindcss/typography'),
    'autoprefixer'
  ],
}
