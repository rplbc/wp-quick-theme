import '../scss/dev-helpers.scss'
import '../scss/main.scss'

import { isVisible } from './helpers'

const toggleOnKeyup = (
  target: string,
  shortcut: (e: KeyboardEvent) => boolean
) => {
  const el = document.querySelector<HTMLElement>(target)

  if (!el) return

  const handleKeyup = (e: KeyboardEvent) => {
    if (shortcut(e)) {
      const display = isVisible(el) ? 'none' : 'block'
      el.style.display = display
      localStorage.setItem(target, display)
    }
  }

  el.style.display = localStorage.getItem(target) ?? 'none'
  window.addEventListener('keyup', handleKeyup)
}

toggleOnKeyup('.dev-acf-preview', (e) => e.ctrlKey && e.key === '{')
toggleOnKeyup('.dev-floating-grid', (e) => e.ctrlKey && e.key === '}')
