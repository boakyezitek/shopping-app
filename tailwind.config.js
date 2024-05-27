/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
            poppins: ['Poppins']
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            'xxl': '1366px',
            '2xl': '1536px',
            '3xl': '1680px',
            '4xl': '1920px',
            '5xl': '2560px',
          },
          colors: {
            's-gray-200': '#f0f0f0',
            's-green-200': '#159954'
          }
      },
    },
    plugins: [],
  }
