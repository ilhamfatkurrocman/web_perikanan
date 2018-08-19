<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form
$id_trans = $_GET['id_trans'];

mysqli_query($connect,"delete from efisiensi_pakan where id_trans='$id_trans'");

// mengalihkan halaman kembali ke index.php
header("location:dataefisiensipakan.php");

?>