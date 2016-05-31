<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
<<<<<<< HEAD
if(isset($_POST['resultat'])){
	include('../modele/add_post.php');
	add_post('')
} 
else{
=======
if(isset($_POST['resultat_message'])){
include_once'../modele/add_post.php';
add_post($_POST['resultat_message'],$_SESSION['mail'],$_GET['sujet'],$_GET['sous_sujet']);
}
>>>>>>> 3f85f4c1b061b55ecc7e4786acdf66f55d45ae18
include_once('../vue/Post.php');
}
?>