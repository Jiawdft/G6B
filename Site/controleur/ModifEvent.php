<?php
if(!isset($_SESSION['mail']))
{
session_start();
}



include_once'../modele/modif_event.php';
modif_event($_GET['id'],);
