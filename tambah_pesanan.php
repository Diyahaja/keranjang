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
mysqli_query($koneksi,"insert into tb_pesanan values('','$product','$quantity','$date','$color','$name','$email','$phone','$address','$status_bayar')");

//mengalihkan halaman kembali ke index.php
header("location:tabel_hasil.php");

?>