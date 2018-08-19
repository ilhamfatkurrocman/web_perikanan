<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form
$id_petani = $_GET['id_petani'];

mysqli_query($connect,"delete from petani where id_petani='$id_petani'");

// mengalihkan halaman kembali ke index.php
header("location:datapetani.php");

?>