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
          DEFAULT: '#111827', //#1c1c28
          lighter: '#161e2d', //#23243a
          gray: '#777',
        },
      
      light: {
        DEFAULT: '#ffffff',
        white: '#f9f9fa',
        gray: '#e9e9e9',
      },

      'black': '#374151',
      'gray': '#9ca3af',
      'gray-900': '#1f2937', 
    
      'primary': {
          DEFAULT: '#0ba057',//#98c376
          darker: '#48bb78',
      },
      
    },
// 
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
