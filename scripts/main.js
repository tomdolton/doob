import { Nav } from "./nav.js";
import { GalleryCarousel } from "./GalleryCarousel.js"


Nav.init();
GalleryCarousel.init();

var blogSwiper = new Swiper('.swiper--blog', {
  // Options
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    900: {
      slidesPerView: 2,
      // spaceBetween: 68,
      spaceBetween: 16,
    },
    1220: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
    1248: {
      slidesPerView: 3,
      spaceBetween: 60,
    }
  }

});

var companySlider = new Swiper('.swiper--company', {
  // Options
  slidesPerView: 1,
  spaceBetween: 32,
  grabCursor: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next--company',
    prevEl: '.swiper-button-prev--company',
  },

  breakpoints: {
    768: {
      grabCursor: false,
    },

  }
});