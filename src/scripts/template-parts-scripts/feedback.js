// add swiper
new Swiper(".fb-slider", {
  // direction: "horizontal",
  navigation: {
    nextEl: ".fb__arrow-next",
    prevEl: ".fb__arrow-prev",
  },
  enabled: true,
  loop: true,
  autoHeight: false,
  watchOverflow: true,
  pagination: {
    el: ".fb__pagination",
    clickable: true,
  },
  loopedSlidesLimit: false,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1300: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1920: {
      slidesPerView: 4,
      spaceBetween: 30,
      centerInsufficientSlides: true,
    },
  },
});
