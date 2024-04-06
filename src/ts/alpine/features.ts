import Alpine from 'alpinejs'

interface MobileNavStore {
  isOpen: boolean
  hide(): void
  show(): void
  toggle(): void
}

Alpine.store('mobileNav', {
  isOpen: false,
  hide() {
    this.isOpen = false
  },
  show() {
    this.isOpen = true
  },
  toggle() {
    if (this.isOpen) this.hide()
    else this.show()
  },
} satisfies MobileNavStore)
