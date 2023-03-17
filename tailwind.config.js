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
        primary: 'rgb(0,0,54)',
       
      },
    },
  },
  plugins: [],
}
