<?php
if(!isset($_SESSION['mail'])) {
session_start();
}
if(isset($_GET['langue']) and $_GET['langue']=='fr') {
	$_SESSION['langue']='fr';
}
elseif(isset($_GET['langue']) and $_GET['langue']=='en') {
	$_SESSION['langue']='en';
}

if ($_SESSION['langue']=='fr') {
	include('../Langues/Contact_fr.php');
}
elseif ($_SESSION['langue']=='en') {
	include('../Langues/Contact_en.php');
}
else{
	include('../Langues/Contact_fr.php');
}

include_once('../vue/Contact.php');
?>