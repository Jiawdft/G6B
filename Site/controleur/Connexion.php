<?php
if(!isset($_SESSION['mail'])) {
session_start();
}

include_once('../vue/Connexion.php');

include_once('../modele/langue.php');
?>