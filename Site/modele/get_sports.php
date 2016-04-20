<?php
function get_sports($offset, $limit)
{
    //global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
    /*
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT :offset, :limit');
    */
   	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root' , 'root');
	$req = $bdd->prepare('SELECT sport FROM sport ORDER BY sport LIMIT :offset, :limit');						
    
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    
    /*
    $req->execute(array(
        'offset' => $offset,
        'limit' => $limit
        ));
        */
    $sports = $req->fetchAll();
    //echo count($sports).' ok';
    return $sports;
}
//get_sports(0,5);