<!DOCTYPE html>
<html>
	<head>
		<title>Sporciety</title>
		<link href="../vue/forum.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>

	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		
		<div class="forum">
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

			<div id="Sports">
				<h3 onclick="bascule('s'); return false;">Les Sports</h3>
				<div id='s'>
					<?php
					include_once'../modele/get_sports.php';
					$Sports=get_sports('');
					$a=0;
					foreach ($Sports as $Sport) { ?>
						<a href="../test/P.php?sujet=sport&sous_sujet=<?php echo $Sport['sport']?>"><?php echo $Sport['sport']?></a>
					<?php
					$a++;
					if($a%3==0){
						?>
						</br>
								<?php
					}
					}
					?>
				</div>
			</div>
			<div id="Groupes">
				<h3 onclick="bascule('g'); return false;">Les Groupes</h3>
				<div id='g'>
					<?php
					include_once'../modele/get_groupes.php';
					$Groupes=get_groupes('','');
					$a=0;
					foreach ($Groupes as $Groupe) { ?>
						<a href="../test/P.php?sujet=groupe&sous_sujet=<?php echo $Groupe['groupe']?>"><?php echo $Groupe['groupe']?></a>
					<?php
					$a++;
					if($a%3==0){
						?>
						</br>
								<?php
					}
					}
					?>
				</div>
			</div>
			<div id="Club">
				<h3 onclick="bascule('c'); return false;">Les Clubs</h3>
				<div id='c'>
				</div>
			</div>
			<div id="Question">
				<h3 onclick="bascule('q'); return false;">Question</h3>
				<div id='q'>
					<p>Question</p>
				</div>
			</div>	
		</div>
	</body>
</html>