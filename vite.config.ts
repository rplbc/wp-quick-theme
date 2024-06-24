import { defineConfig } from 'vite'

export default defineConfig({
  build: {
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: 'src/ts/main.ts',
    },
  },
})
