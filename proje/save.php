<?php
  
include("baglanti.php");


$adi = $_POST["adi"];
$soyadi = $_POST["soyadi"];
$email = $_POST["email"];
$il=$_POST["il"];
$k_adi = $_POST["k_adi"];
$sif = $_POST["sif"];
$sif_t =$_POST["sif_t"];
$cinsiyet =$_POST["cinsiyet"];
$adres=$_POST["adres"];
$hobilerimiz="";

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

if(strlen($sif)<5){
	$hata= 1;
	$hata_mesaji .= "şifre çok kısa <br>\n";
}

if(strlen($sif)>10){
	$hata= 1;
	$hata_mesaji .= "şifre çok uzun <br>\n";
}

if($sif!=$sif_t){
	$hata= 1;
	$hata_mesaji .= "şifreler aynı değil <br>\n";
}

if(isset($_POST["hobi"])){
	$hobilerimiz.= "0,";
	foreach($_POST["hobi"] as $h)
	{
		$hobilerimiz.= $h.",";
		
	}
	$hobilerimiz.= "0";
	
	}


if($hata==0){
	$sql = "insert into uyeler(adi,soyadi,email,il,k_adi,sifre,cinsiyet,adres,hobiler) values('$adi','$soyadi','$email','$il','$k_adi','$sif','$cinsiyet','$adres','$hobilerimiz')";

	$mysqli->query($sql);
	

}








?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>formdan gelenler</title>
</head>

<body>
	
	<?php if($hata==0){?>
	
	<table width="300" border="1" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td>Adı</td>
      <td><?php echo $adi?></td>
    </tr>
	  
    <tr>
      <td>Soyadı</td>
      <td><?php echo $soyadi?></td>
    </tr>
	  
    <tr>
      <td>E-Posta</td>
      <td><?php echo $email?></td>
    </tr>
	<tr>
      <td>İl</td>
      <td><?php echo $il?></td>
    </tr>
    <tr>
      <td>Kullanıcı Adı</td>
      <td><?php echo $k_adi?></td>
    </tr>
	<tr>
      <td>Şifre</td>
      <td><?php echo $sif?></td>
    </tr>
	<tr>
      <td>Şifre Tekrar</td>
      <td><?php echo $sif_t?></td>
    </tr>
	<tr>
      <td>Cinsiyet</td>
      <td><?php echo $cinsiyet?></td>
    </tr>
	<tr>
      <td>Adres</td>
      <td><?php echo $adres?></td>
    </tr>
	<tr>
      <td>Hobiler</td>
      <td><?php echo $hobilerimiz?></td>
    </tr>
  </tbody>
</table>

	<?php }
	
	else{
echo $hata_mesaji;
}?>
	
	
	
</body>
</html>