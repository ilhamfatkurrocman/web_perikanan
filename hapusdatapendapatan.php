<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form
$id_pendapatan = $_GET['id_pendapatan'];

mysqli_query($connect,"delete from pendapatan where id_pendapatan='$id_pendapatan'");

// mengalihkan halaman kembali ke index.php
header("location:datapendapatan.php");

?>