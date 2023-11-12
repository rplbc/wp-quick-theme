export const setBodyScroll = (visible = false) => {
  if (visible) {
    document.body.style.overflow = ''
  } else {
    document.body.style.overflow = 'hidden'
  }
}
