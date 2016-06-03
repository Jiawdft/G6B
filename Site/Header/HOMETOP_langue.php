<?php

if ($_GET['langue']=='fr') {
	include('../Header/HOMETOP_fr.php');
}
else if ($_GET['langue']=='en') {
	include('../Header/HOMETOP_en.php');
}
else {
	include('../Header/HOMETOP_fr.php');
}

?>