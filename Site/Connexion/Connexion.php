<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
		<link href="../Connexion/Connexion.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<div class="HOMETOP">
	    	<div class="menu">
		       <div id="left">
		       		<a href="../Accueil/Accueil.html"><img src="../Images/Logos/Sporciety.png" style="height: 4em;" /></a>
		       </div>
		       <ul id="right">
		           <li><a href="../Sports/Sports.html">LES SPORTS</a></li>
		           <li><a href="#">FORUM</a></li>
		           <li><a href="#">CONTACT</a></li>
		           <li><a href="../Connexion/Connexion.html">CONNEXION</a></li>
		           <li><a href="../Inscription/Inscription.html">INSCRIPTION</a></li>
		           <li><a href="#">AIDE</a></li>
		       </ul>
		    </div>
		    <div class="Connexion">
			  <h1 style="text-align: center;">CONNECTEZ-VOUS</h1>
			  <form method="post" action="traitement.php">
			    <input type="email" name="mail" placeholder="Adresse Mail" />
			    <input type="password" name="passe" placeholder="Mot de Passe" />
			    <input type="submit" value="CONNEXION" />
			  </form>
			  <a id="inscription" href="#">Pas encore inscrit ? Inscris toi !</a>
			  <div id="social" style="text-align: center; margin-top: 10%">
				<a href="https://www.facebook.com/workoutsociety/?ref=aymt_homepage_panel"><img src="../Images/Logos/Fb.png"></a>
		    	<a href="https://twitter.com/?lang=fr"><img src="../Images/Logos/Tw.png"></a>
				<a href="https://www.instagram.com"><img src="../Images/Logos/Insta.png"></a>
		    	<a href="https://www.pinterest.com"><img src="../Images/Logos/Pint.png"></a>
			</div>
		</div>
	</body>
</html>