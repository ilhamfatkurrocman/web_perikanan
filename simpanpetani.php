<?php 
include 'koneksi.php';
session_start();

	$aksi = $_POST['aksi'];
	if ($aksi == "simpan"){
		echo $id_petani = $_POST['id_petani'];
		echo $nama_petani = $_POST['nama_petani'];
		echo $alamat = $_POST['alamat'];

	
		 
		echo $query = "INSERT INTO petani(id_petani, nama_petani, alamat) VALUES ('$id_petani','$nama_petani','$alamat')";
		echo $hsl=mysqli_query($connect,$query);
		if ($hsl){
			header("location:datapetani.php");
		}
		
	}
?>