<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form
$id_jenisgur = $_POST['id_jenisgur'];
$nama_gur = $_POST['nama_gur'];

// update data ke database
mysqli_query($connect,"update jenis_gurame set nama_gur='$nama_gur' where id_jenisgur='$id_jenisgur'");

// mengalihkan halaman kembali ke index.php
header("location:datagurame.php");

?>