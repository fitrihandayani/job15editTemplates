<?php ob_start();
include "koneksi2.php";

$id=$_POST['Id_Mobil'];

mysql_query("DELETE FROM mobil WHERE Id_Mobil='$id'") or die (mysql_error());

header("location:http://localhost/templates/index.php?page=taable");
?>