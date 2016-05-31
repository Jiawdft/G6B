<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
$Admin="o@gmail.com"
if($_SESSION['mail']!=$Admin){
	include_once('../controleur/Accueil.php');
}else{

if(isset($_Get['Membre']) and $_Get['Membre']==true){
	include_once'../modele/delete_membre.php';
	include_once'../modele/delete_leader_groupe.php';
	include_once'../modele/delete_membre_groupe.php';
	foreach($_POST['case'] as $case){
		delete_membre($case);
		delete_membre_groupe($case,'');
		delete_leader_groupe($case,'');
	}
}
if(isset($_Get['Membre']) and $_Get['Membre']=='Modif'){
	include_once'../modele/modif_membre.php';
	//modif_membre();
}
if(isset($_Get['Groupe']) and $_Get['Groupe']==true){
	include_once'../modele/delete_groupe.php';
	include_once'../modele/delete_leader_groupe.php';
	include_once'../modele/delete_membre_groupe.php';
	include_once'../modele/delete_club_groupe.php';
	include_once'../modele/delete_event.php';
	foreach($_POST['case'] as $case){
		delete_groupe($case);
		delete_membre_groupe('',$case);
		delete_leader_groupe('',$case);
		delete_club_groupe('',$case);
		delete_event($case);
	}
}
if(isset($_Get['Groupe']) and $_Get['Groupe']=='Modif'){
	include_once'../modele/modif_groupe.php';
	//modif_groupe();
}
if(isset($_Get['Sport']) and $_Get['Sport']==true){
	include_once'../modele/delete_sport.php';
	include_once'../modele/delete_sport_groupe.php';
	foreach($_POST['case'] as $case){
		delete_sport($case);
		delete_sport_groupe($case,'');
	}
}
if(isset($_Get['Sport']) and $_Get['Sport']=='Modif'){
	include_once'../modele/modif_sport.php';
	//modif_sport();
}

if(isset($_Get['Image']) and $_Get['Image']==true){
	include_once'../modele/upload.php';

include_once('../Back Office/backclient..php');
}
?>