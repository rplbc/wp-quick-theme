import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'

/* Init plugins */
Alpine.plugin(focus)

/* Add custom features */
import './features'

/* Start alpine */
window.Alpine = Alpine
Alpine.start()
