// add swiper
new Swiper(".fb-slider", {
  loop: true,
  autoHeight: false,
  watchOverflow: true,

  pagination: {
    el: ".sw-pagination",
    clickable: true,
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});
