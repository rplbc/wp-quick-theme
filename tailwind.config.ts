import { Config } from 'tailwindcss'

export default {
  content: [
    './*.php',
    './blocks/**/*.php',
    './inc/**/*.php',
    './parts/**/*.php',
    './src/ts/**/*.ts',
    './templates/**/*.php',
  ],
  theme: {
    container: {
      center: true,
    },
    fontFamily: {
      sans: ['"Inter Variable"', 'sans-serif'],
    },
    extend: {},
  },
} satisfies Config
