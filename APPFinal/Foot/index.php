<?php
// Inclure le fichier config
require_once "config.php";
 
// Define variables and initialize with empty values
$cnom = $cprenom = $cmail = $ctel = $ctaille = $cpoids = $csexe = $cpays = $cville = "";
$cnom_err = $cprenom_err = $cmail_err = $ctel_err = $ctaille_err = $cpoids_err = $csexe_err = $cpays_err = $cville_err = "";
 
// Processus de vérification
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Valider le nom d'utilisateur
    if(empty(trim($_POST["cnom"]))){
        $cnom_err = "S'il vous plaît entrez un nom.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM canafrique WHERE cnom = ?";
        
         if($stmt = mysqli_prepare($link, $sql)){


            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_cnom);
            
			// Set parameters
            $param_cnom = trim($_POST["cnom"]);
                       
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $cnom_err = "Ce nom est déjà utilisé.";
                } else{
                    $cnom = trim($_POST["cnom"]);
                    $cprenom = trim($_POST["cprenom"]);
                    $cmail = trim($_POST["cmail"]);
                    $ctel = trim($_POST["ctel"]);
                    $ctaille = trim($_POST["ctaille"]);
                    $cpoids = trim($_POST["cpoids"]);
                    $csexe = trim($_POST["csexe"]);
                    $cpays = trim($_POST["cpays"]);
                    $cville = trim($_POST["cville"]);
                }
            } else{
                echo "Oops! Une mauvaise manoeuvre.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    

    
    
    // Check input errors before inserting in database
    if(empty($cnom_err) && empty($cprenom_err) && empty($cmail_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO canafrique (cnom, cprenom, cmail, ctel, ctaille, cpoids, csexe, cpays, cville) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){


            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $param_cnom, $param_cprenom, $param_cmail, $param_ctel, $param_ctaille, $param_cpoids, $param_csexe, $param_cpays, $param_cville);
            
         // Set parameters
            $param_cnom = $cnom;
            $param_cprenom= $cprenom;
            $param_cmail = $cmail;
            $param_ctel = $ctel;
            $param_ctaille = $ctaille;
            $param_cpoids = $cpoids;
            $param_csexe = $csexe;
            $param_cpays = $cpays;
            $param_cville = $cville;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: inscription.html");
            } else{
                echo "Mauvais enrégistrement, veuillez réessayer plus tard.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Passeport Special CAN 2023</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #60a3bc !important;
		}
		.user_card {
			height: 800px;
			width: 700px;
			margin-top: 100px;
			margin-bottom: auto;
			background: #f7d47c;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -105px;
			border-radius: 50%;
			background: #60a3bc;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #c0392b !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
				
		}
		#form-input{width: 400px}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <!DOCTYPE html>
<html>
    
<head>
	<title>Page d'authentification IAHS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="Balle.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-info"></i></span>
							</div>
							<input type="text" name="cnom" id="form-input" class="form-control input_user" value="" placeholder="Nom">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-info"></i></span>
							</div>
							<input type="text" name="cprenom" id="form-input" class="form-control input_user" value="" placeholder="Prénoms">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="cmail" id="form-input" class="form-control input_user" value="" placeholder="Email">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-info"></i></span>
							</div>
							<input type="text" name="ctel" id="form-input" class="form-control input_user" value="" placeholder="Téléphone">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-info"></i></span>
							</div>
							<input type="text" name="ctaille" id="form-input" class="form-control input_user" value="" placeholder="Taille">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-info"></i></span>
							</div>
							<input type="text" name="cpoids" id="form-input" class="form-control input_user" value="" placeholder="Poids">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-info"></i></span>
							</div>
							<input type="text" name="csexe" id="form-input" class="form-control input_user" value="" placeholder="Sexe">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-info"></i></span>
							</div>
							<input type="text" name="cpays" id="form-input" class="form-control input_user" value="" placeholder="Pays">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-info"></i></span>
							</div>
							<input type="text" name="cville" id="form-input" class="form-control input_user" value="" placeholder="Ville">
						</div>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										
										<h4 class="modal-title" id="myModalLabel">Hotels</h4>
									</div>
									<div class="modal-body">
										<p>Lorem ipsum</p>
									</div>
									<div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
									</div>
								</div>
							</div>
						</div>

			            <div class="d-flex justify-content-center mt-3 login_container">
			              <button type="submit" name="submit" class="btn login_btn">S'inscrire</button>
			            </div>

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Me rappeler</label>
							</div>
						</div>
					</form>
				</div>
				
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<a href="#">Mot de passe oublié?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
	<script type="text/javascript">
		</script>
</body>
</html>
