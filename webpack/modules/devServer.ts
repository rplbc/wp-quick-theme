import type { Configuration } from 'webpack'

export const devServer: DevServerConfig = (port) => ({
  port,
  hot: true,
  watchFiles: ['inc/**/*.php', 'parts/**/*.php', 'templates/**/*.php', '*.php'],
  allowedHosts: ['localhost', '.local', '.wp'],
  headers: {
    'Access-Control-Allow-Origin': '*',
  },
})

type DevServerConfig = (port: number) => Configuration['devServer']
