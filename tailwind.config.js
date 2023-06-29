const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './inc/**/*.php',
    './parts/**/*.php',
    './src/ts/**/*.ts',
    './templates/**/*.php',
    './*.php',
  ],
  theme: {
    fontFamily: {
      'font-sans': ['"Inter Variable"', 'sans-serif'],
    },
    extend: {
      zIndex: {
        'site-header': 99,
        'skip-to-content': 9999999,
      },
      height: {
        'site-header-bar': 'var(--headerHeight)',
      },
    },
  },
  plugins: [
    plugin(function ({ addComponents }) {
      addComponents({
        '.layout-grid': {
          '@apply grid grid-cols-6 gap-x-[--gutter] lg:grid-cols-12': {},
        },
      })
    }),
  ],
}
