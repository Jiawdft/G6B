<!DOCTYPE html>
<html>
	<head>
		<title>Sporciety</title>
		<link href="#" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>

	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		<?php	
		if(isset($_GET['sujet'])and isset($_GET['sous_sujet'])){
			?>
		<h1><?php echo strtoupper($_GET['sujet']) ?></h1>
		<h3><?php echo $_GET['sous_sujet'] ?></h3>
		<?php
	}?>
	
		
		


	</body>
	<footer>
	</footer>
</html>