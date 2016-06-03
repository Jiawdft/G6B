<?php

if (isset($_GET['langue']) and $_GET['langue']=='fr') {
	session_start();
	$_SESSION['langue']='fr';
	include('../Header/HOMETOP Slider_fr.php');
}
else if (isset($_GET['langue']) and $_GET['langue']=='en') {
	session_start();
	$_SESSION['langue']='en';
	include('../Header/HOMETOP Slider_en.php');
}
else {
	include('../Header/HOMETOP Slider_fr.php');
}

?>