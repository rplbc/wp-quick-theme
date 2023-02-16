import { type Configuration } from 'webpack'

export const devServerConfig: Pick<Configuration, 'devServer'> = {
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
