<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fundraiser &mdash; Website Template by Colorlib</title>
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

  <style>
    .modal .modal-body img {
      max-width: 100%;
    }
  </style>

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
              <li><a href="causes.php" class="nav-link">Our Causes</a></li>
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
        <h1 class="text-white mb-3">Beasiswa untuk anak Berprestasi</h1>
        <p class="lead text-white">Mari berdonasi untuk beasiswa anak berprestasi. Donasi Anda membantu menyediakan pendidikan berkualitas bagi anak-anak berbakat yang kurang mampu. Bersama, kita bisa memberikan peluang dan masa depan yang lebih cerah bagi mereka. Donasi sekarang dan wujudkan impian mereka!


        </p>
      </div>


      <div class="ftco-cover-1 overlay" style="background-image: url('images/bea.png');"></div>

    </div>


    <div class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-8 mb-5">
            <form id="donation-form" action="proses_d7.php" method="post">
              <input type="hidden" name="confirm" id="confirm" value="false">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="No Telp" name="telp" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="number" class="form-control" placeholder="Nominal Donasi (Rp)" name="nominal" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <select class="form-control" name="metode" id="metode" required>
                    <option value="" disabled selected>Metode Pembayaran</option>
                    <option value="bank">Transfer Bank</option>
                    <option value="qris">QRIS</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="pesan" id="pesan" class="form-control" placeholder="Tuliskan Pesan anda disini " cols="30" rows="10" required form='donation-form'></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-0" value="Donasi">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-cursive mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-muted small text-uppercase font-weight-bold">Alamat:</span>
                  <span>Jl.Jeruk No.21, Jakarta, Indonesia</span></li>
                <li class="d-block mb-3"><span class="d-block text-muted small text-uppercase font-weight-bold">Phone:</span><span>+62 812 3456 7890</span></li>
                <li class="d-block mb-3"><span class="d-block text-muted small text-uppercase font-weight-bold">Email:</span><span>sinergipeduli@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section">
      <div class="container">

        <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
          <div class="">
            <h2 class="text-cursive">Bersama Kita Peduli, Bersama Kita Berbagi</h2>
          </div>
          <div class="ml-auto"><a href="#" class="btn btn-primary">Donate Now</a></div>
        </div>

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
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymentModalLabel">Instruksi Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Payment instructions will be inserted here by JavaScript -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="batalBtn">Batal</button>
          <button type="button" class="btn btn-primary" id="bayarBtn">Bayar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="thankYouModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="thankYouModalLabel">Terima Kasih</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Terima kasih atas donasi Anda! Kami sangat menghargainya.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="confirm_btn">Konfirmasi Donasi</button>
        </div>
      </div>
    </div>
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
  <script>
    document.getElementById('donation-form').addEventListener('submit', function (event) {
      if(document.getElementById('confirm').value == 'false'){
        event.preventDefault();
        var metode = document.getElementById('metode').value;
        var modalBody = document.querySelector('#paymentModal .modal-body');
        
        if (metode === 'bank') {
          modalBody.innerHTML = `
          <p>Silakan transfer ke salah satu rekening bank berikut:</p>
          <ul>
          <li>BRI (VA) : 88810081215027513</li>
          <li>BCA (VA) : 3901081215027513</li>
          <li>MANDIRI (VA) : 89508081215027513</li>
          <li>MANDIRI (VA) : 89508081215027513</li>
          </ul>
          `;
        } else if (metode === 'qris') {
          modalBody.innerHTML = `
          <p>Silakan lakukan pembayaran dengan scan Qris berikut :</p>
          <div style="text-align: center;">
          <img src="images/qris.png" alt="QRIS" style="max-width: 100%; height: auto;">
          </div>
          `;
        }
        
        $('#paymentModal').modal('show');
      }
    });

    document.getElementById('batalBtn').addEventListener('click', function () {
      $('#paymentModal').modal('hide');
    });

    document.getElementById('confirm_btn').addEventListener('click', function () {
      document.getElementById('confirm').value = 'true'
      document.getElementById('donation-form').submit();
    });

    document.getElementById('bayarBtn').addEventListener('click', function () {
      $('#paymentModal').modal('hide');
      $('#thankYouModal').modal('show');
    });
  </script>


</body>

</html>
