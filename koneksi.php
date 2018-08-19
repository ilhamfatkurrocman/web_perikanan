<?php

/*$con=mysqli_connect("localhost","root","","library12");
mysqli_connect("localhost", "root", "")
    or die (mysql_error());

mysqli_select_db("library12",$con,);


@$koneksi=mysqli_connect("localhost","root","","kelas_web");
 if(!$koneksi)
 	echo "koneksi ke db gagal, ".mysqli_connect_error();
*/
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='kelas_web';

$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($connect->connect_error){
    die('Maaf Gagal:'.$connect->connect_error);
}
 	

?>

