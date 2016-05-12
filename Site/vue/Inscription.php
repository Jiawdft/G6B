<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link href="../vue/Inscription.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>

	    <div class="Inscription">
	    	<h1 style="text-align: center;">INSCRIS-TOI</h1>
	    	<form method="post" action="../controleur/Inscription.php?inscription=true">
	    		<input type="radio" name="Genre" value="Homme" /> <p>Homme</p>
	    		<input type="radio" name="Genre" value="Femme" /> <p>Femme</p>
	    		<input type="text" name="Prenom" placeholder="Prénom" />
	    		<input type="text" name="Nom" placeholder="Nom" />
	    		<input type="text" name="Date_de_Naisssance" placeholder="Date de Naisssance (AAAA/MM/JJ)" />
	    		<input type="text" name="Numéro_de_Téléphone" placeholder="Numéro de Téléphone" />
	    		<input type="text" name="Adresse" placeholder="Adresse" />
	    		<input type="text" name="Code_Postal" placeholder="Code Postal" />
			    <input type="email" name="Adresse_Mail" placeholder="Adresse Mail" />
			    <input type="password" name="Mot_de_Passe" placeholder="Mot de Passe" />
			    <input type="submit" value="INSCRIPTION" />
			    <?php
			    if(isset($erreur)and $erreur!=''){
			    	?>
			    	<h4><?php echo $erreur ?></h4>
			    	<?php
			    }
			    ?>
			</form>
	    </div>
	</body>
</html>