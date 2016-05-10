<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link href="CreerGroupe.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<div class="HOMETOP">
	    	<div class="menu">
		       <div id="left">
		       		<a href="../controleur/Accueil.php"><img src="Images/Logos/Sporciety.png" style="height: 3.8em;" /></a>
		       </div>
		       <ul id="right">
		            <li><a href="../controleur/Sports.php">LES SPORTS</a></li>
		           <li><a href="../controleur/Forum.php">FORUM</a></li>
		           <li><a href="../controleur/Contact.php">CONTACT</a></li>
		           <?php if(isset($_SESSION['mail'])){
			          	?>
			          	<li><a href="../controleur/session_destroy.php">DECONNEXION</a></li>
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
		    <div class="Creation">
		    	<h1 style="text-align: center;">CREER UN GROUPE</h1>
		    	<form action='' method="post">
		    		<input type="text" name="NomG" placeholder="Nom du Groupe" />
					<select name="choix">
					    <option value=''>Sport</option>
					    <?php
						include_once('../modele/get_sports.php');
						$sports = get_sports('');
						foreach($sports as $sport)
						{
							?>
							<option value= <?php echo $sport['sport'] ?>><?php echo ucfirst(strtolower($sport['sport'])) ?></option>
							<?php
						}
						?>
					</select>
		    		<textarea type="text" name="Description" placeholder="Description du groupe"></textarea>
		    		<input type="text" name="RégionG" placeholder="Région" />
		    		<input type="text" name="AdresseG" placeholder="Adresse" />
				    <input type="submit" value="CREER" />
				</form>
				<div id="social" style="text-align: center; margin-top: 10%">
				<a href="https://www.facebook.com/workoutsociety/?ref=aymt_homepage_panel"><img src="../Images/Logos/Fb.png"></a>
		    	<a href="https://twitter.com/?lang=fr"><img src="../Images/Logos/Tw.png"></a>
				<a href="https://www.instagram.com"><img src="../Images/Logos/Insta.png"></a>
		    	<a href="https://www.pinterest.com"><img src="../Images/Logos/Pint.png"></a>
			</div>
		    </div>
		</div>
	</body>
</html>