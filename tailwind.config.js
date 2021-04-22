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
      serif: ['Merriweather', 'serif'],
    },

    colors: {
      
      current: 'currentColor',
      
      dark: {
          DEFAULT: '#22272e',
          lighter: '#2d333b',
        },
      
      blue: {
          DEFAULT:'#539bf5',
          darker: '#3f6798',
      },

      'green': '#98c376',
      'gray': '#a8a8a8',
      'light-gray': '#e9e9e9',
      'telegram': '#0088cc',
      'twitter': '#1da1f2',
      'facebook': '#3b5998',
      'insta': '#e1306c',

    },

    borderWidth: {
      DEFAULT: '1px',
          '0': '0',
          '2': '2px',
          '3': '3px',
          '4': '4px',
          '6': '6px',
          '8': '8px',
    },
    
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
