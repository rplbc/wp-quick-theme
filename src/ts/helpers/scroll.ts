export const hideScrollbar = (hiddenClass = 'overflow-hidden') => {
  document.documentElement.style.overflow = 'hidden'
  document.body.classList.add(hiddenClass)
}

export const resetScroll = (hiddenClass = 'overflow-hidden') => {
  document.documentElement.style.overflow = ''
  document.body.classList.remove(hiddenClass)
}
