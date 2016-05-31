<!DOCTYPE html>
<html>
	<head>
		<title>Sporciety</title>
		<link href="../vue/Post.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
		<script type="text/javascript" src="../vue/new_event.js"></script>
	</head>
	<body>
		<script type="text/javascript">
			function AfficherMasquer()
			{
			divInfo = document.getElementById('divacacher');
			if (divInfo.style.display == 'none')
			divInfo.style.display = 'block';
			else
			divInfo.style.display = 'none';
			}
		</script>
		<?php include("../Header/HOMETOP.php"); ?>
		<div class='Sujet'>
			<?php
			if($_GET['sujet']=='sport') {
				include_once'../modele/get_sports.php';
				$Sports=get_sports('');
				foreach ($Sports as $Sport) { ?>
					<a href="../controleur/Post.php?sujet=sport&sous_sujet=<?php echo $Sport['sport']?>"><?php echo $Sport['sport']?></a>
					<br />
					<br />
				<?php
				}
			}
			?>
			<?php
			if($_GET['sujet']=='groupe') {
				include_once'../modele/get_groupes.php';
				$Groupes=get_groupes('','');
				foreach ($Groupes as $Groupe) { ?>
					<a href="../controleur/Post.php?sujet=groupe&sous_sujet=<?php echo $Groupe['groupe']?>"><?php echo $Groupe['groupe']?></a>
					<br />
					<br />
				<?php
				}
			}
			?>
			<?php
				if($_GET['sujet']=='club') {
					include_once'../modele/get_club.php';
				$Groupes=get_club('','');
				foreach ($Groupes as $Groupe) { ?>
					<a href="../controleur/Post.php?sujet=groupe&sous_sujet=<?php echo $Groupe['groupe']?>"><?php echo $Groupe['groupe']?></a>
					<br />
					<br />
				<?php
				}
				}
			?>
			<?php
				if($_GET['sujet']=='question') {
				include_once'../modele/get_question.php';
				$Groupes=get_question('','');
				foreach ($Groupes as $Groupe) { ?>
					<a href="../controleur/Post.php?sujet=groupe&sous_sujet=<?php echo $Groupe['groupe']?>"><?php echo $Groupe['groupe']?></a>
					<br />
					<br />
				<?php
				}

				}
			?>
		</div>
		<div class="Posts" >
			<h1><?php echo strtoupper($_GET['sujet']) ?>S</h1>
			<div id="p">
				<?php	
					if(isset($_GET['sujet']) and isset($_GET['sous_sujet'])) {
						?>
						<h3><?php echo $_GET['sous_sujet'] ?></h3>
						<div id="Plus"  onClick="AfficherMasquer();">
							<a>Répondre</a>
						</div>
						<div id="divacacher" style="display:none;">
							<p>Votre réponse : </p>
								<form name="form" action='../controleur/Post.php?sujet=<?php echo $_GET['sujet']?>&sous_sujet=<?php echo $_GET['sous_sujet']?>' method="post">
									
									<input type="button" value="G" style="font-weight:bold;" onclick="commande('bold','','bouton_bold');" id="bouton_bold"/>
									<input type="button" value="I" style="font-style:italic;" onclick="commande('italic','','bouton_italic');" id="bouton_italic"/>
									<input type="button" value="S" style="text-decoration:underline;" onclick="commande('underline','','bouton_underline');" id="bouton_underline"/>

									<div id="editeur_description" name="editeur_description" contentEditable ></div>
								
									<input type="hidden" name="resultat" id="resultat">
									<!--
									<input type="button" onclick="resultat_post();" value="Poster" ><br />
									-->
									<input type="submit" onclick="resultat_post();" value="Poster" >

									

								
						</div>
						<?php
						include'../modele/get_post.php';
						$posts=get_post($_GET['sujet'],$_GET['sous_sujet']);
						foreach($posts as $post) {
						?>
						<div id="ligne"></div>
						<table>
							<tr>
								<td id="left">
									<p><?php echo $post['auteur'].'</br>'.$post['date']; ?></p>
								</td>
								<td id="right">
									<p><?php echo $post['post'] ?></p>
								</td>
							</tr>
						</table>
						<br />
						<?php
						}
					}
					else {
						if($_GET['sujet']=='question') {
							?>
							<h3>Veuillez sélectionner une <?php echo $_GET['sujet'] ?> pour décourvir les posts qui y sont associés</h3>
							<?php
						}
						else {
							?>
							<h3>Veuillez sélectionner un <?php echo $_GET['sujet'] ?> pour décourvir les posts qui y sont associés</h3>
							<?php
						}
					}
				?>
			</div>
		</div>
	</body>
</html>