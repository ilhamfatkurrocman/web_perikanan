<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form
$id_petani = $_POST['id_petani'];
$nama_petani = $_POST['nama_petani'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($connect,"update petani set nama_petani='$nama_petani', alamat='$alamat'where id_petani='$id_petani'");

// mengalihkan halaman kembali ke index.php
header("location:datapetani.php");

?>