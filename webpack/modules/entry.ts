import type { Configuration } from 'webpack'

export const entry: EntryConfig = (isDevServer = false) => {
  const commonEntries = {
    main: './src/ts/main.ts',
  }

  const prodEntries = {
    styles: './src/scss/main.scss',
    'editor-styles': './src/scss/editor.scss',
  }

  const devEntries = {
    dev: './src/ts/dev.ts',
  }

  return {
    ...commonEntries,
    ...(isDevServer ? devEntries : prodEntries),
  }
}

type EntryConfig = (dev?: boolean) => Configuration['entry']
