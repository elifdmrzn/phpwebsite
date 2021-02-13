<?php
  
include("baglanti.php");

$id=$_GET["id"];
		
$sql= "select * from uyeler WHERE id=$id";
$result = $mysqli->query($sql);

 while($r= mysqli_fetch_array($result)){
	 $adi=$r["adi"];
	 $soyadi=$r["soyadi"];
	 $email=$r["email"];
	 $il=$r["il"];
	 $k_adi=$r["k_adi"];
	 $cinsiyet=$r["cinsiyet"];
	 $adres=$r["adres"];
	 $hobi=$r["hobiler"];
	 
	 
	 

 }

$hobi_a = explode(",",$hobi);
?>
<!DOCTYPE html>
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

<div class="container">
			<nav class="navbar navbar-expand-md bg-dark navbar-dark">
				
				<a class="navbar-brand" href="index.html"><img src="logo.PNG" width="75" height="50" class="rounded-circle"></a>

				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.html">Ana sayfa</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="projeler.html">Projelerimiz</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="hakkımızda.html">Hakkımızda</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="uyeler2.php">Üyeler</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="loginn.php">Kullanıcı Girişi</a>
						</li>
					</ul>
				</div>
			</nav>	       

<div class="container bg-info">
	<form action="duzenle2.php" method="post" id="frm2">
  <div class="row">
    <div class="col-md-6">
      <h2>Düzenleme</h2>
      <div class="form-group row">
        <label for="ad" class="col-md-2">Adınız:</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="ad" placeholder="Yeni adı giriniz" name="adi" value="<?php echo $adi ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="soyad" class="col-md-2">Soyadınız:</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="soyad" placeholder="Yeni soyadını giriniz" name="soyadi" value="<?php echo $soyadi ?>">
        </div>
      </div>
	
      <div class="form-group row">
        <label for="eposta" class="col-md-2">E-posta:</label>
        <div class="col-md-10">
          <input type="email" class="form-control" id="eposta" placeholder="Yeni e-postayı giriniz" name="email" value="<?php echo $email ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="iller" class="col-md-2">İliniz:</label>
        <div class="col-md-10">
          <select name="il" class="form-control" id="iller" value="<?php echo $il?>">
            <option selected >Seçiniz</option>
            <option value="İstanbul" <?php if($il == "İstanbul") echo "selected"; ?> >İstanbul</option>
            <option value="Ankara" <?php if($il == "Ankara") echo "selected"; ?> >Ankara</option>
            <option value="Adana" <?php if($il == "Adana") echo "selected"; ?> >Adana</option>
            <option value="Bursa" <?php if($il == "Bursa") echo "selected"; ?> >Bursa</option>
          </select>
        </div>
      </div>
      
      <div class="form-group row">
        <label for="k_ad" class="col-md-2">Kullanıcı Adı:</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="k_ad" placeholder="Yeni kullanıcı adı giriniz" name="k_adi" value="<?php echo $k_adi ?>">
        </div>
      </div>
    
      <div class="form-group">
        <div class="form-check-inline">Cinsiyetiniz:
          <div class="form-check">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="radio1" name="cinsiyet"  <?php if($cinsiyet == "kadin") echo "checked";?>  value="kadin" >
              Kadın </label>
          </div>
          <div class="form-check">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="radio2" name="cinsiyet"  <?php if($cinsiyet == "erkek") echo "checked";?>  value="erkek">
              Erkek </label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="adres" class="col-md-2">Adres:</label>
        <div class="col-md-10">
          <textarea class="form-control" rows="4" id="adres" name="adres"  placeholder="Yeni adresi giriniz..."><?php echo $adres ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2">Hobileriniz:</label>
        <div class="col-md-10">
          <div class="row">
            <label for="h1" class="col-md-3">
              <input  type="checkbox" name="hobi[]" id="h1"  value="1" <?php if(in_array(1,$hobi_a)) echo "checked" ?> />
              Müzik </label>
            <label for="h2" class="col-md-3">
              <input  type="checkbox" name="hobi[]" id="h2" value="2" <?php if(in_array(2,$hobi_a)) echo "checked" ?>/>
              Gezi </label>
          </div>
          <div class="row">
            <label for="h3" class="col-md-3">
              <input  type="checkbox" name="hobi[]" id="h3" value="3" <?php if(in_array(3,$hobi_a)) echo "checked" ?>/>
              Spor </label>
            <label for="h4" class="col-md-3">
              <input  type="checkbox" name="hobi[]" id="h4" value="4" <?php if(in_array(4,$hobi_a)) echo "checked" ?> />
              Kitap </label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2"></label>
        <div class="col-md-10">
          <button type="submit" class="btn btn-dark" id="kaydet">Kaydet</button>
			
        </div>
      </div>
    </div>
  </div>
		</div>
		
   <input type="hidden" name="id" value="<?php echo $id?>">
	
	</form>

</div>
		<div class="container">
		<div class="jumbotron text-center text-dark">
				<p>Copyright İnsaatSirketi.com</p>
			</div>
	
	</div>

		
		  
		 
		
		
		
		
		 
		  
		  
	
		
		
		
	</body>
	    
	
</html>