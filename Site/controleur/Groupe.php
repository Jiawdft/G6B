<?php
if(!isset($_SESSION['mail']))
{
session_start();
}

	include_once('../vue/Groupe.php');