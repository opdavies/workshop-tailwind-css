module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      display: ['Bebas Neue', 'Arial Narrow', 'Arial', 'sans-serif'],
      sans: ['Helvetica', 'Arial', 'sans-serif'],
    },
    colors: {
      blue: {
        DEFAULT: '#56a9db',
        dark: '#1772ae',
      },
      bronze: '#998100',
      gold: '#e6c200',
      gray: {
        light: '#fafafa',
        dark: '#333333',
      },
      orange: '#fcb040',
      platinum: '#666666',
      silver: '#999999',
      white: '#ffffff',
    },
    extend: {
      fontSize: {
        '2xl': '1.5625rem', // 25px
        '3xl': '1.6875rem', // 27px
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
