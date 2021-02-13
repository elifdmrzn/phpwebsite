<?php 

include ("baglanti.php");



?>
<!DOCTYPE html>
<html>
	<head>
		<title>ŞİRKET</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"> </script>
		
	</head>
	<body>
	<div class="container">
		<?php include "menu.php"?>
			            
			<div id="demo" class="carousel slide" data-ride="carousel">

			
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>


				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="r1.jpg" height="600" >
						<div class="carousel-caption bg-dark">
						<h3>Gökalp Evleri</h3>
						<p>Son aşamasına gelinen proje alıcılarını bekliyor!</p>
					</div> </div>
					<div class="carousel-item">
						<img src="s1.jpg" height="600" >
						<div class="carousel-caption bg-dark">
							<h3>Beştelsiz Evleri</h3>
							<p>Son aşamasına geline proje alıcılarını bekliyor!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="r3.jpg" height="600" >
						<div class="carousel-caption bg-dark">
							<h3>Sümer Evleri</h3>
							<p>Son aşamasına geline proje alıcılarını bekliyor!</p>
						</div>
					</div>
				</div>


				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
				
				
			</div>
		
		<div class="container bg-info text-dark">
			<div class="row p-3">
			
			
			
				<div class="col-md-3">
					<div class="card">
						<img class="card-img-top" src="c1.jpg" alt="Card image">
						<div class="card-body">
							<h4 class="card-title text-dark">Akıllı Ev Sistemleri</h4>
							<p class="card-text text-dark">Şimdi akıllı ev sahibi olmak istiyorsanız hemen tıklayın.</p>
							<a href="Haberler.html#h1" class="btn btn-primary stretched-link">Bilgi Al</a>
						</div> 
					
					</div>
				</div>
				
				   <div class="col-md-3">
					<div class="card">
				     <img class="card-img-top" src="c1.jpg" alt="Card image">
				   <div class="card-body">
					<h4 class="card-title text-dark">Kredilerde Düşük Faiz Fırsatı</h4>
					<p class="card-text text-dark">Düşük faiz fırsatını kaçırmayın hemen tıklayın.</p>
					<a href="Haberler.html#h2" class="btn btn-primary stretched-link">Bilgi Al</a>
					</div> 
					
					</div>
				</div>
				
				
				<div class="col-md-3">
					<div class="card">
				<img class="card-img-top" src="c1.jpg" alt="Card image">
				<div class="card-body">
						<h4 class="card-title text-dark">Şimdi Al,Seneye Öde</h4>
						<p class="card-text text-dark">Geç ödeme fırsatlarından yararlanmak için tıklayın.</p>
							<a href="Haberler.html#h3" class="btn btn-primary stretched-link">Bilgi Al</a>
					</div> 
					
					</div>
				</div>
				
				
				<div class="col-md-3">
					<div class="card">
				<img class="card-img-top" src="c1.jpg" alt="Card image">
				<div class="card-body">
						<h4 class="card-title text-dark">Rezidanslarda Büyük İndirim</h4>
						<p class="card-text text-dark">Lüks yaşam hakkınız, bilgi almak için tıklayın</p>
							<a href="Haberler.html#h4" class="btn btn-primary stretched-link">Bilgi Al</a>
					</div> 
					
					</div>
				</div>
		
			</div>
						
			</div>
			
		<div class="container bg-info text-dark p-3">
				<div class="row">
					<div class="col-md-6">
					<div class="row">
					<div class="col-md-6">
							<img src="c2.jpg" class="img-fluid">
					</div>
						<div class="col-md-6">
							<br>Yeşille buluşan muhteşem sitelerde siz de oturmak istemez misiniz? <br>O zaman hemen bizimle iletişime geçin!!!Doğayla iç içe yaşamın keyfini sürmek sizinde hakkınız.
					</div>
					
					</div>
					 </div>
						
						<div class="col-md-6">
				<div id="accordion">
					<div class="card">
					  <div class="card-header">
					  	<a class="card-link" data-toggle="collapse" href="#collapse1">Etap 1</a>
					  </div>
					  
				<div id="collapse1" class="collapse show" data-parent="#accordion">
				  <div class="card-body text-dark">Peşinatsız ev sahibi olun</div>  
				</div>
				
					</div>
					
				  <div class="card">
					<div class="card-header">
						<a class="card-link" data-toggle="collapse" href="#collapse2">Etap 2</a>
							</div>

					<div id="collapse2" class="collapse" data-parent="#accordion">
						<div class="card-body text-dark">Şimdi al,seneye öde</div>
							</div>

						</div>
						
						<div class="card">
						  <div class="card-header">
							<a class="card-link" data-toggle="collapse" href="#collapse3">Etap 3</a>
								</div>

						<div id="collapse3" class="collapse" data-parent="#accordion">
							<div class="card-body text-dark">Düşük faizle ev sahibi olun</div>
								</div>

							</div>
					
					
				</div>
			</div>
		</div>
	</div>
			<div class="jumbotron text-center text-dark">
				<p>Copyright İnsaatSirketi.com</p>
		</div>
		</div>
		
	
		  
						
						
				
				
						
							
						
						
		
	</body>
</html>