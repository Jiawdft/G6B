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
      if (!isset($_SESSION['mail']))
      {
        ?>
        <a id="bouton_rejoindre" href='../controleur/Connexion.php'>Rejoindre</a>
        <?php 
      }
      else
      {
        if ($deja_membre=='')
        {
          ?>
          <a id="bouton_rejoindre" href='../controleur/Connexion.php'>Rejoindre</a>
          <?php 
        }
        else
        {
          if ($deja_membre=='')
          {
            ?>
            <a id="bouton_rejoindre" href='../controleur/inscription_groupe_membre.php?groupe=<?php echo $_GET['groupe']?>'>Rejoindre</a>
          <?php
          }
          else
          {
            ?>
            <a id="bouton_rejoindre" href='../controleur/Page_Personnelle_mon_groupe.php?groupe=<?php echo $_GET['groupe']?>'>Bienvenue</a>
            <?php
          } } } ?></div>


          
  			<div id="event">

        
        <h3>Veuillez sélectionner un évènement pour décourvir les informations qui y sont associées</h3>

          
          <?php 
          $a=0;
          foreach($event as $ev) {?>
          <h3 onclick="bascule('div2'); return false;"><?php echo $ev['nom'].'bouton'?></h3>
            <div id='div2' style='display:none;'>
              <div id="e_infos"> 
          <table><tbody>
            <h1> <?php echo $ev['nom'].'coucou'; ?> </h1>
            <p> <?php echo $ev['description'] ?></p>
            <h3> <?php echo $ev['date'] ?> </h3>
            <h1>Point de rendez-vous de <?php echo $ev['nom']?> : </h1>
            <p id="adresse"> <?php echo $next_event['adresse']; ?> </p>
          </tbody></table>

            
            <!--
            <a href="../controleur/Groupe.php?groupe=<?php echo $_GET['groupe']?>&event=<?php echo $ev['nom']?>"><?php echo $ev['nom'];?></a>
            -->

            <br />
            <br />
          </div>
        </div>
            <?php
          }
          ?>
          
        </div>         
          
          <!--
          <h1> <?php echo $next_event['nom']; ?> </h1>
          <p> <?php echo $next_event['description'] ?> </p>
          <h3> <?php echo $next_event['date'] ?> </h3>
          -->
  

    <div class="localisation">
      <h1>Point de rendez-vous de Fit Party : </h1>
      <p id="adresse"> <?php echo $next_event['adresse']; ?> </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d85161.85430845951!2d2.3617916544987367!3d48.864518359376234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1457358140451"></iframe>
    </div>
  
  </body>

  <?php include("../Footer/Footer.php"); ?>
  
</html>