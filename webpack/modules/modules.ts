import { loader as miniCSSLoader } from 'mini-css-extract-plugin'
import type { Configuration } from 'webpack'

export const modules: ModuleConfig = (dev) => ({
  rules: [
    {
      test: /\.ts$/,
      exclude: /node_modules/,
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
    },
    {
      test: /\.scss$/,
      exclude: /node_modules/,
      use: [
        dev ? 'style-loader' : miniCSSLoader,
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
})

type ModuleConfig = (dev?: boolean) => Configuration['module']
