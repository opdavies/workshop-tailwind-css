const colors = require('tailwindcss/colors')

module.exports = {
  purge: {
    content: ['templates/**/*.twig']
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        display: ['Bebas Neue', 'Arial Narrow', 'Arial', 'sans-serif'],
        sans: ['Helvetica', 'Arial', 'sans-serif']
      },
      screens: {
        sm: '700px'
      }
    },
    colors: {
      'hit-pink': '#FBA786',
      blue: colors.lightBlue,
      dandelion: '#FFDC67',
      gray: colors.trueGray,
      white: '#ffffff'
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
