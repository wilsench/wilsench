/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
        colors: {
            'main-purple' : '#ff3fa4',
        }
    },
  },
  plugins: [],
}

