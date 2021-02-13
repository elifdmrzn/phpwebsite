<?php

$mysqli = mysqli_connect("127.0.0.1","root","","dersler") or die("veritabanı hatası");
mysqli_set_charset($mysqli,"utf8");

// veri eklemek
 
/*$rand = rand(1,100);

$sql = "insert into uyeler(adi,soyadi) values('elif','$rand')";

$mysqli->query($sql);

$sql = "select * from uyeler";
$result = $mysqli->query($sql);
while($r = mysqli_fetch_array($result)){
	echo $r["adi"]. "- ". $r["soyadi"]." <br>";
	
}
*/
if(isset($_COOKIE["k_adi"])){
	$login_oldum = true;
	$login_adi = $_COOKIE["k_adi"];
}else{
	$login_oldum = false;
	$login_adi = "";
	
}
?>