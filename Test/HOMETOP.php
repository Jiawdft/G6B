<!DOCTYPE html>
<html>
	<head>
		<link href="../Header/HOMETOP.css" rel="stylesheet" type="text/css" media="screen" />
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
		           <?php 
		           if(isset($_SESSION['mail']))
		           {
		       		   	?>
			          	<li><a href="../controleur/Accueil.php?deconnexion=true">DECONNEXION</a></li>
			          	<li><a href="../controleur/Page_Personnelle.php">PROFIL</a></li>
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
		</div>
	</body>
</html>