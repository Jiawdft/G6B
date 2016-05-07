<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link href="../vue/Inscription.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<div class="HOMETOP">
	    	<div class="menu">
		       <div id="left">
		       		<a href="../controleur/Accueil.php"><img src="../Images/Logos/Sporciety.png" style="height: 3.8em;" /></a>
		       </div>
		       <ul id="right">
		            <li><a href="../controleur/Sports.php">LES SPORTS</a></li>
		           <li><a href="../controleur/Forum.php">FORUM</a></li>
		           <li><a href="../controleur/Contact.php">CONTACT</a></li>
		           <?php if(isset($_SESSION['mail'])){
			          	?>
			          	<li><a href="../modele/session_destroy.php">DECONNEXION

			          	</a></li>
			          	<?php
			          }
			          else
			          {
			          	?>
			          <li><a href="../controleur/Connexion.php">CONNEXION</a></li>
			          <li><a href="../controleur/Inscription.php">INSCRIPTION</a></li>
			          <?php
			          }
			          ?>
		           <li><a href="../controleur/Aide.php">AIDE</a></li>
		       </ul>
		    </div>
		    <div class="Inscription">
		    	<h1 style="text-align: center;">INSCRIS-TOI</h1>
		    	<form method="post" action="../controleur/Accueil.php">
		    		<input type="radio" name="Genre" value="Homme" /> <p>Homme</p>
		    		<input type="radio" name="Genre" value="Femme" /> <p>Femme</p>
		    		<input type="text" name="Prenom" placeholder="Prénom" />
		    		<input type="text" name="Nom" placeholder="Nom" />
		    		<input type="text" name="Date_de_Naisssance" placeholder="Date de Naisssance (JJ/MM/AAAA)" />
		    		<input type="text" name="Numéro_de_Téléphone" placeholder="Numéro de Téléphone" />
		    		<input type="text" name="Adresse" placeholder="Adresse" />
		    		<input type="text" name="Code_Postal" placeholder="Code Postal" />
				    <input type="email" name="Adresse_Mail" placeholder="Adresse Mail" />
				    <input type="password" name="Mot_de_Passe" placeholder="Mot de Passe" />
				    <input type="submit" value="INSCRIPTION" />
				</form>
		    </div>
		</div>
	</body>
</html>