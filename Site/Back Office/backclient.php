<!DOCTYPE html>
<html>
	<head>
		<title>Back Office</title>
		<link href="../Back Office/backclient.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
	    
		<?php include("../Header/HOMETOP.php"); ?>

		<div class="bo">
			<script language="javascript" type="text/javascript">
			function bascule(elem)
			   {
			   etat=document.getElementById(elem).style.display;
			   if(etat=="none"){
			   document.getElementById(elem).style.display="block";
			   }
			   else{
			   document.getElementById(elem).style.display="none";
			   }
			   }
			</script>
			<h1> Page Administrateur </h1>
			<div id="Membres">
				<h3 onclick="bascule('m'); return false;">Membres</h3>
				<div id='m' style='display:none;'>
					<p>Liste des Membres :</p>
				</div>
			</div>

			<div id="Groupes">
				<h3 onclick="bascule('g'); return false;">Groupes</h3>
				<div id='g' style='display:none;'>
					<p>Liste des Groupes :</p>
				</div>
			</div>

			<div id="Sports">
				<h3 onclick="bascule('s'); return false;">Sports</h3>
				<div id='s' style='display:none;'>
					<p>Liste des Sports :</p>
				</div>
			</div>
			<div id="Images">
				<h3 onclick="bascule('i'); return false;">Images</h3>
				<div id='i' style='display:none;'>
					<p>Imagerie :</p>
				</div>
			</div>
		</div>
	</body>
</html>