<!DOCTYPE html>
<html>
	<head>
		<title>Modification d'un Groupe</title>
		<link href="../vue/ModifGroupe.css" rel="stylesheet" type="text/css" media="screen" />
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
			          	<li><a href="../controleur/session_destroy.php">DECONNEXION</a></li>
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
		    <div class="ModifGroupe">
		    	<h1 style="text-align: center;">MODIFIE LE GROUPE</h1>
		    	<form>
		    		<input type="text" name="Nom du Groupe" placeholder="Entre un nouveau nom de groupe" />
		    		<input type="text" name="Code Postal" placeholder="Votre groupe déménage ? Entre un nouveau code postal" />
		    		<input type="text" name="Description" placeholder="Entre une nouvelle description de groupe" />
		    		<br /><h3>Membres appartenants au groupe :</h3>
		    		<table>
		    			<th>
		    				<tr>
		    					<?php
									include'../modele/get_membres_groupes.php';
									$membregroupe=get_membres_groupes($_SESSION['mail'],'');
									echo $membregroupe;
								?>
		    				</tr>
		    			</th>
		    		</table>
		    		
				    <input type="submit" value="VALIDER" />
				</form>
		    </div>
		</div>
	</body>
</html>