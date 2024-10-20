/** @type {import('tailwindcss').Config} */
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors:{
        colorblack: 'rgb(33,33,33)',
        colorlightblack: 'rgb(55,55,55)',
        colorlightgray: 'rgb(125,125,125)',
      }
    },
  },
  plugins: [],
}