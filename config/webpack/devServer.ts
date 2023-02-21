import { type WebpackOptionsNormalized } from 'webpack'

export const devServerConfig: Pick<WebpackOptionsNormalized, 'devServer'> = {
  devServer: {
    port: 3003,
    hot: true,
    watchFiles: ['*.php'],
    allowedHosts: ['localhost', '.local'],
    headers: {
      'Access-Control-Allow-Origin': '*',
    },
  },
}
