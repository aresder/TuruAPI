/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "node_modules/preline/dist/*.js",
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        'primary': '#4f46e5',
        'secondary': '#1e293b',
        'gradiant': '#889aff3f',
        'hover': '#3730a3',
        'active': '#312e81',
        'instagram': '#E4405F',
        'facebook': '#1877F2',
        'X': '#000000',
        'tiktok': '#ff0000'
      }
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}


