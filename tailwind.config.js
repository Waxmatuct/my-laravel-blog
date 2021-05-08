module.exports = {

  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',

  ],
  darkMode: 'class', // or 'media' or 'class'

  theme: {
    extend: {},

    fontFamily: {
      sans: ['Roboto', 'sans-serif'],
      serif: ['Noto Serif', 'serif'],
      mono: ['monospace'],
    },

    colors: {
      
      current: 'currentColor',
      
      dark: {
          DEFAULT: '#1c1c28',
          lighter: '#23243a', //#28293d
          gray: '#777',
        },
      
      light: {
        DEFAULT: '#f6f6f6',
        white: '#ffffff',
        gray: '#e9e9e9',
      },

      'black': '#222',
      'gray': '#a8a8a8',
      'darkest-purple': '#171826', 
      
      blue: {
          DEFAULT:'#539bf5',
          darker: '#3f6798',
      },

      'primary': {
          DEFAULT: '#5dd99f',//#98c376
          darker: '#059669',
      },
      
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
