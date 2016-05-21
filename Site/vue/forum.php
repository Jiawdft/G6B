<!DOCTYPE html>
<html>
	<head>
		<title>Sporciety</title>
		<link href="../vue/forum.css" rel="stylesheet" type="text/css" media="screen" />
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
			<h1> Forum </h1>
			<table><th>
			<div id="Sports">
				<h3 onclick="bascule('m'); return false;">Les Sports</h3>
				<div id='m' style='display:none;'>
					<h4>
					<?php
					include_once'../modele/get_sports.php';
					$Sports=get_sports('');
					$a=0;
					foreach ($Sports as $Sport) { ?>
						<a href="../controleur/Post.php?sujet=sport&sous_sujet=<?php echo $Sport['sport']?>"><?php echo $Sport['sport']?></a>
					<?php
					$a++;
					if($a%3==0){
						?>
						</br>
								<?php
					}
					}
					?></h4>
				</div>
			</div></th>
			<th>
			<div id="Groupes">
				<h3 onclick="bascule('g'); return false;">Les Groupes</h3>
				<div id='g' style='display:none;'>
					<h4>
					<?php
					include_once'../modele/get_groupes.php';
					$Groupes=get_groupes('','');
					$a=0;
					foreach ($Groupes as $Groupe) { ?>
						<a href="../controleur/Post.php?sujet=groupe&sous_sujet=<?php echo $Groupe['groupe']?>"><?php echo $Groupe['groupe']?></a>
					<?php
					$a++;
					if($a%3==0){
						?>
						</br>
								<?php
					}
					}
					?>
				</h4>
				</div>
			</div></th>
			<th>
			<div id="Club">
				<h3 onclick="bascule('s'); return false;">Les Clubs</h3>
				<div id='s' style='display:none;'>
				
				</div>
			</div></th>
			<th>
			<div id="Question">
				<h3 onclick="bascule('t'); return false;">Question</h3>
				<div id='t' style='display:none;'>
					<p><h4>Question</h4></p>
				</div>
			</div>
		</th>
		</table>


	<table>
	</table>		
		


	</body>
	<footer>
	</footer>
</html>