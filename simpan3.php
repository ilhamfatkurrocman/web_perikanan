<?php 
include 'koneksi.php';
if(isset($_POST['simpan'])){
$id_pakan = $_POST['id_pakan'];
$nama_pakan = $_POST['nama_pakan'];
$jenis_pakan = $_POST['jenis_pakan'];
$id_jenis = $_POST['id_jenis'];
$protein= $_POST['protein'];
 
mysqli_query($koneksi,"INSERT INTO pakan VALUES('$id_pakan','$nama_pakan','$jenis_pakan','$id_jenis','$protein')");

header("location:index3.php?pesan=input");
}
?>