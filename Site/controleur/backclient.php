<?php
/*
if(!isset($_SESSION['mail']))
{
session_start();
}
$Admin="o@gmail.com";
if($_SESSION['mail']!=$Admin){
	include_once('../controleur/Accueil.php');
}else{
*/
if(!isset($_SESSION['mail'])){
session_start()
}
include_once'../modele/get_admin.php';
$mail=get_admin()
if(!isset($_SESSION['mail'])){

	include_once'../controleur/backconnexion.php';
}
else{
	include_once'../modele/get_admin.php';
	$mail=get_admin($_SESSION['mail']);
	if($mail['mail']!=$_SESSION['mail'])
	{
		include_once'../controleur/backconnexion.php';
	}
	else
	{
		if(isset($_GET['Membre']) and $_GET['Membre']==true){
			include_once'../modele/delete_membre.php';
			include_once'../modele/delete_leader_groupe.php';
			include_once'../modele/delete_membre_groupe.php';
			foreach($_POST['case'] as $case){
				delete_membre($case);
				delete_membre_groupe($case,'');
				delete_leader_groupe($case,'');
			}
			include_once'../Back Office/backclient.php';
		}
		if(isset($_GET['Groupe']) and $_GET['Groupe']==true){
			include_once'../modele/delete_groupe.php';
			include_once'../modele/delete_leader_groupe.php';
			include_once'../modele/delete_membre_groupe.php';
			include_once'../modele/delete_club_groupe.php';
			include_once'../modele/delete_sport_groupe.php';
			include_once'../modele/delete_event.php';
			foreach($_POST['case'] as $case){
				delete_sport_groupe('',$case);
				delete_groupe($case);
				delete_membre_groupe('',$case);
				delete_leader_groupe('',$case);
				delete_club_groupe('',$case);
				delete_event($case);
			}include_once'../Back Office/backclient.php';
		}
		if(isset($_GET['Groupe']) and $_GET['Groupe']=='Modif'){
			include_once'../modele/modif_groupe.php';
			//modif_groupe();
		}
		if(isset($_GET['Sport']) and $_GET['Sport']==true){
			include_once'../modele/delete_sport.php';
			include_once'../modele/delete_sport_groupe.php';
			foreach($_POST['case'] as $case){
				delete_sport($case);
				delete_sport_groupe($case,'');
			}
			include_once'../Back Office/backclient.php';
		}
		if(isset($_GET['Sport']) and $_GET['Sport']=='Modif'){
			include_once'../modele/modif_sport.php';
			//modif_sport();
		}
		/*
		if(isset($_GET['Image']) and $_GET['Image']==true){
			include_once'../modele/upload.php';

		//include_once('../Back Office/backclient.php');
		}
		*/
		if(isset($_GET['Forum']) and $_GET['Forum']==true){
			include_once'../modele/delete_post.php';
			foreach($_POST['case'] as $case){
				delete_post($case);
			}
		include_once'../vue/backclient.php';
		}

	}
}
?>