<?php 
include 'koneksi.php';
if(isset($_POST['simpan'])){
$id_olahan = $_POST['id_olahan'];
$nama_olahan = $_POST['nama_olahan'];
$jenis_olahan = $_POST['jenis_olahan'];
$harga = $_POST['harga'];
$id_jenis= $_POST['id_jenis'];
 
mysqli_query($koneksi,"INSERT INTO olahan VALUES('$id_olahan','$nama_olahan','$jenis_olahan','$harga','$id_jenis')");

header("location:index.php?pesan=input");
}
?>