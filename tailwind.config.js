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
    extend: {
      zIndex: {
        'site-header': 'var(--zIndex-header)',
      },
    },
    height: {
      'site-header-bar': 'var(--headerHeight)',
    },
  },
  plugins: [],
}
