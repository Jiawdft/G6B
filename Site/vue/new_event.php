<!DOCTYPE html>
<html>
<head>
   	<title>Créer votre événement</title>
    <link rel="stylesheet" type="text/css" href="../vue/new_event.css" media="screen" />
    <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
</head>
<body>
	<?php include("../Header/HOMETOP Slider.php"); ?>

	<div class="Creation">
		<h1 style="text-align: center;">CREER UN EVENEMENT</h1>

		<form action='../controleur/new_event.php' method="post">
			<input type="text" name="nom_event" placeholder="Nom du l'événement" />
			<textarea type="text" name="description" placeholder="Description de l'événement"></textarea>
			<textarea type="text" name="adresse" placeholder="Adresse ou a lieu l'événement"></textarea>
			<input type="datetime-local" name="date">
			<?php
				if(isset($erreur) and $erreur!=""){?>
				<h4><?php echo $erreur?></h4><?php
			}?>
			<input type="submit" value="CREER" />
		</form>
	</div>
	<div id="social" style="text-align: center; margin-top: 10%">
		<a href="https://www.facebook.com/workoutsociety/?ref=aymt_homepage_panel"><img src="../Images/Logos/Fb.png"></a>
		<a href="https://twitter.com/?lang=fr"><img src="../Images/Logos/Tw.png"></a>
		<a href="https://www.instagram.com"><img src="../Images/Logos/Insta.png"></a>
		<a href="https://www.pinterest.com"><img src="../Images/Logos/Pint.png"></a>
	</div>

</body>
</html>