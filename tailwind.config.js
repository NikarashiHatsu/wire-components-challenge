/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./app/Enums/**/*.php",
    "./app/Livewire/**/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'display': ['EB Garamond',],
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}

