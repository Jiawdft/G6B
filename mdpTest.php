<?php
 
function hashPassword( $pwd )
{
    return sha1('e*?g^*~Ga7' . $pwd . '9!cF;.!Y)?');
}

function NewPassword($pwd){
$hash = password_hash($pwd,PASSWORD_DEFAULT);
	return$hash;
}

function PasswordVerify($saisi,$password){
if(password_verify($saisi,$password)){
	echo 'bon mdp'.'</br>';
}else{
	echo 'mauvais mdp'.'</br>';
}
}


function RechercheMdp($AdresseMail){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$req = $bdd->prepare('SELECT mdp FROM membre WHERE adresse_mail = :adresse_mail');
	$req->execute(array(
		':numero_membre' => $AdresseMail
		));
		$donnees = $req->fetch();
	return $donnees['mdp'];

}
 

?>