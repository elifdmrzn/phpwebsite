<?php
  
include("baglanti.php");



?>
		




<!DOCTYPE html>
<html>
<head>
<title>GİRİŞ YAP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"> </script>
</head>
<body>
<div class="container">

   
	<form action="login2.php" method="post" id="frm3">
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
							<a class="nav-link" href="kredi.html">Ev Kredisi</a>
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
		
	
		
	
 <div class="container bg-pink pt-3 my-3">
  <div class="row align-content-center justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center">Giriş Yap</h2> <hr>
      
      
      <div class="form-group row">
        <label for="k_ad" class="col-md-2">Kullanıcı Adı:</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="k_ad" placeholder="Kullanıcı adınızı giriniz" name="k_adi" required="">
        </div>
      </div>
      <hr>
      
      <div class="form-group row">
        <label for="sifre" class="col-md-2">Şifre:</label>
        <div class="col-md-10">
          <input type="password" class="form-control" id="sifre" placeholder="Şifrenizi giriniz" name="sif" required="">
        </div>
      </div>
      <hr>
      
    
      <div class="form-group row">
        <label class="col-md-5"></label>
        <div class="col-md-7">
          <button type="submit" class="btn btn-dark" id="giris">Giriş</button>
			
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