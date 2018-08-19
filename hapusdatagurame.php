<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form
$id_jenisgur = $_GET['id_jenisgur'];

mysqli_query($connect,"delete from jenis_gurame where id_jenisgur='$id_jenisgur'");

// mengalihkan halaman kembali ke index.php
header("location:datagurame.php");

?>