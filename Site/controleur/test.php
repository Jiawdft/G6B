<?php 

	if(!isset($_SESSION['mail']))
	{
	session_start();
	}
	include_once'../modele/get_membres_groupes.php';
	$test=get_membres_groupes('k@gmail.com','Get fit');
	echo $test['membre'];



