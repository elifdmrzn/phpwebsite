<?php 

include ("baglanti.php");
session_start();


$k_adi = $_POST["k_adi"];
$sif = $_POST["sif"];



$sql="select * from  uyeler WHERE k_adi='$k_adi' AND sifre='$sif'";
$result = $mysqli->query($sql);


if(mysqli_num_rows($result))  {
	$r=mysqli_fetch_array($result);
    $_SESSION["login"] = true;
    $_SESSION["k_adi"] = $k_adi;
	
	header("location: index.php");

  
	

}

    else {
        echo "<center>Kullanıcı Adı/Şifre Yanlış.<br><a href=javascript:history.back(-1)>Geri Dön</a></center>";
    }



?> 