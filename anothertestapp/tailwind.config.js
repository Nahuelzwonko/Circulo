/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.php",
  ],
  theme: {
    screens:{
      'sm':'320px',
      //medida de mas chico
      'md':'768px',
      //medida de mas 
      'lg':'1024px',
      //medida de mas 
      'xl':'1080px',
      // //medida de mas 
      '2xl':'1536px',
      //medida de mas 
    },
    extend: {
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
      animation: {
        wiggle: 'wiggle 1s ease-in-out infinite',
      }
    },
  },
  plugins: [],
}

