<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link href="../vue/backconnexion.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP BOC.php"); ?>

	    <div class="Connexion">
			<h1 style="text-align: center;">BACK OFFICE</h1>
			<form method="post" action="../controleur/test_admin.php">
		    	<input type="email" name="mail" placeholder="Adresse Mail" />
		    	<input type="password" name="passe" placeholder="Mot de Passe" />
		    	<input type="submit" value="CONNEXION" />
		    	<?php if(isset($erreur)and $erreur!=''){?>
			    	<h4><?php echo $erreur ?></h4>
			    	<?php
			    }
			    ?>
			</form>
		</div>
	</body>
</html>