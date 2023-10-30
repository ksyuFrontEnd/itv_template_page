// add swiper
new Swiper(".fb-slider", {
  direction: "horizontal",
  slidesPerView: 3,
  spaceBetween: 24,
  navigation: {
    nextEl: ".fb__arrow-next",
    prevEl: ".fb__arrow-prev",
  },

  loop: true,
  watchOverflow: true,
  pagination: {
    el: ".fb__pagination",
    clickable: true,
  },
  // enabled: false,
  autoHeight: false,
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      enabled: true,
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
      enabled: true,
    },
    1920: {
      slidesPerView: 4,
      enabled: true,
    },
  },
});
