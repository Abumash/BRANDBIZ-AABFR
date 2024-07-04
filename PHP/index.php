<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="/CSS/styles.css" />
  <title>Brandbiz</title>
</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION['username'])) {
    echo "<p>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</p>";
  }
  ?>
  <header class="header">
    <nav>
      <div class="nav__bar">
        <div class="logo">
          <a href="#"><img src="assets/logo.jpg" alt="logo" /></a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#service">SERVICES</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
      <button class="btn nav__btn"><a href="login.html">Login</a></button>
    </nav>
  </header>
  <section class="content-below-nav">
    <div class="section__container header__container" id="home">
      <h1>Building Success is daily business. <br>
        <span>Be a part of us and change the rules</span>.
      </h1>
    </div>
  </section>
  <hr>
  <section class="section__container about__container" id="about">
    <div class="about__image">
      <img src="assets/about.jpg" alt="about" />
    </div>
    <div class="about__content">
      <p class="section__subheader">ABOUT US</p>
      <h2 class="section__header">Get the best from the best!</h2>
      <p class="section__description">
        We are a Kenyan-Based publishing and printing company that is committed to delivering the best high
        quality of offset printing, indoor & outdoor prints, advertising, packaging & commercial marketing
        across The East African Region.
      </p>
      <div class="about__btn">
        <button class="btn">Read More</button>
      </div>
    </div>
  </section>
  <section class="section__container banner__container">
    <div class="banner__content">
      <div class="banner__card">
        <h4>25+</h4>
        <p>Services Available</p>
      </div>
      <div class="banner__card">
        <h4>350+</h4>
        <p>Bookings Completed</p>
      </div>
      <div class="banner__card">
        <h4>600+</h4>
        <p>Happy Customers</p>
      </div>
    </div>
  </section>
  <section class="explore" id="explore">
    <p class="section__subheader">Our Clientelle</p>
    <h2 class="section__header">Testimonial</h2>
    <div class="explore__bg">
      <div class="explore__content">
        <p class="section__description">2024</p>
      </div>
    </div>
  </section>
  <footer class="footer" id="contact">
    <div class="section__container footer__container">
      <div class="footer__col">
        <div class="logo">
          <a href="#home"><img src="/assets/logo.jpg" alt="logo" /></a>
        </div>
        <p class="section__description">
          We are a Kenyan-Based publishing and printing company that is committed to delivering the best high
          quality of offset printing, indoor & outdoor prints, advertising, packaging & commercial marketing
          across The East African Region.
        </p>
        <button class="btn">Book Now</button>
      </div>
      <div class="footer__col">
        <h4>QUICK LINKS</h4>
        <ul class="footer__links">
          <li><a href="#">Large Format Printing</a></li>
          <li><a href="#">Digital Printing</a></li>
          <li><a href="#">Plastic Cards Printing</a></li>
          <li><a href="#">Offset Printing</a></li>
          <li><a href="#">CD branding Screen Printing</a></li>
          <li><a href="#">Stationery and office supplies</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>OUR SERVICES</h4>
        <ul class="footer__links">
          <li><a href="#">Concierge Assistance</a></li>
          <li><a href="#">Flexible Booking Options</a></li>
          <li><a href="#">Airport Transfers</a></li>
          <li><a href="#">Wellness & Recreation</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>CONTACT US</h4>
        <ul class="footer__links">
          <li><a href="#">Brandbiz.com</a></li>
        </ul>
        <div class="footer__socials">
          <a href="#"><img src="assets/facebook.png" alt="facebook" /></a>
          <a href="#"><img src="assets/instagram.png" alt="instagram" /></a>
          <a href="#"><img src="assets/youtube.png" alt="youtube" /></a>
          <a href="#"><img src="assets/X.jpg" alt="twitter" /></a>
        </div>
      </div>
    </div>
    <div class="footer__bar">
      Copyright © 2024 Brandbiz. All rights reserved.
    </div>
  </footer>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="/JS/main.js"></script>
</body>

</html>