<?php
  
include("baglanti.php");



?><!doctype html>
<html>
<head>
<title>ÜYELER</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"> </script>
</head>

<body>
	
	<div class="container border-light border">
	<table class="table table-bordered table-dark table-striped table-responsive">
		
  <tbody>
    <tr>
      <th>#</th>
      <th>Adı</th>
	  <th>Soyadı</th>
	  <th>E-Posta</th>
	  <th>İli</th>
      <th>Kullanıcı Adı</th>
      <th>Cinsiyet</th>
	  <th>Adres</th>
	  <th>Hobiler</th>
      <th>İşlemler</th>
    </tr>
	  <?php
	  $sql = "select * from uyeler ";
	  $result = $mysqli->query($sql);
	  $i=0;
	  while($r= mysqli_fetch_array($result)){
		  $i++;
		  $id = $r["id"];
		  
		  
	  ?>
    <tr id="<?php echo $id?>">
      <td><?php echo $i?></td>
      <td><?php echo $r["adi"]?></td>
	  <td><?php echo $r["soyadi"]?></td>
	  <td><?php echo $r["email"]?></td>
	  <td><?php echo $r["il"]?></td>
      <td><?php echo $r["k_adi"]?></td>
      <td><?php echo $r["cinsiyet"]?></td>
	  <td><?php echo $r["adres"]?></td>
	  
	  <?php 
		  $hobilerimiz = "";
		  $hobi = $r["hobiler"];
		  //$hobi_a = explode(",",$r["hobiler"]);
		  if(strlen($hobi)<1)
			  $hobi = 0 ;
		$sqlGetHobi = "select * from hobiler where id in($hobi)";
		   $rHobi = $mysqli->query($sqlGetHobi);
		  if(mysqli_num_rows($rHobi))
		  {
		   while($rHobiler = mysqli_fetch_array($rHobi)){
			   $hobilerimiz.= $rHobiler["baslik"].",";
			   
			   
		   }
			  $hobilerimiz = substr($hobilerimiz,0,-1); 
		  }
		  
		  
		?>
	  <td><?php echo $hobilerimiz ?></td>
	<td><a href=duzenle.php?id=<?php echo $id;?>>Düzenle</a>
		<a href="javascript:sil(<?php echo $id;?>)">Sil</a>
		</td>
    </tr>
	  <?php }?>
  </tbody>
</table>
	<script>
		function sil(id){
			
			if(confirm("silinecek emin misin?")){
				$.get("sil.php?id="+id);
				$("#"+id).fadeOut();
			}
			
		}
		</script>	
</div> 
</body>
</html>