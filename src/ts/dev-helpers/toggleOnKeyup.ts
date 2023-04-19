import { isVisible } from '../helpers'

export const toggleOnKeyup = (
  target: string,
  shortcut: (e: KeyboardEvent) => boolean
) => {
  const el = document.querySelector<HTMLElement>(target)

  if (!el) return

  const handleKeyup = (e: KeyboardEvent) => {
    if (shortcut(e)) {
      el.style.display = isVisible(el) ? 'none' : 'block'
    }
  }

  window.addEventListener('keyup', handleKeyup)
}
