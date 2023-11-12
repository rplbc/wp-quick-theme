export const swiperSlideTemplate = (src: string) => `
<div class="swiper-slide h-full [&_img]:h-full [&_img]:w-full [&_img]:object-contain [&_img]:object-center">
    <img src="${src}" />
</div>`

export const galleryBlockTemplate = (children: string = '') => `
<div class="qb-gallery z-gallery fixed inset-0 bg-black bg-opacity-75 backdrop-blur">
    <div class="swiper h-full p-4">
        <div class="swiper-wrapper h-full">
            ${children}
        </div>
    </div>
    <button data-close="" type="button" class="absolute right-0 top-0 z-10 text-white text-2xl">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144m224 0L144 368"></path>
        </svg>
    </button>
</div>`
