<?php ob_start();
include "koneksi2.php";

$id=$_POST['Id_Mobil'];
$merk=$_POST['Merk'];
$model=$_POST['Model'];
$tipe=$_POST['Tipe'];
$thn=$_POST['Tahun_Produksi'];

mysql_query("INSERT INTO mobil(Id_Mobil, Merk, Model, Tipe, Tahun_Produksi) VALUES ('$id','$merk','$model','$tipe','$thn')") or die (mysql_error());
header("location:http://localhost/templates/index.php?page=taable");
 
    /*echo"<a href='index.php'>Input Lagi</a></br>";*/
?>