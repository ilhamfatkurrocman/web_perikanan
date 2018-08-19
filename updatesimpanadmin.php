<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form
$id_ikan = $_POST['id_ikan'];
$jenis_ikan = $_POST['jenis_ikan'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];

// update data ke database
mysqli_query($connect,"update produksi set jenis_ikan='$jenis_ikan', harga_jual='$harga_jual', harga_beli='$harga_beli' where id_ikan='$id_ikan'");

// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>