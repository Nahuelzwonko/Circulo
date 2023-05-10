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
      'xl':'1024px',
      //medida de mas 
      'xxl':'1536px',
      //medida de mas 
    },
    extend: {},
  },
  plugins: [],
}

