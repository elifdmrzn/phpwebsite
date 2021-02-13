<?php
  
include("baglanti.php");




?>
		




<!DOCTYPE html>
<html>
<head>
<title>YENİ ÜYE EKLE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"> </script>
</head>
<body>
<div class="container">

   
	<form action="save2.php" method="post" id="frm3">
			<nav class="navbar navbar-expand-md bg-dark navbar-dark">
				
				<a class="navbar-brand" href="index2.php"><img src="logo.PNG" width="75" height="50" class="rounded-circle"></a>

				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index2.php">Ana sayfa</a>
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
							<a class="nav-link" href="login.php">Kullanıcı Girişi</a>
						</li>
					</ul>
				</div>
			</nav>
		
	
		
	
 <div class="container bg-info">
  <div class="row">
    <div class="col-md-6 p-3">
      <h2>Yeni Üye Ekle</h2>
      <div class="form-group row">
        <label for="ad" class="col-md-2">Adı:</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="ad" placeholder="Adı giriniz" name="adi"  required="">
        </div>
      </div>
      <div class="form-group row">
        <label for="soyad" class="col-md-2">Soyadı:</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="soyad" placeholder="Soyadını giriniz" name="soyadi"  required="">
        </div>
      </div>
	
      <div class="form-group row">
        <label for="eposta" class="col-md-2">E-posta:</label>
        <div class="col-md-10">
          <input type="email" class="form-control" id="eposta" placeholder="E-posta giriniz" name="email" required="">
        </div>
      </div>
      <div class="form-group row">
        <label for="iller" class="col-md-2">İliniz:</label>
        <div class="col-md-10">
          <select name="il" class="form-control" id="iller">
            <option selected>Seçiniz</option>
            <option value="İstanbul">İstanbul</option>
            <option value="Ankara">Ankara</option>
            <option value="Adana">Adana</option>
            <option value="Bursa">Bursa</option>
          </select>
        </div>
      </div>
      
      <div class="form-group row">
        <label for="k_ad" class="col-md-2">Kullanıcı Adı:</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="k_ad" placeholder="Kullanıcı adı giriniz" name="k_adi" required="">
        </div>
      </div>
      
      <div class="form-group">
        <div class="form-check-inline">Cinsiyet:
          <div class="form-check">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="radio1" name="cinsiyet" value="kadin" >
              Kadın </label>
          </div>
          <div class="form-check">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="radio2" name="cinsiyet" value="erkek">
              Erkek </label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="adres" class="col-md-2">Adres:</label>
        <div class="col-md-10">
          <textarea class="form-control" rows="4" id="adres" name="adres" placeholder="Adresi giriniz..."></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2">Hobiler:</label>
        <div class="col-md-10">
          <div class="row">
            <label for="h1" class="col-md-3">
              <input  type="checkbox" name="hobi[]" id="h1" value="1">
              Müzik </label>
            <label for="h2" class="col-md-3">
              <input  type="checkbox" name="hobi[]" id="h2" value="2">
              Gezi </label>
          </div>
          <div class="row">
            <label for="h3" class="col-md-3">
              <input  type="checkbox" name="hobi[]" id="h3" value="3">
              Spor </label>
            <label for="h4" class="col-md-3">
              <input  type="checkbox" name="hobi[]" id="h4" value="4">
              Kitap </label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2"></label>
        <div class="col-md-10">
          <button type="submit" class="btn btn-dark" id="ekle">Ekle</button>
			
        </div>
      </div>
    </div>
  </div>
  </div>
		</div>

	
	<div class="container">
		<div class="jumbotron text-center text-dark">
				<p>Copyright İnsaatSirketi.com</p>
			</div>
	
	</div>
	
	

	
		
	
	</form>
	</body>
</html>