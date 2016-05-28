<!DOCTYPE html>
<html>
	<head>
		<title>Sporciety</title>
		<link href="../vue/Post.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>

	<body>
		
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
						<a href="#">Répondre</a>
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
		<!--
		<div  class="New">
			<h4>Répondre</h4>
		</div>
	-->
	</body>
</html>