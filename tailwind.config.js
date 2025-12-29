/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#FF0000',
        secondary: '#1a1a1a',
        accent: '#FFD700',
      },
    },
  },
  plugins: [],
}