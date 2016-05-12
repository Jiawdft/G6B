<!DOCTYPE html>
<html>
	<head>
		<link href="../Header/HOMETOP.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<div class="menu">
			<div id="left">
				<table>
					<tr>
						<th><a href="../controleur/Accueil.php"><img src="../Images/Logos/Sporciety.png"></a></th>
					</tr>
				</table>
			</div>
			<div id="right">
				<table>
					<tr>
						<th><a href="../controleur/Sports.php">LES SPORTS</a></th>
						<th><a href="../controleur/Forum.php">FORUM</a></th>
	                   	<th><a href="../controleur/Contact.php">CONTACT</a></th>

	                   	<?php if (isset($_SESSION['mail'])) { ?>
	                   	<th><a href="../controleur/Accueil.php?deconnexion=true">DECONNEXION</a></th>
	                   	<th><a href="../controleur/Page_Personnelle.php">PROFIL</a></th>

	                   	<?php } else { ?>
	                   	<th><a href="../controleur/Connexion.php">CONNEXION</a></th>
	                   	<th><a href="../controleur/Inscription.php">INSCRIPTION</a></th>

	                   	<?php } ?>
	                   	<th><a href="../controleur/Aide.php">AIDE</a></th>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>