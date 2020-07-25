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
        <h3 class="company__subtitle">Some Fine <br /> Words About Us</h3>
        <p class="company__copy">
          Vestibulum ac diam sit amet quam vehicula elementum amet est on
          dui. Nulla porttitor accumsan tincidunt.Vestibulum ac diam sit
          amet. <br /> Quam vehicula elementum amet est on dui. Nulla porttitor
          accumsan tincidunt.
        </p>
      </div>
      <img src="./images/illustration-2.png" alt="" class="company__image" />
    </div>
  </section>

  <section class="gallery">
    <div class="container">
      <h3 class="gallery__title">See some of our Creative work.</h3>
      <div class="gallery__carousel">
        <img src="https://source.unsplash.com/369x279/?creative" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?project" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?make" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?beautiful" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?tech" alt="Project name" class="gallery__image" />
        <img src="https://source.unsplash.com/369x279/?design" alt="Project name" class="gallery__image" />
      </div>
      <a href="#" class="gallery__link">See More of These.</a>
    </div>
  </section>

  <section class="blog">
    <div class="container">

      <h2 class="blog__title">Blog Stories</h2>
      <h3 class="blog__subtitle">Check Our News</h3>

      <div class="blog__cards-carousel">
        <div class="blog__card card card--link clearfix">
          <h5 class="card__title--small">New Adventure</h5>
          <p class="card__date">17 March 2019</p>
          <p class="card--link__copy">
            Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
            Nulla porttitor accumsan tincidunt.
          </p>
          <svg class="card__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="19px">
            <path fill-rule="evenodd" fill="rgb(255, 57, 70)" d="M21.230,0.919 L19.816,2.334 L26.109,8.627 L0.885,8.627 L0.885,10.627 L25.820,10.627 L19.529,16.920 L20.943,18.335 L29.797,9.482 L21.230,0.919 Z" />
          </svg>
        </div>
        <div class="blog__card card card--link clearfix">
          <h5 class="card__title--small">New Adventure</h5>
          <p class="card__date">17 March 2019</p>
          <p class="card--link__copy">
            Vestibulum ac diam sit amet quam vehicula elementum amet est on dui.
            Nulla porttitor accumsan tincidunt.
          </p>
          <svg class="card__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="19px">
            <path fill-rule="evenodd" fill="rgb(255, 57, 70)" d="M21.230,0.919 L19.816,2.334 L26.109,8.627 L0.885,8.627 L0.885,10.627 L25.820,10.627 L19.529,16.920 L20.943,18.335 L29.797,9.482 L21.230,0.919 Z" />
          </svg>
        </div>
        <div class="blog__card card card--link clearfix">
          <h5 class="card__title--small">New Adventure</h5>
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

  </section>

  <section class="contact container" id="contact">
    <h2 class="contact__title">Contact Us</h2>
    <h3 class="contact__subtitle">Get in Touch</h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" class="form">

      <div>
        <label for="email" class="visually-hidden">Email</label>
        <input class="form__input" type="email" name="email" id="email" placeholder="Your email" />
        <div class="form__error"><?= htmlspecialchars($errors['email']); ?></div>
      </div>
      <div>
        <label for="subject" class="visually-hidden">Subject</label>
        <input class="form__input" type="text" name="subject" id="subject" placeholder="Subject" />
        <div class="form__error"><?= htmlspecialchars($errors['subject']); ?></div>
      </div>
      <div class="form__message-wrapper">
        <label for="message" class="visually-hidden">Message</label>
        <textarea name="message" id="message" class="form__message" placeholder="Message here..."></textarea>
        <div class="form__error"><?= htmlspecialchars($errors['message']); ?></div>
      </div>

      <div class="form__links">
        <button class="form__btn btn" type="submit" name="submit" value="submit">Send Message</button>
        <a href="messages.php" class="form__btn btn btn--secondary">View Messages</a>
      </div>
    </form>

  </section>
</main>

<?php include('templates/footer.php'); ?>

</html>