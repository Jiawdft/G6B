<?php
session_start();
?>
<?php
if(!isset($_POST['mail']) OR !isset($_POST['passe']))
{
	include('../controleur/Connexion.php');
	echo 'veuillez saisir un identifiant et un mot de passe'.' bonjour';

}
else
{
	if(($_POST['mail']=="" OR $_POST['passe']==""))
	{
		include('../controleur/Connexion.php');
		echo 'veuillez saisir un identifiant et un mot de passe';

	}
	else
	{
		include'../modele/get_membres.php';
		$membres=get_membres('');
		foreach($membres as $membre)
		{

			if($_POST['mail']==$membre['adresse_mail']AND password_verify($_POST['passe'],$membre['mdp']))
			{
				$_SESSION['mail']=$membre['adresse_mail'];
				include'../controleur/Accueil.php';
				break;	
			}
			
		}
	}
}

?>