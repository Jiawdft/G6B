<?php
include_once('../modele/get_sports.php');
$sports = get_sports('');

foreach($sports as $cle => $sport)
{
	$sports[$cle]['sport'] = htmlspecialchars($sport['sport']);
}


include_once('../vue/Sports.php');