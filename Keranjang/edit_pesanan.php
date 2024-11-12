<?php

include 'koneksi.php';
$product = $_GET['product'];
$data = mysqli_query($koneksi, "select * from tb_pesanan where product='$product'");
$pesanan = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Cek Pesanan | RumRattan</title>
</head>

<body>
    <!-- Goto TOP -->
    <div id="top-btn">
        <button class="btn top-btn"><i class="icofont-arrow-up"></i></button>
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
                            <li><a href="order.php">Order</a><i class="icofont-double-right"></i></li>
                            <li>
                                <a href="#"><span>Update Order</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->
    <div class="reservation-head text-center">
        <h2>Cek Pesanan Kamu</h2>
    </div>
    <br />
    <br />
    <form method="post" action="edit_aksi.php">
        <div class="form-row custom-form" >
        <table class="tabel_hasil">
            <tr>
                <td>Product</td>
                <td><input type="text" name="product" value="<?= $product; ?>" readonly></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="quantity" value="<?= $pesanan['quantity'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="date" value="<?= $pesanan['date'] ?>"></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td><input type="text" name="color" value="<?= $pesanan['color'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td><input type="text" name="name" value="<?= $pesanan['name'] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?= $pesanan['email'] ?>"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="phone" value="<?= $pesanan['phone'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="address" value="<?= $pesanan['address'] ?>"></td>
            </tr>
            <tr>
                <td>Status Pembayaran</td>
                <td><input type="text" name="status_bayar" value="<?= $pesanan['status_bayar'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SIMPAN" class="book-now">
                </td>
            </tr>
        </table>
        </div>
    </form>
</body>

</html>