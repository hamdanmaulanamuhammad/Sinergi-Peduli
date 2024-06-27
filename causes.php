<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sinergi Peduli-Causes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
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
                <li class="active"><a href="causes.php" class="nav-link">Our Causes</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li><a href="profile.php" class="nav-link">Volunteer</a></li>
              </ul>
            </nav>


            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>

            

          </div>
        </div>

      </header>




    <div class="owl-carousel-wrapper">

      

      <div class="box-92819">
        <h1 class="text-white mb-3">Misi Kebaikan</h1>
        <p class="lead text-white">Kami berdedikasi untuk membawa perubahan positif dalam kehidupan mereka yang membutuhkan. Dengan penuh kasih dan harapan, kami berupaya mengatasi tantangan yang dihadapi oleh masyarakat kurang beruntung melalui berbagai program bantuan dan inisiatif sosial. Bersama, kita bisa membuat dunia menjadi tempat yang lebih baik.

        </p>
      </div>

      
        <div class="ftco-cover-1 overlay" style="background-image: url('images/cau.png');"></div>
      
    </div>
    
    
    <div class="site-section">
      <div class="container">
        
        <div class="row mb-5 align-items-st">
          <div class="col-md-5">
            <div class="heading-20219">
              <h2 class="title text-cursive mb-4">Misi Darurat</h2>
              <p>Bantu kami memberikan bantuan kemanusiaan yang mendesak kepada warga Palestina yang terdampak konflik. Setiap donasi Anda akan membawa harapan, makanan, perlindungan, dan perawatan medis yang sangat dibutuhkan oleh mereka yang sedang mengalami penderitaan. Bersama, mari kita berikan cahaya di tengah kegelapan yang mereka alami.</p>
              <p><a href="d4.php" class="btn btn-primary rounded-0 px-4">Donate Now</a></p>
            </div>
          </div>

          <?php 
            include 'config.php';
            $result = $conn->query("SELECT 
            fundraising.raising_picture,
            category.category_name,
            fundraising.raising_title,
            fundraising.amount_raised,
            fundraiser.profile_picture AS raiser_profile_picture,
            fundraiser.raiser_name,
            fundraising.process_page
        FROM 
            fundraising
        JOIN 
            category ON fundraising.category_id = category.category_id
        JOIN 
            fundraiser ON fundraising.raiser_id = fundraiser.raiser_id
            WHERE fundraising.raising_id = 4
            ");
            while ($row = $result->fetch_assoc()) {
          ?>
          <div class="col-md-7">
            <div class="cause shadow-sm">
              
                <a href="<?php echo $row['process_page'];?>" class="cause-link d-block">
                  <img src="<?php  echo $row['raising_picture']; ?>" alt="Image" class="img-fluid">
                </a>
                <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                  <span class="badge-danger py-1 small px-2 rounded mb-3 d-inline-block"><?php echo $row['category_name']; ?></span>
                  <h3 class="mb-4"><a href="d4.php"><?php echo $row['raising_title']; ?></a></h3>
                  <div class="border-top border-light border-bottom py-2 d-flex">
                    <div>Terkumpul</div>
                    <div class="ml-auto"><strong class="text-primary">Rp<?php echo number_format($row['amount_raised']); ?></strong></div>
                  </div>

                  <div class="py-4">
                    <div class="d-flex align-items-center">
                      <img src="<?php echo $row['raiser_profile_picture']; ?>" alt="Image" class="rounded-circle mr-3" width="50">
                      <div class=""><?php echo $row['raiser_name']; ?></div>
                    </div>
                  </div>
                </div>
              
              </div>
          </div>
          <?php } ?>
        </div>

        <div class="row">
        <div class="row">
          <?php 
            include 'config.php';
            $result = $conn->query("SELECT 
            fundraising.raising_picture,
            category.category_name,
            fundraising.raising_title,
            fundraising.amount_raised,
            fundraiser.profile_picture AS raiser_profile_picture,
            fundraiser.raiser_name,
            fundraising.process_page
        FROM 
            fundraising
        JOIN 
            category ON fundraising.category_id = category.category_id
        JOIN 
            fundraiser ON fundraising.raiser_id = fundraiser.raiser_id
            WHERE fundraising.raising_id > 4
            ORDER BY fundraising.raising_id ");
            while ($row = $result->fetch_assoc()) {
          ?>
          <div class="col-md-4">
              <div class="cause shadow-sm">
                <a href="<?php echo $row['process_page']; ?>" class="cause-link d-block">
                  <img src="<?php  echo $row['raising_picture']; ?>" alt="Image" class="img-fluid">
                </a>

                <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                  <span class="badge-danger py-1 small px-2 rounded mb-3 d-inline-block"><?php echo $row['category_name']; ?></span>
                  <h3 class="mb-4"><a href="d5.php"><?php echo $row['raising_title']; ?></a></h3>
                  <div class="border-top border-light border-bottom py-2 d-flex">
                    <div>Terkumpul</div>
                    <div class="ml-auto"><strong class="text-primary">Rp<?php echo number_format($row['amount_raised']); ?></strong></div>
                  </div>

                  <div class="py-4">
                    <div class="d-flex align-items-center">
                      <img src="<?php echo $row['raiser_profile_picture']; ?>" alt="Image" class="rounded-circle mr-3" width="50">
                      <div class=""><?php echo $row['raiser_name']; ?></div>
                    </div>
                  </div>
                </div>
              
              </div>
          </div>
          <?php } ?>
          
      </div>
    </div>
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
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
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
