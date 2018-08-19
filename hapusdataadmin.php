<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form
$id_ikan = $_GET['id_ikan'];

mysqli_query($connect,"delete from produksi where id_ikan='$id_ikan'");

// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>