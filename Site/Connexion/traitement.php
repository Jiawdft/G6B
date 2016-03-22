
<meta charset="UTF-8"> 
<?php
include('mdpTest.php');
if((!isset($_POST['Adresse_Mail']) AND !isset($_POST['Mdp'])))
{
	echo 'veillez saisir un identifiant';
}
else
{
	if(($_POST['Adresse_Mail']=="" AND $_POST['Mdp']==""))
	{
		echo 'veillez saisir un identifiant';

	}
	else
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
		$req = $bdd->query('SELECT adresse_mail,mdp FROM membre');
		while($donnees = $req -> fetch())
		{

			if($_POST['Adresse_Mail']==$donnees['adresse_mail']AND Passwordverify($_POST['Mdp'],$donnees['mdp']))
			{
				echo 'bien joué';
				break;	
				break;
			}
			
		}
		echo 'echec'.'</br>';
	}
}


?>