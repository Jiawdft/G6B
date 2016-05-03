<?php
function get_sports($offset, $limit)
{

    $offset = (int) $offset;
    $limit = (int) $limit;
    
   	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root' , 'root');
	$req = $bdd->prepare('SELECT sport FROM sport ORDER BY sport LIMIT :offset, :limit');						
    
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    
    $sports = $req->fetchAll();
    return $sports;
}