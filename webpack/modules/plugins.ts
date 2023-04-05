import ESLintPlugin from 'eslint-webpack-plugin'
import FileManagerPlugin from 'filemanager-webpack-plugin'
import MiniCssExtractPlugin from 'mini-css-extract-plugin'
import StylelintPlugin from 'stylelint-webpack-plugin'
import RemoveEmptyScriptsPlugin from 'webpack-remove-empty-scripts'

import type { Configuration } from 'webpack'

export const plugins: PluginsConfig = (dev, exportDir) => {
  const exportFiles = (dir: string) => [
    new FileManagerPlugin({
      events: {
        onStart: {
          delete: [dir],
        },
        onEnd: {
          copy: [
            { source: '*.{php,css}|theme.json', destination: dir },
            { source: 'dist', destination: `${dir}/dist` },
            { source: 'inc', destination: `${dir}/inc` },
            { source: 'parts', destination: `${dir}/parts` },
            {
              source: 'templates',
              destination: `${dir}/templates`,
            },
          ],
        },
      },
    }),
  ]

  const extractCSS = [
    new RemoveEmptyScriptsPlugin({}),
    new MiniCssExtractPlugin({
      filename: 'css/[name].css',
    }),
  ]

  return [
    ...(exportDir ? exportFiles(exportDir) : []),
    ...(!dev ? extractCSS : []),
    new ESLintPlugin({
      extensions: ['ts'],
    }),
    new StylelintPlugin(),
  ]
}

type PluginsConfig = (dev?: boolean, dir?: string) => Configuration['plugins']
