import path from 'path'
import type { Configuration } from 'webpack'
import 'webpack-dev-server'
import * as cfg from './webpack'

const BUILD_DIR = 'dist'
const EXPORT_DIR = '.quick'
const DEVSERVER_PORT = 3003

const webpackConfig: WebpackConfig = (env) => {
  const { WEBPACK_WATCH, WEBPACK_SERVE, WEBPACK_BUILD } = env || {}

  return {
    entry: cfg.entry(WEBPACK_SERVE),
    output: {
      filename: 'js/[name].js',
      path: path.join(__dirname, BUILD_DIR),
      clean: true,
    },
    resolve: {
      extensions: ['.ts', '...'],
    },
    mode: WEBPACK_SERVE || WEBPACK_WATCH ? 'development' : 'production',
    devtool: WEBPACK_SERVE || WEBPACK_WATCH ? false : 'source-map',
    devServer: cfg.devServer(DEVSERVER_PORT),
    module: cfg.modules(WEBPACK_SERVE),
    plugins: cfg.plugins(
      WEBPACK_SERVE,
      WEBPACK_BUILD ? path.join(__dirname, EXPORT_DIR) : undefined
    ),
    cache: {
      type: 'filesystem',
    },
  }
}

type WebpackConfig = (env: {
  WEBPACK_WATCH?: true
  WEBPACK_SERVE?: true
  WEBPACK_BUILD?: true
}) => Configuration

export default webpackConfig
