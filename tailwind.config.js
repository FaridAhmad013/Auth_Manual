const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            sky: colors.sky,
            'cool-gray': colors.coolGray,
        },

        container: {
            center: true,
            padding: '2rem',

        },
    },
  },
  variants: {
    extend: {
        ringWidth: ['hover', 'active'],
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
