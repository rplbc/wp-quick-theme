import ESLintPlugin from 'eslint-webpack-plugin'
import FileManagerPlugin from 'filemanager-webpack-plugin'
import MiniCssExtractPlugin from 'mini-css-extract-plugin'
import StylelintPlugin from 'stylelint-webpack-plugin'
import { type Configuration } from 'webpack'
import RemoveEmptyScriptsPlugin from 'webpack-remove-empty-scripts'

export const pluginsConfig = (
  isDevServer: boolean,
  cleanCopy: boolean,
  cleanCopyPath: string
): Pick<Configuration, 'plugins'> => {
  /**
   * Export files
   */
  const ccPlugin = cleanCopy
    ? [
        new FileManagerPlugin({
          events: {
            onEnd: {
              copy: [
                { source: '*.php', destination: cleanCopyPath },
                { source: 'inc', destination: `${cleanCopyPath}/inc` },
                { source: 'dist', destination: `${cleanCopyPath}/dist` },
                { source: 'parts', destination: `${cleanCopyPath}/parts` },
                {
                  source: 'templates',
                  destination: `${cleanCopyPath}/templates`,
                },
                {
                  source: 'style.css',
                  destination: `${cleanCopyPath}/style.css`,
                },
                // { source: 'screenshot.png', destination: `${cleanPath}/screenshot.png` },
              ],
            },
          },
        }),
      ]
    : []

  /**
   * Not neccessary with dev server
   */
  const minicss = !isDevServer
    ? [
        new RemoveEmptyScriptsPlugin({}),
        new MiniCssExtractPlugin({
          filename: 'css/[name].css',
        }),
      ]
    : [
        new MiniCssExtractPlugin({
          filename: 'css/[name].css',
        }),
      ]

  return {
    plugins: [
      ...ccPlugin,
      ...minicss,
      new ESLintPlugin({
        extensions: ['ts'],
      }),
      new StylelintPlugin(),
    ],
  }
}
