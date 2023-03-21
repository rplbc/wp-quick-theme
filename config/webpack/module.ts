import { loader as miniCSSLoader } from 'mini-css-extract-plugin'
import { type Configuration } from 'webpack'

export const moduleConfig = (
  isDevServer: boolean
): Pick<Configuration, 'module'> => ({
  module: {
    rules: [
      {
        test: /\.ts$/,
        use: {
          loader: 'swc-loader',
          options: {
            jsc: {
              parser: {
                syntax: 'typescript',
                tsx: false,
              },
            },
          },
        },
        exclude: /(node_modules|bower_components)/,
      },
      {
        test: /(editor)\.scss$/,
        exclude: /node_modules/,
        use: [miniCSSLoader, 'css-loader', 'postcss-loader', 'sass-loader'],
      },
      {
        test: /(?<!editor)\.scss$/,
        exclude: /node_modules/,
        use: [
          isDevServer ? 'style-loader' : miniCSSLoader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(woff|woff2)$/,
        type: 'asset',
        generator: {
          filename: './fonts/[name][ext]',
        },
      },
    ],
  },
})
