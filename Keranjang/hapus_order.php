<?php 
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$product = $_GET['product'];

//menginput data ke database
mysqli_query($koneksi,"delete from tb_pesanan WHERE product='$product'");

//mengalihkan halaman kembali ke index.php
header("location:tabel_hasil.php");

?>