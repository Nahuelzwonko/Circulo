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
      //dispositivos pequeños y medianos: celulares, tablets.
      'sm':'320px',
      'md':'768px',
      //dispositivos grandes: notebook, monitores, tvs.
      'lg':'1024px',
      'xl':'1080px',
      '2xl':'1536px',
    },
    extend: {
      fontFamily: {
        //fuente principal
        custom: ['MiFuentePersonalizada', 'sans-serif'],
        //fuente secundaria
        Poppins:['Poppins', 'sans-serif'],
        //titulos
        hammersmith:['Hammersmith One', 'sans-serif'],
        monserrat:['Montserrat', 'sans-serif']
      },
      animation: {
        wiggle: 'wiggle 1s ease-in-out infinite',
      },
      backgroundImage:{
        'hero-bg': "url('/public/storage/fondo/hero-bg.svg')",
        'dash-head': "url('/public/storage/png/dash-head.svg')",
        'dash-head-resp': "url('/public/storage/png/dash-head-responsive.svg')",
        'dash-bg': "url('/public/storage/png/dash-bg.png')",
        'dash-bg-resp': "url('/public/storage/png/dash-bg-resp.svg')"
      },
      display: ['group-focus'],
      opacity: ['group-focus'],
      inset: ['group-focus']
    },
    
  },
  plugins: [
    require('flowbite/plugin')
  ],
  
}

