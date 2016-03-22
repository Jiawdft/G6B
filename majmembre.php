<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

	<body>

		<?php
			function majmembre($adresse_mail, $adresse, $codepostal, $Numero_de_portable)
			{
				$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

				if ($adresse != "") {
					$reponse = $bdd->prepare('UPDATE `membre` SET `adresse`=:adresse WHERE `adresse_mail`= :adresse_mail')
					$reponse->excute(array(
						'adresse' => $adresse,
					));
				}

				if ($codepostal != "") {
					$reponse = $bdd->prepare('UPDATE `membre` SET `codepostal`=:codepostal WHERE `adresse_mail`= :adresse_mail')
					$reponse->excute(array(
						'codepostal' => $codepostal,
					));
				}

				if ($numero_de_portable != "") {
					$reponse = $bdd->prepare('UPDATE `membre` SET `numero_de_portable`=:numero_de_portable WHERE `adresse_mail`= :adresse_mail')
					$reponse->excute(array(
						'numero_de_portable' => $numero_de_portable,
					));
				}

				echo 'Les parametre du membre sont enregistre.'.'</br>';
			}
			majmembre('jiaw@isep.fr', '2 rue de paris', '75002', '' );
		?>

	</body>

	<footer>
	</footer>


</html>