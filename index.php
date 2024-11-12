<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to RumRattan</title>
    <!-- Icon -->
    <link rel="shortcut icon" href="new_logo1.ico" type="image/x-icon" />
    <link rel="icon" href="new_logo1.ico" type="image/x-icon" />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="css/icofont.min.css" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/styleall.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
  </head>
  <body>
    <!-- Cek apakah sudah login -->
    <?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:formlogin.php?pesan=belum_login");
        }
        ?>

    <h4 class="creator">
      Selamat Datang
      <?php echo $_SESSION['username']; ?> di RumRattan
    </h4>

    <!-- Goto TOP -->
    <div id="top-btn">
      <button class="btn top-btn"><i class="icofont-arrow-up"></i></button>
    </div>
    <!-- Preloader -->
    <div class="preloader-wrap">
      <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <!--HEADER PART START-->
    <header>
      <div class="header py-1">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light px-0 py-0">
            <a class="navbar-brand" href="index.html">
              <div class="logo">
                <img src="img/logo.png" class="w-100 img-fluid" alt="" />
              </div>
            </a>
            <div class="open-time">
              <h3 style="color:tomato;">Rum Rattan</h3>
              <h6><i class="icofont-clock-time"></i> Open Now</h6>
              <span></span>
              <h6></h6>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="icofont-navigation-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav navbar-custom">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="order.php">Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>

                <li class="nav-item last-menu-bg">
                  <span class="nav-link"><a href="logout.php">Logout</a></span>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!--HEADER PART END-->

    <!--HOME HERO SECTION START-->
    <div class="home-hero-section">
      <div class="bubble">
        <img
          src="img/bubble.png"
          alt="bubble-images "
          class="w-100 img-fluid"
        />
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="home-hero-content">
              <h1>
                Create <strong>Special Moment</strong> with
                <strong>Our Parcel </strong>
              </h1>
              <p>
                Wanna make your own parcel?<span>
                  <a href="order.php">Just order now!</a></span
                >
              </p>
              <a class="btn menu-btn" href="#food-menu"
                >Our Product<i class="icofont-double-right"></i
              ></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="burger-img">
              <img src="img/logo.png" class="w-100 img-fluid" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--HOME HERO SECTION END-->

    

    <!--HOME SERVICES SECTION START-->
    <div class="home-services-section">
      <div class="container">
        <div class="home-services">
          <div class="form-row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
              <div class="image-box clearfix">
                <div class="box-image float-left">
                  <img src="img/pilih.png" alt="" />
                </div>
                <div class="image-text float-left">
                  <h2>Choose Product</h2>
                  <p>
                    Silahkan memilih beragam jenis keranjang parcel kami.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
              <div class="image-box clearfix">
                <div class="box-image float-left">
                  <img src="img/pesan.png" alt="" />
                </div>
                <div class="image-text float-left">
                  <h2>order</h2>
                  <p>
                    Tunggu apa lagi? Gas order product kami.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
              <div class="image-box clearfix">
                <div class="box-image float-left">
                  <img src="img/parcel.png" alt="" />
                </div>
                <div class="image-text float-left">
                  <h2>Create it</h2>
                  <p>Ciptakan keunikan parcelmu untuk orang tersayang.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--HOME SERVICES SECTION END-->

    <!--MENU SECTION START-->
    <div class="food-menu-section" id="food-menu">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="menu-head text-center">
              <h2>Choose<span> Our Product</span></h2>
              <p>pilih yang kamu suka</p>
            </div>
          </div>
        </div>
        <div class="row food-box">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="food-menu text-center">
              <div class="food-img-info">
                <div class="food-img">
                  <img src="gbr/gb1.jpg"  class="w-100" alt="" />
                </div>
                <div class="overlay text-left">
                  <h4>Deskripsi</h4>
                  <span>Ukuran 30 x 20 x 8 cm</span>
                  <span>Bahan Rotan Halus</span>
                  <span>Set 2</span>
                  <span>Warna Hijau</span>
                  <span></span>
                </div>
              </div>
              <div class="food-informaion">
                <div class="row align-items-center">
                  <div class="col-12"><h2>Keranjang Perahu Full Rotan</h2></div>
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="food-info text-left">
                      
                      <h3><span>Rp</span>65.000</h3>
                    </div>
                  </div>
                  <div
                    class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right"
                  >
                    <a href="order.php" class="btn order-btn2">Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="food-menu text-center">
              <div class="food-img-info">
                <div class="food-img">
                  <img src="gbr/gb2.jpg" class="w-100" alt="" />
                </div>
                <div class="overlay text-left">
                  <h4>Deskripsi</h4>
                  <span>Ukuran 30 * 20 * 8 cm</span>
                  <span>Bahan Rotan Halus campur mendong</span>
                  <span>Set 3</span>
                  <span>Warna Merah</span>
                  <span></span>
                </div>
              </div>
              <div class="food-informaion">
                <div class="row align-items-center">
                  <div class="col-12"><h2>Keranjang Perahu Mendong</h2></div>
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="food-info text-left">
                  
                      <h3><span>Rp</span>85.000</h3>
                    </div>
                  </div>
                  <div
                    class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right"
                  >
                    <a href="order.php" class="btn order-btn2">Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="food-menu text-center">
              <div class="food-img-info">
                <div class="food-img">
                  <img src="gbr/gb3.jpg" class="w-100" alt="" />
                </div>
                <div class="overlay text-left">
                  <h4>Deskripsi</h4>
                  <span>Ukuran 15 x 15 cm</span>
                  <span>Bahan rotan halus full</span>
                  <span>satuan</span>
                  <span>Warna Merah</span>
                  <span></span>
                </div>
              </div>
              <div class="food-informaion">
                <div class="row align-items-center">
                  <div class="col-12"><h2>Keranjang Piring Rotan</h2></div>
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="food-info text-left">
                      
                      <h3><span>Rp</span>15.000</h3>
                    </div>
                  </div>
                  <div
                    class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right"
                  >
                    <a href="order.php" class="btn order-btn2">Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="food-menu text-center">
              <div class="food-img-info">
                <div class="food-img">
                  <img src="gbr/gb4.jpg" class="w-100" alt="" />
                </div>
                <div class="overlay text-left">
                  <h4>Deskripsi</h4>
                  <span>Ukuran 40 x 30 x 10 cm</span>
                  <span>Bahan Full Rotan Halus</span>
                  <span>Set 2</span>
                  <span>Warna Campur Putih Coklat</span>
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div class="food-informaion">
                <div class="row align-items-center">
                  <div class="col-12"><h2>Keranjang Buah Berkaki</h2></div>
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="food-info text-left">
                      
                      <h3><span>Rp</span>55.000</h3>
                    </div>
                  </div>
                  <div
                    class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right"
                  >
                    <a href="order.php" class="btn order-btn2">Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="food-menu text-center">
              <div class="food-img-info">
                <div class="food-img">
                  <img src="gbr/gbr5.jpg" class="w-100" alt="" />
                </div>
                <div class="overlay text-left">
                  <h4>Deskripsi</h4>
                  <span>Ukuran 20 * 10 * 8 cm</span>
                  <span>Satuan</span>
                  <span>Bahan Rotan Halus dengan mendong</span>
                  <span>Warna Natural</span>
                  <span></span>
                </div>
              </div>
              <div class="food-informaion">
                <div class="row align-items-center">
                  <div class="col-12"><h2>Keranjang Rotan Kotak Kecil</h2></div>
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="food-info text-left">
                      
                      <h3><span>Rp</span>20.000</h3>
                    </div>
                  </div>
                  <div
                    class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right"
                  >
                    <a href="order.php" class="btn order-btn2">Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="food-menu text-center">
              <div class="food-img-info">
                <div class="food-img">
                  <img src="gbr/gbr6.png" class="w-100" alt="" />
                </div>
                <div class="overlay text-left">
                  <h4>Deskripsi</h4>
                  <span>Ukuran 40 x 30 x 8 cm</span>
                  <span>Bahan Rotan Halus dengan Tripleks</span>
                  <span>Set 2</span>
                  <span>Warna Hijau putih</span>
                  <span></span>
                </div>
              </div>
              <div class="food-informaion">
                <div class="row align-items-center">
                  <div class="col-12"><h2>Keranjang Rotan Kotak Perahu</h2></div>
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="food-info text-left">
                      
                      <h3><span>Rp</span>45.000</h3>
                    </div>
                  </div>
                  <div
                    class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right"
                  >
                    <a href="order.php" class="btn order-btn2">Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MENU SECTION END-->

    <!--FOOTER TOP SECTION START-->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="footer-top-content">
              <div class="logofooter">
                <img src="img/logo.png" class="w-100 img-fluid" alt="" />
              </div>
              
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="contact-content">
              <h3>Contact Us</h3>
              <img src="img/border.png" alt="" />
              <div class="contact-info d-flex align-items-center">
                <div class="icon"><a href="https://wa.me/6285786013197"><i class="icofont-phone"></i></a></div>
                <div class="info">
                  <a href="https://wa.me/6285786013197">Call</a>
                  <a href="https://wa.me/6285786013197">+6285 786 013 197</a>
                </div>
              </div>
              <div class="contact-info d-flex align-items-center">
                <div class="icon"><a href="mailto:rumrattan@gmail.com"><i class="icofont-email"></i></a></div>
                <div class="info">
                  <a href="mailto:rumrattan@gmail.com">Email </a>
                  <a href="mailto:rumrattan@gmail.com">rumrattan@gmail.com</a>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <br><br><br>
          <div class="contact-info d-flex align-items-center">
                <div class="icon"><a href= "https://maps.app.goo.gl/teRmvS8DoJ4Dyube7"><i class="icofont-google-map"></i></a></div>
                <div class="info">
                  <a href="https://maps.app.goo.gl/teRmvS8DoJ4Dyube7">Location</a>
                  <a href="https://maps.app.goo.gl/teRmvS8DoJ4Dyube7">Telukwetan, Welahan, Jepara, Jawa Tengah</a>
                </div>
              </div>
              <div class="contact-info d-flex align-items-center">
                <div class="icon"><a href="https://instagram.com/rum_rattan?igshid=MzMyNGUyNmU2YQ=="><i class="icofont-instagram"></i></a></div>
                <div class="info">
                  <a href="https://instagram.com/rum_rattan?igshid=MzMyNGUyNmU2YQ==">Instagram </a>
                  <a href="https://instagram.com/rum_rattan?igshid=MzMyNGUyNmU2YQ==">@rum_rattan</a>
                </div>
              </div>

          </div>

          
        </div>
      </div>
    </div>
    <!--FOOTER TOP SECTION END-->

    <!--FOOTER BOTTOM START-->
    <div class="footer-bootom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
            <div class="copyright-txt">
              <p></p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
            <div class="terms">
              <span
                ><a href="#"></a> |
                <a href="#"></a></span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--FOOTER BOTTOM END-->

    <!-- jQuery File-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Slick JS -->
    <script src="js/slick.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Venobox JS -->
    <script src="js/venobox.min.js"></script>
    <!-- main.js -->
    <script src="js/main.js"></script>

    <script>
      $(".testimonial-slider").slick({
        autoplay: true,
        autoplaySpreed: 7000,
        arrows: true,
        prevArrow: '<i class="icofont-arrow-left"></i>',
        nextArrow: '<i class="icofont-arrow-right"></i>',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    </script>
  </body>
</html>
