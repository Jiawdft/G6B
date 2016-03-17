<meta charset="UTF-8"> 

<?php

include 'mdpTest.php';

function InscriptionMembre($Civilite,$Nom,$Prenom,$DateNaissance,$CodePostal,$Adresse,$AdresseMail,$NumeroDePortable,$Mdp){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$req = $bdd->prepare('INSERT INTO membre(id_membre,civilite, nom, prenom, age,codepostal,adresse,adresse_mail,numero_de_portable,mdp) 
		VALUES(:id_membre,:civilite, :nom, :prenom, :age,:codepostal, :adresse,:adresse_mail,:numero_de_portable,:mdp)');
$req->execute(array(
	'id_membre' => 0,
	'civilite' => $Civilite,
	'nom' => $Nom,
	'prenom' => $Prenom,
	'age' => $DateNaissance,
	'codepostal'=>$CodePostal,
	'adresse' => $Adresse,
	'adresse_mail' => $AdresseMail,
	'numero_de_portable' => $NumeroDePortable,
	'mdp'=> NewPassword($Mdp)
	));
echo 'Le membre a été ajouté '.'</br>'.NewPassword($Mdp).'</br>';
}


//InscriptionMembre('monsieur','Corre','Alexandre','20',75000 ,'paris','o@gmail.com','0897863840','coucou');
//InscriptionMembre('monsieur','Corre','bob','20',75000 ,'paris','op@gmail.com','0897863840','coucou');

function AfficheurMembre($AdresseMail){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$reponse = $bdd->query('SELECT * FROM membre');
	$donnees = $reponse->fetch();
	while($donnees['adresse_mail']<>$AdresseMail){
		$donnees = $reponse->fetch();
	}

echo 'Nom :' . $donnees['nom'].' Prénom :' . $donnees['prenom'].' Numéro de portable : '.$donnees['numero_de_portable'].' Age : '.$donnees['age'].' Adresse mail:'.$donnees['adresse_mail'].'</br>';
}
//AfficheurMembre(36);


/*
echo 'mdp: '.'</br>'.RechercheMdp(46).'</br>';
PasswordVerify('coucou',RechercheMdp(46));
PasswordVerify('coucou',RechercheMdp(47));
*/
?>