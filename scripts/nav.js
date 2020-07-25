// -----------------------------------------------------------------------------
// Mobile dropdown nav
// -----------------------------------------------------------------------------

const Nav = {

  init: function () {
    this.cacheDOM();
    this.bindEvents();
  },

  cacheDOM: function () {
    this.hamburger = document.querySelector(".hamburger");
    this.mobileNav = document.querySelector(".navbar__inner");
  },

  bindEvents: function () {
    this.hamburger.addEventListener("click", this.toggleNav.bind(this));
    window.addEventListener("scroll", this.closeNav.bind(this));
    window.addEventListener("resize", this.closeNav.bind(this));
  },

  toggleNav: function () {
    this.mobileNav.classList.toggle("navbar__inner--active");
    this.hamburger.classList.toggle("hamburger--active");
  },

  closeNav: function () {
    this.mobileNav.classList.remove("navbar__inner--active");
    this.hamburger.classList.remove("hamburger--active");

  }
};


export { Nav };