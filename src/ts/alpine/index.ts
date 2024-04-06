import Alpine from 'alpinejs'

import collapse from '@alpinejs/collapse'
import focus from '@alpinejs/focus'
import intersect from '@alpinejs/intersect'

Alpine.plugin(collapse)
Alpine.plugin(focus)
Alpine.plugin(intersect)

window.Alpine = Alpine

Alpine.start()
