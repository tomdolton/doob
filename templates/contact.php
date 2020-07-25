<?php

// Database connection
// include('config/db_connect.php');

// Handle form submission. Validatates and saves to database
// include('handle_form.php');

?>


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