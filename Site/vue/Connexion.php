<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link href="../vue/Connexion.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>

	    <div class="Connexion">
			<h1 style="text-align: center;">CONNECTEZ-VOUS</h1>
			<form method="post" action="../controleur/test_session.php">
		    	<input type="email" name="mail" placeholder="Adresse Mail" />
		    	<input type="password" name="passe" placeholder="Mot de Passe" />
		    	<input type="submit" value="CONNEXION" />
		    	<?php if(isset($erreur)and $erreur!=''){?>
			    	<h4><?php echo $erreur ?></h4>
			    	<?php
			    }
			    ?>
			</form>
			<a id="inscription" href="../controleur/Inscription.php">Pas encore inscrit ? Inscris toi !</a>
			<div id="social" style="text-align: center; margin-top: 10%">
				<a href="https://www.facebook.com/workoutsociety/?ref=aymt_homepage_panel"><img src="../Images/Logos/Fb.png"></a>
		    	<a href="https://twitter.com/?lang=fr"><img src="../Images/Logos/Tw.png"></a>
				<a href="https://www.instagram.com"><img src="../Images/Logos/Insta.png"></a>
		    	<a href="https://www.pinterest.com"><img src="../Images/Logos/Pint.png"></a>
			</div>
		</div>
	</body>
</html>