<?php
include'../modele/get_leader_groupe.php';
$leaders=get_leader_groupe('','');
foreach ($leaders as $leader ) {
	# code...

echo $leader['membre'];
}
?>