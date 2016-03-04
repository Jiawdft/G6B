<meta charset="UTF-8"> 

<?php


function InscriptionMembre($numeroDuMembre,$Civilite,$Nom,$Prenom,$Age,$CategorieDeSport,$Sport,$Adresse,$Groupe,$AdresseMail,$NumeroDePortable){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$req = $bdd->prepare('INSERT INTO membre(numero_membre, civilite, nom, prenom, age, categorie_de_sport, sport,adresse,groupe,adresse_mail,numero_de_portable) 
		VALUES(:numero_membre, :civilite, :nom, :prenom, :age, :categorie_de_sport, :sport,:adresse,:groupe,:adresse_mail,:numero_de_portable)');
$req->execute(array(
	'numero_membre' => $numeroDuMembre,
	'civilite' => $Civilite,
	'nom' => $Nom,
	'prenom' => $Prenom,
	'age' => $Age,
	'categorie_de_sport' => $CategorieDeSport,
	'sport' => $Sport,
	'adresse' => $Adresse,
	'groupe' => $Groupe,
	'adresse_mail' => $AdresseMail,
	'numero_de_portable' => $NumeroDePortable
	));
echo 'Le membre a été ajouté ';
}
InscriptionMembre(1,'monsieur','Corre','Alexandre','20','combat','judo','75000 paris','','o@gmail.com',0897863840);

function AfficheurMembre($numeroDuMembre){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$reponse = $bdd->query('SELECT * FROM membre ');
	$donnees = $reponse->fetch();

echo 'Nom :' . $donnees['nom'].'     '. 'Prénom :' . $donnees['prenom'];

}
AfficheurMembre(1);

?>