<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("baglanti.php");

$k_adi = $_POST["k_adi"];
$sif = $_POST["sif"];



$sql="select * from  uyeler WHERE k_adi='$k_adi' AND sifre='$sif'";
$result = $mysqli->query($sql);

if(mysqli_num_rows($result)){

    setcookie("k_adi", $k_adi,time()+60*60,"./");

	header("Location: index2.php");

 }else{
	 echo "<center>Kullanıcı Adı/Şifre Yanlış.<br><a href=javascript:history.back(-1)>Geri Dön</a></center>";
}
?>


 
