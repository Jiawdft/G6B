<?php

$host='localhost';
$dbname='test_site_internet';
$id='root';
$mdp='root';

$bdd = new PDO('mysql:host='$host';dbname='$dbname';charset=utf8', '$id', '$mdp');
echo 'connecter';
	
?>