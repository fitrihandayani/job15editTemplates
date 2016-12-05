<?php 
$servername= "localhost";
$username="root";
$password="";
$db="showroommobil";

//create connection
mysql_connect($servername, $username, $password) or die ("Koneksi Gagal");
mysql_select_db($db) or die ("Database tidak dapat dibuka")
/*$sql="SELECT *FROM mobil";
$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
	echo $row['Model']."<br>";
}*/
//mysql_close($conn);
?>