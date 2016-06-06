<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
include'../vue/admin.php';

include_once('../modele/langue.php');

?>