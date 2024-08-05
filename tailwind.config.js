/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
        colors: {
            'main-blue' : '#007BFF',
            'dark-blue' : '#15193c',
            'secondary-dark-blue' : '#1E2139'
        }
    },
  },
  plugins: [],
}

