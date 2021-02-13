<?php
  
include("baglanti.php");


$adi = $_POST["adi"];
$soyadi = $_POST["soyadi"];
$email = $_POST["email"];
$il=$_POST["il"];
$k_adi = $_POST["k_adi"];
$cinsiyet =$_POST["cinsiyet"];
$adres=$_POST["adres"];
$hobilerimiz="";


if(isset($_POST["hobi"])){
	$hobilerimiz.= "0,";
	foreach($_POST["hobi"] as $h)
	{
		$hobilerimiz.= $h.",";
		
	}
	$hobilerimiz.= "0";
	
}

$hata  = 0;
$hata_mesaji = "";

if($il == "Seçiniz"){
	$il = "Seçilmedi!";
}
	
if(strlen($adi)<3){
	$hata = 1;
	$hata_mesaji .= "ad çok kısa <br>\n";
}


if(strlen($adi)>30){
	$hata= 1;
	$hata_mesaji .= "ad çok uzun <br>\n";
}


if(strlen($soyadi)<3){
	$hata= 1;
	$hata_mesaji .= "soyad çok kısa <br>\n";
}


if(strlen($soyadi)>30){
	$hata= 1;
	$hata_mesaji .= "soyad çok uzun <br>\n";
}


if(strlen($email)<7){
	$hata =1;
	$hata_mesaji .= "email çok kısa <br>\n";
}


if(strlen($email)>50){
	$hata =1;
	$hata_mesaji .= "email çok uzun <br>\n";
}


if(strlen($k_adi)<5){
	$hata= 1;
	$hata_mesaji .= "kullanıcı adı çok kısa <br>\n";
}


if(strlen($k_adi)>10){
	$hata= 1;
	$hata_mesaji .= "kullanıcı adı çok uzun <br>\n";
}






if($hata==0){
	$sql = "insert into uyeler(adi,soyadi,email,il,k_adi,cinsiyet,adres,hobiler) values('$adi','$soyadi','$email','$il','$k_adi','$cinsiyet','$adres','$hobilerimiz')";

	$mysqli->query($sql);
	

}

header("location: uyeler2.php");








?>

