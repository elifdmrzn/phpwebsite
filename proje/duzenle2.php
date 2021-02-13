<?php 
include("baglanti.php");

$id=$_POST["id"];

$adi = $_POST["adi"];
$soyadi = $_POST["soyadi"];
$email = $_POST["email"];
$il=$_POST["il"];
$k_adi = $_POST["k_adi"];
$cinsiyet =$_POST["cinsiyet"];
$adres=$_POST["adres"];
$hobilerimiz = "";
if(isset($_POST["hobi"])){
	$hobilerimiz.= "0,";
	foreach($_POST["hobi"] as $h)
	{
		$hobilerimiz.= $h.",";
		
	}
	$hobilerimiz.= "0";
	
	
	
}
if($il == "Seçiniz"){
	$il = "Seçilmedi!";
}
	




$sql="update uyeler set adi='$adi', soyadi='$soyadi', email='$email', il='$il', k_adi='$k_adi', cinsiyet='$cinsiyet', hobiler='$hobilerimiz',adres='$adres' where id='$id'";
/*echo $sql;
exit();*/
$result=$mysqli->query($sql);

header("location: uyeler2.php");

?>