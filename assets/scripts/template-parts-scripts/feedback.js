new Swiper(".fb-slider",{direction:"horizontal",slidesPerView:3,spaceBetween:30,navigation:{nextEl:".fb__arrow-next",prevEl:".fb__arrow-prev"},loop:!0,watchOverflow:!0,centerInsufficientSlides:!0,pagination:{el:".fb__pagination",clickable:!0},autoHeight:!1,breakpoints:{0:{slidesPerView:1},768:{enabled:!0,slidesPerView:2},992:{slidesPerView:3,enabled:!0},1920:{slidesPerView:4,enabled:!0,spaceBetween:30}}});