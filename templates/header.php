<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Doob</title>

  <!-- Work Sans font family -->
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet" />
  <!-- Swiper stylesheet -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <!-- main stylesheet -->
  <link rel="stylesheet" href="css/main.min.css" />
</head>

<body>
  <nav class="navbar">

    <button class="hamburger">
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
    </button>
    <img src="./images/logo.png" alt="Doob" class="navbar__logo navbar__logo--mobile" />

    <div class="container navbar__inner">
      <img src="./images/logo.png" alt="Doob" class="navbar__logo navbar__logo--desktop" />
      <ul class="navbar__menu menu">
        <li class="menu__item">
          <a href="/" class="menu__link link--animated">Home.</a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link link--animated">About us.</a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link link--animated">Portfolio.</a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link link--animated">Blog.</a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link link--animated">Contact us.</a>
        </li>
      </ul>
      <a href="#contact" class="navbar__btn btn btn--contact">
        <span>Contact Us</span>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="19px">
          <path fill-rule="evenodd" fill="rgb(255, 57, 70)" d="M21.230,0.919 L19.816,2.334 L26.109,8.627 L0.885,8.627 L0.885,10.627 L25.820,10.627 L19.529,16.920 L20.943,18.335 L29.797,9.482 L21.230,0.919 Z" />
        </svg>
      </a>
    </div>
  </nav>