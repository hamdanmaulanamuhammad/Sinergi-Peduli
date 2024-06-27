<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/profile.css">

</head>

<body style="background-image: url('images/volunteer.png'); background-size: cover; background-position: center; background-attachment: fixed;" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="site-logo">
            <a href="index.php" class="text-white">SinergiPeduli</a>
          </div>
          <nav class="site-navigation text-left ml-auto " role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="about.php" class="nav-link">About Us</a></li>
                <li><a href="causes.php" class="nav-link">Our Causes</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="active"><a href="profile.php" class="nav-link">Volunteer</a></li>
            </ul>
          </nav>
          <div class="ml-auto toggle-button d-inline-block d-lg-none">
            <a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white">
              <span class="icon-menu h3 text-white"></span>
            </a>
          </div>
        </div>
      </div>
    </header>

    <div class="profiles-container">
        <?php
        include 'fetch_profiles.php'; 
        foreach ($profiles as $profile) {
            echo '<div class="story-life">';
            echo '    <div class="profile-pic-container">';
            echo '        <img src="' . $profile['profile_picture'] . '" alt="Foto Profil" class="profile-pic">';
            echo '    </div>';
            echo '    <div class="profile-info">';
            echo '        <h2>' . $profile['raiser_name'] . '</h2>';
            echo '        <p>' . $profile['motto'] . '</p>';
            echo '        <p>' . $profile['about'] . '</p>';
            echo '        <div class="contact-info">';
            echo '            <a href="https://www.instagram.com/' . $profile['instagram'] . '" target="_blank"><i class="fab fa-instagram"></i></a>';
            echo '            <a href="https://www.facebook.com/' . $profile['facebook'] . '" target="_blank"><i class="fab fa-facebook"></i></a>';
            echo '            <a href="https://wa.me/' . $profile['raiser_contact'] . '" target="_blank"><i class="fab fa-whatsapp"></i></a>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
        ?>
    </div>p

    <footer class="site-footer bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Selamat datang di Sinergi Peduli! Kami adalah organisasi nirlaba yang berdedikasi untuk menciptakan perubahan positif melalui aksi sosial dan kemanusiaan.</p>

              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4 ml-auto">
            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><i class="fab fa-facebook"></i></a>
            <a href="#" class="pl-3 pr-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="pl-3 pr-3"><i class="fab fa-instagram"></i></a>
            <a href="#" class="pl-3 pr-3"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
