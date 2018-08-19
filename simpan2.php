<?php 
include 'koneksi.php';
session_start();

	$aksi = $_POST['aksi'];
	if ($aksi == "simpan"){
		echo $id_ikan = $_POST['id_ikan'];
		echo $jenis_ikan = $_POST['jenis_ikan'];
		echo $harga_jual = $_POST['harga_jual'];
		echo $harga_beli = $_POST['harga_beli'];
		$untung = $harga_jual - $harga_beli;
		 
		echo $query = "INSERT INTO produksi(id_ikan, jenis_ikan, harga_jual, harga_beli, untung) VALUES ('$id_ikan','$jenis_ikan','$harga_jual','$harga_beli','$untung')";
		echo $hsl=mysqli_query($connect,$query);
		if ($hsl){
			header("location:admin.php");
		}
		
	}
?>