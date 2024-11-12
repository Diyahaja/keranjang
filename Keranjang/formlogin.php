<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="new_logo1.ico" type="image/x-icon" />
    <link rel="icon" href="new_logo1.ico" type="image/x-icon" />
    <title>RumRattan | Login</title>
</head>

<body>
    <!-- cek pesan notifikasi -->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Login gagal! Username dan password salah!";
        } else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>

    <h4></h4>

    <form method="post" action="cek_login.php">
        <div class="box">
            <div class="container">
                <div class="top">
                    <span>Silahkan Login Terlebih Dahulu</span>
                    <header>Login</header>
                </div>
                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="username">
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" name="password">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Login">
                </div>
                <br />
                <label><a href="registrasi.php">Registrasi</a></label>
            </div>
        </div>
        </div>
        </div>
</body>

</html>