module.exports = {

  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',

  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},

    fontFamily: {
      sans: ['Roboto', 'sans-serif'],
      serif: ['Noto Serif', 'serif'],
    },

    colors: {
      
      current: 'currentColor',
      
      dark: {
          DEFAULT: '#1c1c28',
          lighter: '#28293d',
        },
      
      blue: {
          DEFAULT:'#539bf5',
          darker: '#3f6798',
      },

      'green': {
          DEFAULT: '#5dd99f',//#98c376
          darker: '#4fae85',
      },
      
      'gray': '#a8a8a8',
      'light-gray': '#e9e9e9',

    },

    borderWidth: {
      DEFAULT: '1px',
          '0': '0',
          '2': '2px',
          '3': '3px',
          '4': '4px',
          '5': '5px',
          '6': '6px',
          '7': '7px',
          '8': '8px',
    },
    
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
