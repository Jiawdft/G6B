<?php
session_start();
?>
<?php
if(!isset($_POST['mail']) OR !isset($_POST['passe']))
{
	include('../controleur/Connexion.php');

}
else
{
	if(($_POST['mail']=="" OR $_POST['passe']==""))
	{
		include('../controleur/Connexion.php');

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