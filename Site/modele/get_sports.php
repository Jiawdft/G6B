<?php
function get_sports()
{
   	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root' , 'root');
	$req = $bdd->prepare('SELECT * FROM sport ORDER BY sport');						
    $req->execute();
    $sports = $req->fetchAll();
    return $sports;
}