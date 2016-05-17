<!DOCTYPE html>
<html>
	<head>
		<title>Modification d'un Groupe</title>
		<link href="../vue/ModifProfil.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>

	    <div class="ModifProfil">
	    	<h1 style="text-align: center;">MODIFIE VOS INFORMATIONS</h1>
	    	<form action='../controleur/Page_Personnelle.php' method="post">
	    		<input type="text" name="adresse" placeholder="modifier votre adresse " /></br>
	    		<input type="text" name="codepostal" placeholder="modifier votre code postal" /></br>
	    		<input type="text" name="mdp" placeholder="modifier votre mot de passe " />	</br>    		
			    <input type="submit" value="VALIDER" />
			</form>
	    </div>
	</body>
</html>