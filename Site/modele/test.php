<?php 

include_once'../modele/get_membres_groupes.php';
$go=get_membres_groupes('','');
foreach ($go as $test) {
	echo $test['groupe'];
}

 ?>