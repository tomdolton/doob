<section class="contact container" id="contact">
  <h2 class="contact__title">Contact Us</h2>
  <h3 class="contact__subtitle">Get in Touch</h3>

  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" class="form">

    <div class="form__group">
      <label for="email" class="visually-hidden">Email</label>
      <input class="form__input" type="email" name="email" id="email" placeholder="Your email" required />
      <div class="form__error"><?= htmlspecialchars($errors['email']); ?></div>
    </div>
    <div class="form__group">
      <label for="subject" class="visually-hidden">Subject</label>
      <input class="form__input" type="text" name="subject" id="subject" placeholder="Subject" required />
      <div class="form__error"><?= htmlspecialchars($errors['subject']); ?></div>
    </div>
    <div class="form__group form__group--message">
      <label for="message" class="visually-hidden">Message</label>
      <textarea name="message" id="message" class="form__message" placeholder="Message here..." required></textarea>
      <div class="form__error"><?= htmlspecialchars($errors['message']); ?></div>
    </div>

    <div class="form__links">
      <button class="form__btn btn" type="submit" name="submit" value="submit">Send Message</button>
      <a href="messages.php" class="form__btn btn btn--secondary">View Messages</a>
    </div>
  </form>

</section>