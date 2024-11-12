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
                                <a href="#"><span>Check Order</span></a>
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
    <table class="tabel_hasil">
        <tr>
            <th>NO</th>
            <th>Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Tanggal</th>
            <th>Warna</th>
            <th>Nama Pemesan</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Status Bayar</th>
            <th>Aksi Tambahan</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from tb_pesanan");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['product']; ?></td>
                <td><?php echo $d['quantity']; ?></td>
                <td><?php echo $d['date']; ?></td>
                <td><?php echo $d['color']; ?></td>
                <td><?php echo $d['name']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['phone']; ?></td>
                <td><?php echo $d['address']; ?></td>
                <td><?php echo $d['status_bayar']; ?></td>
                <td>
                    <a href="edit_pesanan.php?product=<?php echo $d['product']; ?>" class="book-now">EDIT PESANAN</a>
                    <a href="hapus_order.php?product=<?php echo $d['product']; ?>" class="book-now">HAPUS PESANAN</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="col-12 text-center mt-5">
        <a href="order.php" class="book-now">TAMBAH PESANAN</a>
    </div>
</body>
</html>