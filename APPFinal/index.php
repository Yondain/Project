<?php
	include('phpqrcode/qrlib.php'); //On inclut la librairie au projet
    $lien='  http://93b68d4650cb.ngrok.io/CAN2023/Foot/index.php'; // Vous pouvez modifier le lien selon vos besoins
    QRcode::png($lien, 'qrcode-243tech.png'); // On crée notre QR Code
?>
<!DOCTYPE html>
<html>
<head>
	<title>WADJU SAN UMKOBIE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="body.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

	<header>
		<nav>
			<ul class="navig">
				<li><a href="index.php">Acceuil</a></li>
				<li>
					<a >Actualités</a>
					<ul class="menu">
						<li><a href="Actualite.html">Programme des matchs</a></li>
						<li><a href="historique.html">Historique des rencontres</a></li>
					</ul>
				</li>
				<li><a href="Foot/projet/tourisme.html">Espace Tourisme</a></li>
				<li><a href="Foot2/index.php">Achat de tickets</a></li>
			</ul>
			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
				  Mon Compte
			</button>
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    	Choisir la langue
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#"> Français </a>
				    <a class="dropdown-item" href="index2.php"> Anglais </a>
				</div>
			</div>
		</nav>
	</header>
	<section>
		<div class="slogan">
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							
							<h4 class="modal-title" id="myModalLabel">Mon Compte</h4>
						</div>
						<div class="modal-body">
							<button class="btn btn-primary btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#MyModal">
							  Se connecter
							</button>
							<button class="btn btn-success"><a href="Foot/index.php">S'inscrire</a></button>
						</div>
						<div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Connexion</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Nom d'utilisateur">
									</div>
								    <small id="emailHelp" class="form-text text-muted">Entrez votre nom d'utilisateur ou vôtre adresse E-mail s'il vous plait.</small>
								</div>
								<div class="form-group">
								    <div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-key"></i></span>
										</div>
										<input type="password" class="form-control" placeholder="Mot de Passe">
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Se connecter</button>
							</form>
						</div>
						<div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#myModal">Retour</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
			    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
			    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
			    <li data-target="#carouselExampleFade" data-slide-to="3"></li>
			    <li data-target="#carouselExampleFade" data-slide-to="4"></li>
			</ol>
		    <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<img src="Photo/1.jpg" class="d-block w-100" alt="...">
			    	<div class="carousel-caption d-none d-md-block">
				        <h5></h5>
				        <p></p>
			    	</div>
			    </div>
			    <div class="carousel-item">
			    	<img src="Photo/6.jpg" class="d-block w-100" alt="...">
			    	<div class="carousel-caption d-none d-md-block">
				        <h5>Stade Ebimpé</h5>
				        <p></p>
			    	</div>
			    </div>
			    <div class="carousel-item">
			    	<img src="Photo/cool0.jpg" class="d-block w-100" alt="...">
			    	<div class="carousel-caption d-none d-md-block">
				        <h5></h5>
				        <p></p>
			    	</div>
			    </div>
			    <div class="carousel-item">
			    	<img src="Photo/4.jpg" class="d-block w-100" alt="...">
			    	<div class="carousel-caption d-none d-md-block">
				        <h5>Stade Yamoussoukro</h5>
				        <p></p>
			    	</div>
			    </div>
			    <div class="carousel-item">
			    	<img src="Photo/5.jpg" class="d-block w-100" alt="...">
			    	<div class="carousel-caption d-none d-md-block">
				        <h5></h5>
				        <p></p>
			    	</div>
			    </div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<div>
			<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#cool">
				  Cliquez ici :D
			</button>
			<div class="modal fade" id="cool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl">
					<div class="modal-content">
						<video src="IntroCAN.mp4" controls preload="metadata"></video>
					    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>

	</section>
	<footer>
		<div class="footTop">
			<div class="socio">
				<h4>Nous Suivre</h4>
				<div class="suivre">
					<a href="#"><i class="fab fa-facebook-f" title="Facebook"></i></a>
					<a href="#"><i class="fab fa-instagram" title="Instagram"></i></a>
					<a href="#"><i class="fab fa-twitter" title="Twitter"></i></a>
				</div>

			</div>
				
			<div class="socio">
				<h4>Moyens de paiement</h4>
				<div>
					<img class="paiement" src="Photo/paypal.png" alt="">
					<img class="paiement" src="Photo/mastercard.png" alt="">
					<img class="paiement" src="Photo/visa.png" alt="">
				</div>
			</div>
		</div>
		<p>© 2020 Created by Dawn of Technology All Rights Reserved</p>
	</footer>

	<script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>