import { isVisible } from '../helpers'

export const toggleOnKeyup = (
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
