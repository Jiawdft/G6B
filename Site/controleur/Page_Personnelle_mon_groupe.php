<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if($_SESSION['mail']=='' or !isset($_SESSION['mail'])){
	include_once'../controleur/Accueil.php';

}
include'Page_Personnelle_mon_groupe.php';
?>