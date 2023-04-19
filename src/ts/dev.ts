if (module.hot) module.hot.accept()

import { toggleOnKeyup } from './dev-helpers/toggleOnKeyup'

import '../scss/dev-helpers.scss'
import '../scss/main.scss'

toggleOnKeyup('.dev-acf-preview', (e) => e.ctrlKey && e.key === '{')
toggleOnKeyup('.dev-floating-grid', (e) => e.ctrlKey && e.key === '}')
