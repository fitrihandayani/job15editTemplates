<?php ob_start();
include "koneksi2.php";

$id=$_POST['Id_Mobil'];
$merk=$_POST['Merk'];
$model=$_POST['Model'];
$tipe=$_POST['Tipe'];
$thn=$_POST['Tahun_Produksi'];

mysql_query("UPDATE mobil SET Merk='$merk', Model='$model', Tipe='$tipe', Tahun_Produksi='$thn' WHERE Id_Mobil='$id'") or die (mysql_error());
header("location:http://localhost/templates/index.php?page=taable");

?>