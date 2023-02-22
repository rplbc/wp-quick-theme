if (module.hot) module.hot.accept()

import { addACFHelper } from './dev-helpers/toggleFields'
import '../scss/dev-helpers.scss'
import '../scss/main.scss'

addACFHelper()
