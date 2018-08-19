<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form

$id_trans = $_POST['id_trans'];
$id_ikan = $_POST['id_ikan'];
$id_jenis = $_POST['id_jenis'];
$id_pakan = $_POST['id_pakan'];
$bulan = $_POST['bulan'];
$Wt = $_POST['Wt'];
$W0 = $_POST['W0'];
$D = $_POST['D'];
$F = $_POST['F'];

// update data ke database
mysqli_query($connect,"update efisiensi_pakan set id_ikan='$id_ikan', id_jenis='$id_jenis', id_pakan='$id_pakan', bulan='$bulan', wt='$Wt', W0='$W0', D='$D', F='$F' where id_trans='$id_trans'");

// mengalihkan halaman kembali ke index.php
header("location:dataefisiensipakan.php");

?>