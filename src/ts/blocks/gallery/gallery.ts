import Swiper from 'swiper'
import { Keyboard } from 'swiper/modules'

import { setBodyScroll } from '../../utils'
import { swiperSlideTemplate, galleryBlockTemplate } from './templates'

export default class GalleryBlock {
  public $el!: HTMLElement
  public isAnimating
  public images!: HTMLImageElement[]

  constructor(element: HTMLElement) {
    this.$el = element
    this.isAnimating = false
    this.images = [
      ...this.$el.querySelectorAll<HTMLImageElement>('img[data-index]'),
    ]

    this.$el.addEventListener('click', (e) => {
      if (
        e.target instanceof HTMLImageElement &&
        this.images.includes(e.target)
      ) {
        const n = e.target.getAttribute('data-index')
        if (n) this.init(+n)
      }
    })
  }

  private init(initialSlide = 0) {
    if (this.isAnimating) return
    this.isAnimating = true

    const el = document.querySelector<HTMLElement>('.qb-gallery')

    if (el) {
      this.close(el)
    } else {
      this.open(initialSlide)
    }
  }

  private open(initialSlide: number) {
    setBodyScroll(false)
    let is = ''

    this.images.forEach((img) => {
      is += swiperSlideTemplate(img.src)
    })

    document.body.insertAdjacentHTML('beforeend', galleryBlockTemplate(is))

    const item = document.querySelector<HTMLElement>('.qb-gallery')!
    new Swiper(item.querySelector<HTMLElement>('.swiper')!, {
      modules: [Keyboard],
      keyboard: true,
      initialSlide,
    })

    const anim = item.animate([{ opacity: 0 }, { opacity: 1 }])

    anim.onfinish = () => {
      this.isAnimating = false
    }

    const onClose = (e: KeyboardEvent) => {
      if (e.key === 'Escape') this.close(item)
    }

    window.addEventListener('keydown', onClose)
    item.querySelectorAll<HTMLElement>('[data-close]').forEach((el) => {
      el.addEventListener('click', () => {
        this.close(item)
      })
    })
  }

  private close(el: HTMLElement) {
    const anim = el.animate([{ opacity: 0 }])

    anim.onfinish = () => {
      el.remove()
      setBodyScroll(true)
      this.isAnimating = false
    }
  }
}
