module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue'
  ],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
      fontFamily: {
          'sans': ['Lato', 'BlickMacSystemFont', 'Helvectia Neue', 'Arial', 'sans-serif'],
      },
      extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
