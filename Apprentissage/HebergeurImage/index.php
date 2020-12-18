<?php
	
	if (isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] == 0) {

		$error = 1;

		if ($_FILES["fichier"]["size"] <= 3000000) {

			$extension = ".".pathinfo($_FILES["fichier"]["name"], PATHINFO_EXTENSION);
			$listeExtension = array(".png" , ".jpg", ".jepg", ".gif" );

			if (in_array($extension, $listeExtension)) {
				$addresse = "uploaded/".time().rand().rand().$extension;
				move_uploaded_file($_FILES["fichier"]["tmp_name"], $addresse);
				$error = 0;
			}
		}
	}
	if (isset($error) && $error == 0){
		$lien = "<a href ='./".$addresse."' target ='_blank'>Cliquez ici pour ouvrir l'image </a>";
		$imageSource = "<img src='".$addresse."' alt=''>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hebergeur d'Images Prototype</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>

	<fieldset class="container">
		<legend>Uploader son image</legend>

		<div class="content">

			<div class="content-item n1">
				<i id="imag">
					<?php 
						if (isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] == 0){
							echo $imageSource;
						}else {
							echo "<img src='./images/profil.png' alt=''>";
						} 
					?>	
				</i>

				<p class="sub-item1">
					<?php 
						if(isset($error) && $error ==0) {
							echo $lien;
						} 
					?>	
				</p>
			</div>

			<div class="content-item n2">
				<form method="POST" action="index.php" enctype="multipart/form-data">
					<div><input type="file" required="" name="fichier"></div>
					<div><input type="submit" name="envoyer" value="Envoyer"></div>
				</form>				
			</div>

		</div>

	</fieldset>
</body>
</html>