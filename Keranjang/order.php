<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order | RumRattan</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="new_logo1.ico" type="image/x-icon" />
    <link rel="icon" href="new_logo1.ico" type="image/x-icon" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="css/icofont.min.css" />
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/styleall.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>
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
    <!-- HEADER PART START -->
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="icofont-navigation-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-custom">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Order</a>
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
    <!-- HEADER PART END -->

    <!-- HERO SECTION START -->
     <div class="hero-section">
        <div class="bubble">
            <img src="img/bubble.png" alt="bubble-images " class="w-100 img-fluid" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="hero-sec-content">
                        <h1>Order</h1>
                        <ul>
                            <li><a href="index.php">Home</a><i class="icofont-double-right"></i></li>
                            <li><a href="#"><span>Order</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->

    <!-- RESERVATION FROM SECTION START -->
    <div class="reservation-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="reservation-head text-center">
                        <h2>Make Your Order And Create <span>Your Own Parcel</span></h2>
                        <p>Please check your order before paying</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 m-auto">
                        <div class="personal">
                            <form method="post" action="tambah_pesanan.php">
                                <div class="form-row custom-form">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <label for="product">Select product*</label>
                                        <select class="form-control reservation-input" id="product" name="product">
                                            <option value="K.Perahu Full Rotan">Keranjang Perahu Full Rotan</option>
                                            <option value="K.Perahu Mendong">Keranjang Perahu Mendong</option>
                                            <option value="K.Piring Rotan">Keranjang Piring Rotan</option>
                                            <option value="K.Buah Berkaki">Keranjang Buah Berkaki</option>
                                            <option value="K.Rotan Kotak Kecil">Keranjang Rotan Kotak Kecil</option>
                                            <option value="K.Rotan Kotak Perahu">Keranjang Rotan Kotak Perahu</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <label for="quantity">quantity*</label>
                                        <input type="number" class="form-control reservation-input" id="quantity" name="quantity" min="1" max="20" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <label for="date">Date*</label>

                                        <input type="date" class="form-control reservation-input" id="date" name="date" placeholder="09-08-2023" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <label for="color">Color*</label>
                                        <select class="form-control reservation-input" id="color" name="color">
                                            <option value="Merah">Merah</option>
                                            <option value="Hijau">Hijau</option>
                                            <option value="Coklat">Coklat</option>
                                            <option value="Natural">Natural</option>

                                        </select>
                                    
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                                        <h4>Personal Information</h4>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <label for="name">full Name*</label>
                                        <input type="text" class="form-control reservation-input" id="name" name="name" placeholder="Type your name here" />
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <label for="phone">Phone no*</label>
                                        <input type="text" class="form-control reservation-input" id="phone" name="phone" placeholder="+62** *** *** ***" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <label for="email">your email*</label>
                                        <input type="email" class="form-control reservation-input" id="email" name="email" placeholder="support@gmail.com" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                        <label for="address">address*</label>
                                        <input type="text" class="form-control reservation-input" id="address" name="address" placeholder="Jalan, Desa, Kecamatan, Kabupaten" />
                                    </div>
                
                                    
                                    <div class="col-12 text-center mt-5">
                                        <button type="submit" name="submit" class="book-now">Book Now<i class="icofont-double-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RESERVATION FROM SECTION END -->




    <!-- jQuery JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Venobox JS -->
    <script src="js/venobox.min.js"></script>
    <!-- Boostrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- main.js -->
    <script src="js/main.js"></script>
</body>
</html>