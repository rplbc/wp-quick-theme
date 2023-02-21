import { hideScrollbar, resetScroll, isVisible } from '../helpers'

export const addACFHelper = (target = '.acf-preview') => {
  const wrapper = document.querySelector<HTMLDivElement>(target)

  if (!wrapper) return

  const toggle = (visible: boolean) => {
    if (visible) {
      wrapper.style.display = 'none'
      resetScroll()
    } else {
      wrapper.style.display = 'block'
      hideScrollbar()
    }
  }

  const handleKeyup = (e: KeyboardEvent) => {
    if (e.ctrlKey && e.key === '`') {
      toggle(isVisible(wrapper))
    }
  }

  window.addEventListener('keyup', handleKeyup)
}
