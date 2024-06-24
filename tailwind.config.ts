import { Config } from 'tailwindcss'

export default {
  content: [
    './*.php',
    './inc/**/*.php',
    './parts/**/*.php',
    './src/ts/**/*.ts',
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {},
  },
} satisfies Config
