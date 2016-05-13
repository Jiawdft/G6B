<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if($_SESSION['mail']=='' or !isset($_SESSION['mail'])or !isset($_GET['groupe'])or$_GET['groupe']==''){
	include_once'../controleur/Accueil.php';

}

include'../modele/get_membres_groupes.php';
include'../modele/get_membres.php';
$mails= get_membres_groupes('',$_GET['groupe']);
$membres=get_membres('');
include'../vue/Page_Personnelle_mon_groupe.php';
?>