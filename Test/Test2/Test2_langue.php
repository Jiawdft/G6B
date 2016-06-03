<?php

if ($_GET['langue']=='fr') {
	include('../Test2/Test2_fr.php');
}
else if ($_GET['langue']=='en') {
	include('../Test2/Test2_en.php');
}
else {
	include('../Test2/Test2_fr.php');
}

?>