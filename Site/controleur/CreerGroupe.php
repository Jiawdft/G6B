<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
include'../modele/get_sports.php';

$sports = get_sports('');
foreach($sports as $cle => $sport)
{
	$sports[$cle]['sport'] = htmlspecialchars($sport['sport']);
}

include_once'../vue/CreerGroupe.php'
?>