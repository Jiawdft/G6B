<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
include'../modele/inscription_sport.php';
include'../vue/Add_Sport.php';
?>