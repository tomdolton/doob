<?php
// Database connection
include('config/db_connect.php');

// Handle form submission. Validatates and saves to database
include('handle_form.php');

?>




<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<main>
  <section class="hero container">
    <div class="hero__inner">
      <div class="hero__textbox">
        <h1 class="hero__title">The Spirit of Digital Agency.</h1>
        <p class="hero__copy">
          Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
          Nulla porttitor accumsan tincidunt.
        </p>
        <div class="hero__links">
          <a class="btn">More About us</a>
          <a href="#contact" class="btn btn--secondary">Get in Touch.</a>
        </div>
      </div>
      <img class="hero__image" src="./images/illustration-1.png" alt=""></img>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="services__textbox">
        <h3 class="services__title">
          Anything you need, we've got you covered
        </h3>
        <a href="#contact" class="services__btn btn btn--small">Get in Touch</a>
      </div>
      <div class="services__card card">
        <img src="./images/icon-design.png" alt="" class="card__image" />
        <h4 class="card__title">Web & Graphic Design</h4>
        <p class="card__copy">
          Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
          Nulla porttitor accumsan tincidunt.
        </p>
      </div>
      <div class="services__card card">
        <img src="./images/icon-design.png" alt="" class="card__image" />
        <h4 class="card__title">Web & App Development</h4>
        <p class="card__copy">
          Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
          Nulla porttitor accumsan tincidunt.
        </p>
      </div>
    </div>
  </section>

  <section class="company">
    <div class="company__inner container">
      <div class="company__textbox">
        <h2 class="company__title">Our Company</h2>
        <div class="swiper-container swiper--company">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <h3 class="company__subtitle">Some Fine <br /> Words About Us</h3>
              <p class="company__copy">
                Vestibulum ac diam sit amet quam vehicula elementum amet est on
                dui. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit
                amet. <br /> Quam vehicula elementum amet est on dui. Nulla porttitor
                accumsan tincidunt.
              </p>
            </div>
            <div class="swiper-slide">
              <h3 class="company__subtitle">Some More Fine <br /> Words About Us</h3>
              <p class="company__copy">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                et blandit tellus. In at nibh dolor. Fusce quis imperdiet quam,
                non convallis lacus. <br /> Nullam bibendum lobortis nunc, nec eleifend
                ex consectetur quis. Quisque lacinia risus nulla.
                Pellentesque dapibus.
              </p>
            </div>
            <div class="swiper-slide">
              <h3 class="company__subtitle">Some Other <br /> Words About Us</h3>
              <p class="company__copy">
                Aliquam consectetur interdum finibus. Mauris massa erat, ornare
                eget mauris in, aliquam commodo urna. Suspendisse in purus elit. <br />
                Mauris feugiat magna eu ultrices dapibus. Etiam porttitor et quam
                euismod finibus. Nunc a ex urna.
              </p>
            </div>
          </div>
          <div class="swiper-button-prev swiper-button-prev--company"></div>
          <div class="swiper-button-next swiper-button-next--company"></div>
        </div>
      </div>
      <img src="./images/illustration-2.png" alt="" class="company__image" />
    </div>
  </section>

  <section class="gallery">
    <div class="container">
      <h3 class="gallery__title">See some of our Creative work.</h3>
      <div class="swiper-container swiper--gallery"></div>
      <div class="swiper-button-prev swiper-button-prev--gallery"></div>
      <div class="swiper-button-next swiper-button-next--gallery"></div>
      <a href="#" class="gallery__link link--animated">See More of These.</a>
    </div>
  </section>

  <section class="blog">
    <div class="container swiper-container swiper--blog">
      <h2 class="blog__title">Blog Stories</h2>
      <h3 class="blog__subtitle">Check Our News</h3>
      <div class="blog__cards-carousel swiper-wrapper">
        <div class="swiper-slide">
          <div class="blog__card card card--link clearfix">
            <h5 class="card__title--small">New Adventure 1</h5>
            <p class="card__date">17 March 2019</p>
            <p class="card--link__copy">
              Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
              Nulla porttitor accumsan tincidunt.
            </p>
            <svg class="card__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="19px">
              <path fill-rule="evenodd" fill="rgb(255, 57, 70)" d="M21.230,0.919 L19.816,2.334 L26.109,8.627 L0.885,8.627 L0.885,10.627 L25.820,10.627 L19.529,16.920 L20.943,18.335 L29.797,9.482 L21.230,0.919 Z" />
            </svg>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="blog__card card card--link clearfix">
            <h5 class="card__title--small">New Adventure 2</h5>
            <p class="card__date">17 March 2019</p>
            <p class="card--link__copy">
              Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
              Nulla porttitor accumsan tincidunt.
            </p>
            <svg class="card__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="19px">
              <path fill-rule="evenodd" fill="rgb(255, 57, 70)" d="M21.230,0.919 L19.816,2.334 L26.109,8.627 L0.885,8.627 L0.885,10.627 L25.820,10.627 L19.529,16.920 L20.943,18.335 L29.797,9.482 L21.230,0.919 Z" />
            </svg>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="blog__card card card--link clearfix">
            <h5 class="card__title--small">New Adventure 3</h5>
            <p class="card__date">17 March 2019</p>
            <p class="card--link__copy">
              Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
              Nulla porttitor accumsan tincidunt.
            </p>
            <svg class="card__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="19px">
              <path fill-rule="evenodd" fill="rgb(255, 57, 70)" d="M21.230,0.919 L19.816,2.334 L26.109,8.627 L0.885,8.627 L0.885,10.627 L25.820,10.627 L19.529,16.920 L20.943,18.335 L29.797,9.482 L21.230,0.919 Z" />
            </svg>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="blog__card card card--link clearfix">
            <h5 class="card__title--small">New Adventure 4</h5>
            <p class="card__date">17 March 2019</p>
            <p class="card--link__copy">
              Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
              Nulla porttitor accumsan tincidunt.
            </p>
            <svg class="card__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="19px">
              <path fill-rule="evenodd" fill="rgb(255, 57, 70)" d="M21.230,0.919 L19.816,2.334 L26.109,8.627 L0.885,8.627 L0.885,10.627 L25.820,10.627 L19.529,16.920 L20.943,18.335 L29.797,9.482 L21.230,0.919 Z" />
            </svg>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="blog__card card card--link clearfix">
            <h5 class="card__title--small">New Adventure 5</h5>
            <p class="card__date">17 March 2019</p>
            <p class="card--link__copy">
              Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
              Nulla porttitor accumsan tincidunt.
            </p>
            <svg class="card__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="19px">
              <path fill-rule="evenodd" fill="rgb(255, 57, 70)" d="M21.230,0.919 L19.816,2.334 L26.109,8.627 L0.885,8.627 L0.885,10.627 L25.820,10.627 L19.529,16.920 L20.943,18.335 L29.797,9.482 L21.230,0.919 Z" />
            </svg>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="blog__card card card--link clearfix">
            <h5 class="card__title--small">New Adventure 6</h5>
            <p class="card__date">17 March 2019</p>
            <p class="card--link__copy">
              Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
              Nulla porttitor accumsan tincidunt.
            </p>
            <svg class="card__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="19px">
              <path fill-rule="evenodd" fill="rgb(255, 57, 70)" d="M21.230,0.919 L19.816,2.334 L26.109,8.627 L0.885,8.627 L0.885,10.627 L25.820,10.627 L19.529,16.920 L20.943,18.335 L29.797,9.482 L21.230,0.919 Z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev swiper-button-prev--blog"></div>
      <div class="swiper-button-next swiper-button-next--blog"></div>
    </div>
  </section>

  <?php include('templates/contact.php'); ?>

</main>

<?php include('templates/footer.php'); ?>

</html>