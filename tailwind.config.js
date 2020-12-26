const colors = require('tailwindcss/colors')

module.exports = {
  purge: {
    content: ['templates/**/*.twig']
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    colors: {
      blue: colors.lightBlue,
      gray: colors.trueGray
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
