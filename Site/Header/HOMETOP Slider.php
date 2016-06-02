<!DOCTYPE html>
<html>
	<head>
		<link href="../Header/HOMETOP Slider.css" rel="stylesheet" type="text/css" media="screen" />
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
	                   	<th id="marge_d"><a href="../controleur/Aide.php">AIDE</a></th>
	                   	<th class="langue">
							<li>
								<p>FR <img src="../Images/Logos/Triangle.png"></p>
								<ul>
									<li id="bottom1"><a href="#">FR</a></li>
									<li id="bottom2"><a href="#">EN</a></li>
								</ul>
							</li>
	                   	</th>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>