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
						
					
						
					</ul>
					<ul class="navbar-nav  ml-auto "> 
						<?php if($login_oldum){
								
									echo "<li><a href='#' class='text-light'>".$login_adi."</a> (<a href=cikis.php  class='text-light'>çıkış</a>)";
								    echo "</li>";
	
}else{?>
						
						<li class="nav-item">
							<a class="nav-link" href="loginn.php">Kullanıcı Girişi</a>
						</li>
						
						<?php }?>
					
					</ul>
				</div>
			</nav>	
