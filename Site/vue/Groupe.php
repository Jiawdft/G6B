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
          <a id="bouton_rejoindre" href='../controleur/inscription_groupe_membre.php?groupe=<?php echo $_GET['groupe']?>'>Rejoindre</a>
          <?php
        }
        else
        {
            ?>
            <a id="bouton_rejoindre" href='../controleur/Page_Personnelle_mon_groupe.php?groupe=<?php echo $_GET['groupe']?>'>Bienvenue</a>
            <?php
        }
      }
          ?>

  			</div>

  			<div id="event">
          <div id="l_event">
            <?php
          foreach($event as $ev) {
            ?>

            <a href="../controleur/Groupe.php?groupe=<?php echo $groupes['groupe']?>&event=<?php echo $ev['nom']?>#bouton_rejoindre"><?php echo $ev['nom'];?></a>

            <br />
            <br />
            <?php
          }
          ?>
          </div>

          <div id="e_infos">
            <?php

            if(!isset($_GET['event'])) {
              ?>
              <h3>Veuillez sélectionner un évènement pour décourvir les informations qui y sont associées</h3>
              <?php
            }
            foreach ($event as $ev) {
              if (isset($_GET['event']) and $_GET['event']==$ev['nom']) {
                ?>
                <h1 id="inline"> <?php echo $ev['nom']; ?> </h1>
                <h3 id="inline"> Rendez vous le : <?php echo $ev['date'] ?> </h3>
                <h3 id="affiche_description"></h3>
                <script type="text/javascript">
                    document.getElementById('affiche_description').innerHTML="<?php echo $ev['description'] ?>";
                    document.getElementById('affiche_description').innerHTML=document.getElementById('affiche_description').innerText;
                </script>
                <?php
                if (isset($deja_event) and $deja_event=='') {
                  ?>
                  <a id="ins_ev" href='../controleur/inscription_event.php?groupe=<?php echo $_GET['groupe'] ?>&id=<?php echo $ev['id'] ?>'>Inscris toi à <?php echo $_GET['event']; ?></a>
                  <?php
                }
              }
            }
            ?>
          </div>
        </div>

    <div class="localisation">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d85161.85430845951!2d2.3617916544987367!3d48.864518359376234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1457358140451"></iframe>
      <?php
        if(!isset($_GET['event'])) {
          ?>
          <h1>Point de rendez-vous de : </h1>
          <h2>Veuillez sélectionner un évènement ci-dessus</h2>
          <?php
        }
        foreach ($event as $ev) {
          if (isset($_GET['event']) and $_GET['event']==$ev['nom']) {
            ?>
            <h1>Point de rendez-vous de <?php echo $ev['nom']; ?> : </h1>
            <p id="adresse"></p>
            <script type="text/javascript">
                document.getElementById('adresse').innerHTML="<?php echo $ev['adresse'] ?>";
                document.getElementById('adresse').innerHTML=document.getElementById('adresse').innerText;
            </script>
            <?php
          }
        }
      ?>

    </div>

  </body>

  <?php include("../Footer/Footer.php"); ?>

</html>
