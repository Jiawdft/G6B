<!DOCTYPE html>
<html>
  <head>
  	<title><?php echo $_GET['groupe']; ?></title>
  	<link rel="stylesheet" type="text/css" href="../vue/Groupe.css" media="screen" />
  	<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
    <script type="text/javascript" src="../vue/Groupe.js"></script>
  </head>
  <body>

    <?php include("../Header/HOMETOP Slider.php"); ?>

    <div class="slider">
			<figure>
	    		<img src="../Images/Wallpaper/get_fit.jpg">
	    		<img src="../Images/Wallpaper/get_fit1.jpg">
	    		<img src="../Images/Wallpaper/get_fit.jpg">
	    		<img src="../Images/Wallpaper/get_fit1.jpg">
	    		<img src="../Images/Wallpaper/get_fit.jpg">
	  		</figure>
  	</div>
	
		<div id="descriptiongroupe">
			<h1><?php echo $_GET['groupe']; ?></h1>
      <div id="modg">
        <a href="../controleur/ModifGroupe.php">Modifier le Groupe</a>
      </div>
      <p style="padding-bottom: 16em;"><?php echo $groupes['information'] ?></p>

      <?php 
      if (!isset($_SESSION['mail'])) {
      ?>
      <a id="bouton_rejoindre" href='../controleur/Connexion.php'>Rejoindre</a>
      <?php 
      }
      else {
        if ($deja_membre=='') {
          ?>
<<<<<<< Updated upstream
          <a id="bouton_rejoindre" href='../controleur/Connexion.php'>Rejoindre</a>
          <?php 
          }
          else {
            if ($deja_membre=='') {
              ?>
              <a id="bouton_rejoindre" href='../controleur/inscription_groupe_membre.php?groupe=<?php echo $_GET['groupe']?>'>Rejoindre</a>
            <?php
            }
            else{
              ?>
              <a id="bouton_rejoindre" href='../controleur/Page_Personnelle_mon_groupe.php?groupe=<?php echo $_GET['groupe']?>'>Bienvenue</a>
              <?php
            }
          }
          ?>  
          
  			</div>

  		</section>
  		<section class="planning">
  			<div id="event"> 
          <h2>Prochainement :</h2>

          
          <?php foreach($event as $ev){
            ?>
            <h4><?php echo $ev['nom'];?><h4>
            <?php
          }
          ?>

          <!--
          <h1> <?php echo $next_event['nom']; ?> </h1>
          <p> <?php echo $next_event['description'] ?> </p>
          <h3> <?php echo $next_event['date'] ?> </h3>
          -->
          <?php 
          if (!isset($_SESSION['mail'])) {
=======
          <a id="bouton_rejoindre" href='../controleur/inscription_groupe_membre.php?groupe=<?php echo $_GET['groupe']?>'>Rejoindre</a>
        <?php
        }
        else{
>>>>>>> Stashed changes
          ?>
          <a id="bouton_rejoindre" href='../controleur/Page_Personnelle_mon_groupe.php?groupe=<?php echo $_GET['groupe']?>'>Bienvenue</a>
          <?php
        }
      }
      ?>  
		</div>

		<div id="event"> 
      <?php
        include_once'../modele/get_event.php';
        $events=get_event('');
        foreach ($events as $event) {?> <h3><?php
          echo $event['groupe'];?></h3>
          <br />
          <br />
        }
      ?>
		</div>

    <div class="localisation">
      <h1>Point de rendez-vous de Fit Party : </h1>
      <p id="adresse"> <?php echo $next_event['adresse']; ?> </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d85161.85430845951!2d2.3617916544987367!3d48.864518359376234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1457358140451"></iframe>
    </div>
  
  </body>

  <?php include("../Footer/Footer.php"); ?>
  
</html>