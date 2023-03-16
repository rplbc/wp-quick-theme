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
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          isDevServer ? 'style-loader' : miniCSSLoader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(woff(2)?|ttf|svg)$/,
        type: 'asset/resource',
        generator: {
          filename: './fonts/[name][ext]',
        },
      },
    ],
  },
})
