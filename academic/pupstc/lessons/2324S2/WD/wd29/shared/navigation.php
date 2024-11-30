<?php
$first_name = "John";
$last_name = "Doe";
?>

<header class="tm-header" id="tm-header">
  <div class="tm-header-wrapper">
    <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="tm-site-header">
      <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
      <h1 class="text-center">
        <?php echo join_string($first_name, $last_name, " ") ?>
      </h1>
    </div>
    <nav class="tm-nav" id="tm-nav">
      <ul>
        <li class="tm-nav-item <?php if ($pagename == "index") {
          echo "active";
        } ?>"><a href="index.php"
            class="tm-nav-link">
            <i class="fas fa-home"></i>
            Home
          </a></li>
        <li class="tm-nav-item <?php if ($pagename == "post") {
          echo "active";
        } ?>"><a href="post.php"
            class="tm-nav-link">
            <i class="fas fa-pen"></i>
            Single Post
          </a></li>
        <li class="tm-nav-item <?php if ($pagename == "about") {
          echo "active";
        } ?>"><a href="about.php"
            class="tm-nav-link">
            <i class="fas fa-users"></i>
            About
          </a></li>
        <li class="tm-nav-item <?php if ($pagename == "contact") {
          echo "active";
        } ?>"><a href="contact.php"
            class="tm-nav-link">
            <i class="far fa-comments"></i>
            Contact Us
          </a></li>
      </ul>
    </nav>
    <div class="tm-mb-65">
      <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
        <i class="fab fa-facebook tm-social-icon"></i>
      </a>
      <a href="https://twitter.com" class="tm-social-link">
        <i class="fab fa-twitter tm-social-icon"></i>
      </a>
      <a href="https://instagram.com" class="tm-social-link">
        <i class="fab fa-instagram tm-social-icon"></i>
      </a>
      <a href="https://linkedin.com" class="tm-social-link">
        <i class="fab fa-linkedin tm-social-icon"></i>
      </a>
    </div>
    <p class="tm-mb-80 pr-5 text-white">
      Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side
      content will scroll up and down.
    </p>
  </div>
</header>