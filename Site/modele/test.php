<?php 

include_once'../modele/get_event.php';
$go=get_event('Get fit');
foreach ($go as $test) {
	echo $test['id'];
}

 ?>