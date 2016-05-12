<!DOCTYPE html>
<html>
	<head>
		<title>H&S</title>
		<link href="../Test/H&S.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>

		<?php include("../Test/HOMETOP.php"); ?>

	    <div class="slider">
			<figure>
	    		<img src="../Site/Images/Wallpaper/get_fit.jpg">
	    		<img src="../Site/Images/Wallpaper/get_fit1.jpg">
	    		<img src="../Site/Images/Wallpaper/get_fit.jpg">
	    		<img src="../Site/Images/Wallpaper/get_fit1.jpg">
	    		<img src="../Site/Images/Wallpaper/get_fit.jpg">
	  		</figure>
  		</div>
  		<section class="information">
  			<div id="descriptiongroupe">
  				<h1><?php echo $_GET['groupe']; ?></h1>
          		<div id="modg">
            		<a href="#">Modifier le Groupe</a>
          		</div>
          	<p style="padding-bottom: 16em;"><?php echo $groupes['information'] ?></p>
          	<?php 
          	if (!isset($_SESSION['mail'])) {
          	?>
          	<a id="bouton_rejoindre" href='../controleur/Connexion.php'>Rejoindre</a>
          	<?php 
          	}
          	else {
            	$deja_membre=get_membres_groupes($_SESSION['mail'],$_GET['groupe']);
            if($deja_membre['membre']=''){
          	?>
          	<a id="bouton_rejoindre" href='../controleur/Accueil.php'>Rejoindre</a>
          	<?php
            	}
          	}
          	?>  
  			</div>
  		</section>
  		<section class="planning">
  			<div id="event"> 
          		<h2>Prochainement :</h2>
	          	<h1>Fit Party</h1>
	          	<p>Après le succès considérable de 2014, Get Fit et Sporciety se réunissent une nouvelle fois pour vous offrir « la plus belle salle de fitness du monde ». <br> Avec cette année, une scène géante de 60 mètres de long et plus de 50 trainers venus du monde entier ! 
	              <br> <br/> <strong>AU PROGRAMME :</strong> <br> <br/> - Un remix détonnant de 9 cours proposés par les meilleurs trainers d'Europe avec en guest star Mr Gandalf Archer Mills, <br> chorégraphe LES MILLS de Nouvelle Zélande. Venez découvrir en avant-premiere les nouvelles chorégraphies LES MILLS !</p>
	          	<h3>03/06/2016</h3>
	          	<a id="bouton_inscription_event" href='../controleur/Groupe.php?groupe=<?php echo $_GET['groupe']?>'>Inscription</a>
	  		</div>
  		</section>
  		<div class="localisation">
        	<h1>Point de rendez-vous de Fit Party : </h1>
        	<p id="adresse">Club de paris <br> 1 Rue de Paris <br>75001 Paris</p>
	        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d85161.85430845951!2d2.3617916544987367!3d48.864518359376234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1457358140451"></iframe>
      	</div>
	</body>
</html>