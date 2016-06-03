<?php

if ($_GET['langue']=='fr') {
	include('../Header/HOMETOP Slider_fr.php');
}
else if ($_GET['langue']=='en') {
	include('../Header/HOMETOP Slider_en.php');
}
else {
	include('../Header/HOMETOP Slider_fr.php');
}

?>