module.exports = {
  plugins: {
    'postcss-import': {},
    'postcss-url': {},
    'tailwindcss/nesting': 'postcss-nesting',
    tailwindcss: {},
    'postcss-preset-env': {
      features: { 'nesting-rules': false },
    },
    cssnano: {
      preset: 'default',
    },
  },
}
