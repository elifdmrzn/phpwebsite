<?php
  
include("baglanti.php");

$id=$_GET["id"];
		
$sql= "select * from uyeler WHERE id=$id";
$result = $mysqli->query($sql);

 while($r= mysqli_fetch_array($result)){
	 $adi=$r["adi"];
	 $k_adi=$r["k_adi"];
	 $cinsiyet=$r["cinsiyet"];
 }
?>

<!doctype html>
<html>
<head>
<title>DÜZENLE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"> </script>
</head>	
<body>
	<div class="container bg-info border">
	<form action="duzenle2.php" method="post" id="frm2">
  <div class="row">
    <div class="col-md-6">
      <h2>Düzenle</h2>
		
      <div class="form-group row">
        <label for="ad" class="col-md-2">Adı:</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="adi" placeholder="Yeni adı giriniz" name="adi" value="<?php echo $adi ?>">
        </div>
      </div>
		
		
		
      <div class="form-group row">
        <label for="ad" class="col-md-2">Kullanıcı adı:</label>
        <div class="col-md-10">
        <input type="text" class="form-control" id="k_adi" name="k_adi" placeholder="Yeni kullanıcı adı giriniz"  value="<?php echo $k_adi ?>">
        </div>
      </div>
		 
		  
		  
		  <div class="form-group row">
			 
			   <label for="cinsiyet" class="col-md-2">Cinsiyet:</label>
            
		 
		<div class="col-md-10">

		  <div class="form-check-inline">
		    <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="radio1" name="cinsiyet"  <?php if($cinsiyet == "Kadın") echo "checked";?> value="kadin" >Kadın </label>    
		  </div>
            
		  <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="cinsiyet"   <?php if($cinsiyet == "Erkek") echo "checked";?> value="erkek">Erkek </label>
          </div>
			   
		</div>	
		  </div>
	       
      
		
		  
		 
		<input type="hidden" name="id" value="<?php echo $id?>">
		
		 
		<div class="form-group">
         <label class="col-md-2"></label>
          <div class="col-md-10">
		  <button type="submit" class="btn btn-success">Kaydet</button>
			</div>
		  </div>
		  
		  
		  
		</div>
	  </div>
		</form>
	</div>
		
		
		
	</body>
	    
	
</html>