import { type WebpackOptionsNormalized } from 'webpack'

export const devServerConfig: Pick<WebpackOptionsNormalized, 'devServer'> = {
  devServer: {
    port: 3003,
    hot: true,
    watchFiles: [
      '*.php',
      'inc/**/*.php',
      'templates/**/*.php',
      'parts/**/*.php',
    ],
    allowedHosts: ['localhost', '.local'],
    headers: {
      'Access-Control-Allow-Origin': '*',
    },
  },
}
