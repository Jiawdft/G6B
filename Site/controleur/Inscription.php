<?php

if(!isset($_SESSION['mail']))
{
session_start();
}
include_once('../modele/langue.php');
if(isset($_GET['inscription']) and $_GET['inscription']==true)
{
		if(isset($_POST['Genre']) and isset($_POST['Prenom']) and isset($_POST['Nom']) and isset($_POST['Code_Postal']) and isset($_POST['Adresse_Mail']) and isset($_POST['Mot_de_Passe']))
	{
		if(filter_var($_POST['Adresse_Mail'],FILTER_VALIDATE_EMAIL))
		{
			$_POST['Mot_de_Passe']=htmlspecialchars($_POST['Mot_de_Passe']);
			if(strlen($_POST['Mot_de_Passe'])>=6)
			{
				include'../modele/inscription_membre.php';	
				$_POST['Prenom']=htmlspecialchars($_POST['Prenom']);
				$_POST['Nom']=htmlspecialchars($_POST['Nom']);
				if(isset($_POST['Date_de_Naissance']))
				{
					$Naissance=htmlspecialchars($_POST['Date_de_Naissance']);
				}
				else{$Naissance='';}
				if(isset($_POST['Numéro_de_Téléphone']))
				{
					$telephone=htmlspecialchars($_POST['Numéro_de_Téléphone']);
				}
				else{$telephone='';}
				if(isset($_POST['Adresse']))
				{
					$adresse=htmlspecialchars($_POST['Adresse']);
				}
				else{$adresse='';}
				$_POST['Code_Postal']=htmlspecialchars($_POST['Code_Postal']);
				
				inscription_membre($_POST['Genre'],$_POST['Nom'],$_POST['Prenom'],$Naissance,$_POST['Code_Postal'],$adresse,$_POST['Adresse_Mail'],$telephone,$_POST['Mot_de_Passe']);	
				include'../controleur/Accueil.php';
			}
			else
			{
				$erreur='Mot de passe invalide 6 caractères minimum';
				include'../controleur/Inscription.php';
			}	
		}
		else
		{
			$erreur='Adresse mail invalide';
			include'../controleur/Inscription.php';
		}
	}
	else
	{
		$erreur='informations incomplètes';
		include'../controleur/Inscription.php';
	}

}else{
	
include_once('../vue/Inscription.php');
}



?>