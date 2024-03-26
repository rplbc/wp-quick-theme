import ESLintPlugin from 'eslint-webpack-plugin'
import FileManagerPlugin from 'filemanager-webpack-plugin'
import MiniCssExtractPlugin, {
  loader as miniCSSLoader,
} from 'mini-css-extract-plugin'
import path from 'path'
import type { Configuration } from 'webpack'
import 'webpack-dev-server'
import RemoveEmptyScriptsPlugin from 'webpack-remove-empty-scripts'
import config from './quick.config'

export default function (env = { WEBPACK_SERVE: false }): Configuration {
  const { WEBPACK_SERVE: isDev = false } = env

  return {
    entry: {
      main: './src/ts/main.ts',
      ...(isDev
        ? {
            dev: './src/ts/dev.ts',
          }
        : {
            styles: './src/css/main.css',
            'editor-styles': './src/css/editor.css',
          }),
    },
    output: {
      filename: 'js/[name].js',
      path: path.resolve(__dirname, config.distDir),
      clean: true,
    },
    resolve: {
      extensions: ['.ts', '...'],
    },
    mode: isDev ? 'development' : 'production',
    devtool: false,
    devServer: {
      port: config.devServerPort,
      hot: true,
      watchFiles: [
        'inc/**/*.php',
        'blocks/**/*.php',
        'parts/**/*.php',
        'templates/**/*.php',
        '*.php',
      ],
      allowedHosts: ['localhost', '.local'],
      headers: {
        'Access-Control-Allow-Origin': '*',
      },
    },
    module: {
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
          test: /\.css$/,
          exclude: /node_modules/,
          use: [
            isDev ? 'style-loader' : miniCSSLoader,
            'css-loader',
            'postcss-loader',
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
    plugins: [
      ...(!isDev
        ? [
            new FileManagerPlugin({
              events: {
                onStart: {
                  delete: [config.exportDir],
                },
                onEnd: {
                  copy: [
                    {
                      source: '*.{php,css}|theme.json',
                      destination: config.exportDir,
                    },
                    ...config.dirsToExport.map((name) => ({
                      source: name,
                      destination: `${config.exportDir}/${name}`,
                    })),
                  ],
                  delete: [`${config.exportDir}/inc/dev-setup.php`],
                },
              },
            }),
            new RemoveEmptyScriptsPlugin({}),
            new MiniCssExtractPlugin({
              filename: 'css/[name].css',
            }),
          ]
        : []),
      new ESLintPlugin({
        extensions: ['ts'],
      }),
    ],
    cache: {
      type: 'filesystem',
    },
    optimization: {
      runtimeChunk: isDev ? 'single' : undefined,
    },
  }
}
