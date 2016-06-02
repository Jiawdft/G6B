<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if(isset($_POST['resultat']) and isset($_SESSION['mail'])){


include_once'../modele/add_post.php';
add_post($_POST['resultat'],$_SESSION['mail'],$_GET['sujet'],$_GET['sous_sujet']);
}
include_once('../vue/Post.php');


?>