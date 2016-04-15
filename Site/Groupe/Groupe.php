<?php
  $nomGroupe='Get fit';
?>


<!DOCTYPE html>
<html>
    <head>
    	<title><?php echo $nomGroupe; ?></title>
    	<link rel="stylesheet" type="text/css" href="../Groupe/Groupe.css" media="screen" />
    	<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
    </head>

    <body>
    	<header>
    		<div class="menu">
		       <div id="left">
		       		<a href="../Accueil/Accueil.php"><img src="../Images/Logos/Sporciety.png" style="height: 4em;" /></a>
		       </div>

		       <ul id="right">
		          	<li><a href="../Sports/Sports.php">LES SPORTS</a></li>
		  	    	<li><a href="../Forum/Forum.php">FORUM</a></li>
		            <li><a href="../Contact/Contact.php">CONTACT</a></li>
		            <li><a href="../Connexion/Connexion.php">CONNEXION</a></li>
		            <li><a href="../Inscription/Inscription.php">INSCRIPTION</a></li>
		            <li><a href="../Aide/Aide.php">AIDE</a></li>
		       </ul>
		   </div>

    	</header>

    	<div class="slider">
			<figure>
	    		<img src="../Images/Wallpaper/Slider.jpg">
	    		<img src="../Images/Wallpaper/Slider2.jpg">
	    		<img src="../Images/Wallpaper/Slider.jpg">
	    		<img src="../Images/Wallpaper/Slider2.jpg">
	    		<img src="../Images/Wallpaper/Slider.jpg">
	  		</figure>
  		</div>

  		<section class="information">
  			<div id="descriptiongroupe">
  				<h1><?php echo $nomGroupe; ?></h1>


  				<p>Ceci est la description du groupe</p>
          <a id="bouton" href="../Groupe/Rejoindre.php">Rejoindre</a>
  			</div>

  			<div>
          <p id="adresse">Club de paris <br> 1 rue de Paris <br>75001 Paris</p>
  			</div>

        <div class="googlemaps" style="text-align: center">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d85161.85430845951!2d2.3617916544987367!3d48.864518359376234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1457358140451" style="height: 100%; width: 45%; border: none;"></iframe>
        </div>


  		</section>

  		<section class="planning">
  			<div id="calendrier">

  			</div>

  			<div id="inscription">
            <?php 
              include"../../BDD.php";
              $bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8','root','root');
              $req = $bdd->query('SELECT `information` FROM `groupe` WHERE`nom`= :nomGroupe');
              $req->execute(array(
                ':nomGroupe' => $nomGroupe
              ));

              $donnees = $req->fetch();
              echo $donnees[`information`];
            ?>
  			</div>
  		</section>

    </body>


    <footer>	

    </footer>

</html>