<?php
?>
<?php
if(!isset($_POST['mail']) OR !isset($_POST['passe']))
{
<<<<<<< HEAD:Site/test/test_session.php
=======
	$erreur="Veuillez saisir votre adresse mail ";
>>>>>>> origin/master:Site/controleur/test_session.php
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
session_start();
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