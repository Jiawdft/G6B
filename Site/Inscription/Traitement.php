<?php
	include"../../InscriptionMembre.php";
	if(!isset($_POST['Genre']) OR !isset($_POST['Nom'])OR !isset($_POST['Prenom'])OR !isset($_POST['Date_de_Naisssance'])OR !isset($_POST['Code_Postal'])OR !isset($_POST['Adresse'])OR !isset($_POST['Adresse_Mail'])OR !isset($_POST['Numéro_de_Téléphone'])OR !isset($_POST['Mot_de_Passe']))
	{
		echo 'veuillez saisir toutes les informatons';
	}
	else
	{
		if($_POST['Genre']=="" OR $_POST['Nom']==""OR $_POST['Prenom']==""OR $_POST['Date_de_Naisssance']==""OR $_POST['Code_Postal']==""OR $_POST['Adresse']==""OR $_POST['Adresse_Mail']==""OR $_POST['Numéro_de_Téléphone']==""OR $_POST['Mot_de_Passe']=="")
		{
			echo 'Information incomplète.';

		}
		else
		{
			//module bdd 
			include'../Bdd/Bdd.php';
			$reponse = $bdd->query('SELECT adresse_mail FROM membre');
			while($donnees = $reponse->fetch())
			{
				if($_POST['Adresse_Mail']==$donnees['adresse_mail'])
				{
					echo 'Adresse mail déjà existante, veuillez en choisir une autre ';
					break;
				}
			}	
			if($_POST['Adresse_Mail']!=$donnees['adresse_mail'])
			{	
				InscriptionMembre($_POST['Genre'],$_POST['Nom'],$_POST['Prenom'],$_POST['Date_de_Naisssance'],$_POST['Code_Postal'],$_POST['Adresse'],$_POST['Adresse_Mail'],$_POST['Numéro_de_Téléphone'],$_POST['Mot_de_Passe']);
				echo'réussi';
			}
		}
	}
   
?>