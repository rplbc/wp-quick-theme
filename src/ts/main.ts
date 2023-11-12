import { GalleryBlock } from './blocks'

document
  .querySelectorAll<HTMLElement>('[data-block="gallery"]')
  .forEach((el) => {
    new GalleryBlock(el)
  })
