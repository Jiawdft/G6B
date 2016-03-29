
<meta charset="UTF-8"> 
<?php
include('mdpTest.php');
echo $_POST['mail'];
if(!isset($_POST['mail']) OR !isset($_POST['passe']))
{
	echo 'veuillez saisir un identifiant et un mot de passe'.' bonjour';
}
else
{
	if(($_POST['mail']=="" OR $_POST['passe']==""))
	{
		echo 'veuillez saisir un identifiant et un mot de passe';

	}
	else
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
		$req = $bdd->query('SELECT adresse_mail,mdp FROM membre');
		while($donnees = $req -> fetch())
		{

			if($_POST['mail']==$donnees['adresse_mail']AND Passwordverify($_POST['passe'],$donnees['mdp']))
			{
				echo '</br>'.'bien joué';
				break;	
			}
			
		}
		if(!$donnees = $req-> fetch())
		{

		echo 'echec'.'</br>';
		}
	}
}


?>