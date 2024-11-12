<?php 
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$date = $_POST['date'];
$color = $_POST['color'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$status_bayar = $_POST['status_bayar'];

//menginput data ke database
mysqli_query($koneksi,"update tb_pesanan set quantity='$quantity', date='$date', color='$color', name='$name', email='$email', phone='$phone', address='$address', status_bayar='$status_bayar'  WHERE product='$product'");

//mengalihkan halaman kembali ke index.php
header("location:tabel_hasil.php");

?>