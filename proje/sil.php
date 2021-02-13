<?php 
include("baglanti.php");

$id=$_GET["id"];


$sql=" delete from uyeler where id='$id'";
$mysqli->query($sql);

header("location: uyeler.php");

?>