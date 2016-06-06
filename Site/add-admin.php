<?php
include 'modele/password_maker.php';

$SporcietyMail=htmlspecialchars('sporciety@gmail.com');
$SporcietyMdp=htmlspecialchars('sporcietyadmin');

	function inscription_membre($SporcietyMail,$SporcietyMdp){
		//include_once'/modele/connexion_sql.php';
		$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
		$req = $bdd->prepare('INSERT INTO admin(adresse_mail,passe) 
			VALUES(:adresse_mail,:passe)');
		$req->execute(array('adresse_mail' => $SporcietyMail, 'passe'=> password_maker($SporcietyMdp)));
	}

inscription_membre($SporcietyMail,$SporcietyMdp);
echo "Sporciety a bien été défini comme Admin";

?>