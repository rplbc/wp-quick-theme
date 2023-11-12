const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './blocks/**/*.php',
    './inc/**/*.php',
    './parts/**/*.php',
    './src/ts/**/*.ts',
    './templates/**/*.php',
  ],
  theme: {
    fontFamily: {
      sans: ['"Inter Variable"', 'sans-serif'],
    },
    extend: {
      zIndex: {
        'site-header': 51,
        gallery: 52,
      },
      transitionDuration: {
        DEFAULT: '300ms',
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
