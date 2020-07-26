// -----------------------------------------------------------------------------
// Gallery carousel 
// -----------------------------------------------------------------------------

// Uses Swiper.js for carousel functionality
// DOM in manipulated based on window size to change arrangement of images in slides


const GalleryCarousel = {

  carouselHTML: "",
  setWidth: "",
  changeSize: false,

  init: function () {
    this.cacheDOM();
    this.bindEvents();
    this.checkWindowSize();
  },

  cacheDOM: function () {
    this.carouselContainer = document.querySelector(".swiper--gallery");
  },

  bindEvents: function () {
    window.addEventListener("resize", this.checkWindowSize.bind(this));
  },

  checkWindowSize: function () {
    const windowWidth = window.innerWidth;

    if (windowWidth < 768 && this.setWidth !== "small") {
      this.setWidth = "small";
      this.changeSize = true;
      this.carouselHTML = `
      <div class="gallery__carousel swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?creative" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?project" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?make" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?website" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?tech" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?design" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?graphics" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?patterns" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?illustrations" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?work" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?art" alt="Project name" class="gallery__image" />
        </div>
        <div class="swiper-slide">
          <img src="https://source.unsplash.com/369x279/?create" alt="Project name" class="gallery__image" />
        </div>
      </div>
    `;
    } else if (windowWidth < 1024 && windowWidth >= 768 && this.setWidth !== "medium") {
      this.setWidth = "medium";
      this.changeSize = true;
      this.carouselHTML = `
    <div class="gallery__carousel swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://source.unsplash.com/369x279/?creative" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?project" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?make" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?website" alt="Project name" class="gallery__image" />
      </div>
      <div class="swiper-slide">
        <img src="https://source.unsplash.com/369x279/?tech" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?design" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?graphics" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?patterns" alt="Project name" class="gallery__image" />
      </div>
      <div class="swiper-slide">
        <img src="https://source.unsplash.com/369x279/?illustrations" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?work" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?art" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?create" alt="Project name" class="gallery__image" />
      </div>
    </div>
    `;
    } else if (windowWidth >= 1024 && this.setWidth !== "large") {
      this.setWidth = "large";
      this.changeSize = true;
      this.carouselHTML = `
    <div class="gallery__carousel swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://source.unsplash.com/369x279/?creative" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?project" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?make" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?website" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?tech" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?design" alt="Project name" class="gallery__image" />
      </div>
      <div class="swiper-slide">
        <img src="https://source.unsplash.com/369x279/?graphics" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?patterns" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?illustrations" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?work" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?art" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?create" alt="Project name" class="gallery__image" />
      </div>
    </div>
    `;
    }

    if (this.changeSize === true) {
      this.renderCarouselHTML();
      this.changeSize = false;
    }
  },

  renderCarouselHTML: function () {
    this.carouselContainer.innerHTML = this.carouselHTML;
    // Init Swiper
    const gallerySwiper = new Swiper('.swiper--gallery', {
      // Options
      slidesPerView: 1,
      spaceBetween: 10,
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next--gallery',
        prevEl: '.swiper-button-prev--gallery',
      },
    })
  }
}

export { GalleryCarousel };