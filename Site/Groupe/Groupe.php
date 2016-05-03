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
          <a id="bouton_rejoindre" href="../Groupe/Rejoindre.php">Rejoindre</a>
  			</div>



  		</section>

  		<section class="planning">
  			<div id="event"> 
          <h2>Prochainement :</h2>
          <h1>Fit Party</h1>
          <p>La déscription de l'event</p>
          <h3>03/06/2016</h3>
          <a id="bouton_inscription_event" href="../Groupe/Inscription_event.php">Inscription</a>
  			</div>

  		</section>

      <section id="localisation">
        <div>
          <p id="adresse">Club de paris <br> 1 rue de Paris <br>75001 Paris</p>
        </div>

        <div class="googlemaps" style="text-align: center">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d85161.85430845951!2d2.3617916544987367!3d48.864518359376234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1457358140451" style="height: 100%; width: 45%; border: none;"></iframe>
        </div>
      </section>

    </body>


    <footer>	
      <div class="organisation">
        <h3>Partenaires premium</h3>
         <table>
           <tbody>
           <tr>
              <td><img src="../Images/Logos/WebAward.png"><br><a>Awwwards : Best Web Design</a><br/></td>
             <td></td>
              <td><br><img src="../Images/Logos/Nike.png"><br/></td>
              <td><img src="../Images/Logos/Powerade.png"><br/></td>
              <td><br><img src="../Images/Logos/BNP.png"><br/></td>
           </tr>
            <div id="L1"></div>
            <tr>
             <td><h4 href="#"><br>Aide<br/></h4></td>
             <td><h4 href="#"><br>Langue<br/></h4></td>
             <td><h4 href="#"><br>Contact<br/></h4></td>
             <td><h4 href="#"><br>Plan du Site<br/></h4></td>
             <td><h4 href="#"><br>Mentions légales<br/></h4></td>
           </tr>
         </tbody>
       </table>
        <div id="L2"></div>
     </div>
     <div id="social" style="text-align: center">
        <a href="https://www.facebook.com/workoutsociety/?ref=aymt_homepage_panel"><img src="../Images/Logos/Fb.png"></a>
          <a href="https://twitter.com/?lang=fr"><img src="../Images/Logos/Tw.png"></a>
        <a href="https://www.instagram.com"><img src="../Images/Logos/Insta.png"></a>
          <a href="https://www.pinterest.com"><img src="../Images/Logos/Pint.png"></a>
      </div>
      <div id="copyright" style="text-align: center">
        <a>Copyright www.sportciety.com </a>
        <a><br>Sportciety : 28 Rue Notre Dame des Champs, 75006 Paris </br></a>
      </div>
    </footer>

</html>