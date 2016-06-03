<?php

if ($_GET['langue']=='fr') {
	include('../Test1/Test_fr.php');
}
else if ($_GET['langue']=='en') {
	include('../Test1/Test_en.php');
}
else {
	include('../Test1/Test_fr.php');
}

?>