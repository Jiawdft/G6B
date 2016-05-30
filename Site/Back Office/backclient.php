<!DOCTYPE html>
<html>
	<head>
		<title>Back Office</title>
		<link href="../Back Office/backclient.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<?php include("../Header/HOMETOP.php"); ?>
		<?php include("../modele/Popup_images.php"); ?>
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
					<p>LISTE DES MEMBRES :</p>
					<h4>
					<table>
		    			<tbody>
			    			<form method="post" action="../controleur/backclient.php?Membre=true">
			    			<tr>
							<?php
							include_once'../modele/get_membres.php';
							$Membres=get_membres('','');
							$a=0;

							foreach ($Membres as $Membre) {
								?><td>
								<input type="checkbox" name="case[]"  value='<?php echo $Membre['adresse_mail'] ?>' /><a><?php echo $Membre['adresse_mail']?></a>					

							<?php
							$a++;
							if($a%5==0)
								{
									?>
									</tr>
									<tr>
									<?php
								}
							}
							?>
							<input type="submit" value="Supprimer" />
							</form>
						</tbody>
						<tr>
					</h4>
		    		</table>
				</div>
			</div>

			<div id="Groupes">
				<h3 onclick="bascule('g'); return false;">Groupes</h3>
				<div id='g' style='display:none;'>
					<p>LISTE DES GROUPES :</p>
					<h4>
					<table>
		    			<tbody>
		    				<form method="post" action="../controleur/backclient.php?Groupe=true">
		    			<tr>
						<?php
						include_once'../modele/get_groupes.php';
						$Groupes=get_groupes('','');
						$a=0;
						foreach ($Groupes as $Groupe){
							?><td>
							<input type="checkbox" name="case[]"  value='<?php echo $Groupe['groupe'] ?>' /><a href = "javascript:void(0)" onclick = "document.getElementById('light3').style.display='block';
							document.getElementById('fade').style.display='block';
							document.getElementById('titre3').innerHTML='<?php echo $Groupe['groupe']?>';">
							<?php echo $Groupe['groupe']?></a></td>
							<?php
							$a++;
							if($a%7==0)
								{
									?>
									</tr>
									<tr>
									<?php
								}
							}
							?>
						</tr>
						<input type="submit" value="Supprimer" />
					</form>
						</tbody>
					</table>
		    		</h4>
				</div>
			</div>

			<div id="Sports">
				<h3 onclick="bascule('s'); return false;">Sports</h3>
				<div id='s' style='display:none;'>
					<p>LISTE DES SPORTS :</p>
					<h4>
					<table>
		    			<tbody>
		    				<form method="post" action="../controleur/backclient.php?Sport=true">
		    			<tr>
						<?php
						include_once'../modele/get_sports.php';
						$Sports=get_sports('');
						$a=0;
						foreach ($Sports as $Sport){
							?><td><input type="checkbox" name="case[]"  value='<?php echo $Sport['sport'] ?>' />
							<a href = "javascript:void(0)" onclick = "document.getElementById('light3').style.display='block';document.getElementById('fade').style.display='block' ; document.getElementById('titre3').innerHTML='<?php echo $Sport['sport']?>'"><?php echo $Sport['sport']?></a></td>
							<?php
							$a++;
							if($a%7==0)
								{
									?>
									</tr>
									<tr>
									<?php
								}
						}
						?>
						</tr>
					</form>
					<input type="submit" value="Supprimer" />
						</tbody>
					</table>
					</h4>
				</div>
			</div>

			<div id="Images">
				<h3 onclick="bascule('i'); return false;">Images</h3>
				<div id='i' style='display:none;'>
					<p>IMAGERIE :</p>
					<h4>
					<table>
						<tbody>
<<<<<<< HEAD
							<form method="post" action="../controleur/backclient.php?Image=true">
=======
							<form method="post" action="../controleur/backclient.php">
>>>>>>> acac2b9b0337d07865aff2d47e0227d28eff429d
							<tr>
							<?php
							$Pages=array('Page accueuil - Carousel','Page Accueil - Grille', 'Page Contact', 'Page Inscription', 'Page Connexion', 'Page Recherche/Sport', 'Page Recherche/Groupe', 'Page Création/Groupe', 'Page Sport - Carousel', 'Page Modification - Groupe', 'Page Modification - Informations');
							$a=0;
							foreach ($Pages as $page){
								if($a==0 or $a==8){
									?><td>
									<input type="checkbox" name="case[]"  value='<?php echo $page ?>' />
									<a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='block';document.getElementById('fade').style.display='block' ; document.getElementById('titre1').innerHTML='<?php echo $page ?>'"><?php echo $page ?></a></td>
								<?php
								}
								else{
									?><td>
									<input type="checkbox" name="case[]"  value='<?php echo $page ?>' />
									<a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='block';document.getElementById('fade').style.display='block' ; document.getElementById('titre2').innerHTML='<?php echo $page ?>'"><?php echo $page ?></a></td>
								<?php
								}
								?>
							<?php
							$a++;
							if($a%3==0)
								{
									?>
									</tr>
									<tr>
									<?php
								}
							}
							?>
							</tr><input type="submit" value="Supprimer" />
						</form>
						</tbody>
					</table>
					</h4>			
				</div>	
			</div>

			<div id="Forum">
				<h3 onclick="bascule('f'); return false;">Forum</h3>
				<div id='f' style='display:none;'>
					<p>MODERER LES MESSAGES :</p>
					<form method="post" action="../controleur/backclient.php?Forum=true">
					<?php 
					include'../modele/get_post.php';
					$posts=get_post('','');
					foreach ($posts as $post) {?>
						<td>
							<input type="checkbox" name="case[]"  value='<?php echo $post['id'] ?>' />
							<a href = "javascript:void(0)" onclick = "document.getElementById('light3').style.display='block';document.getElementById('fade').style.display='block' ; document.getElementById('titre3').innerHTML='<?php echo $post['post']?>'"><?php echo $post['id']?></a></td>
							<?php
					}
					?>
					<input type="submit" value="Supprimer" />
				</form>
				</div>
			</div>

			<div id="Aide">
				<h3 onclick="bascule('a'); return false;">Aide</h3>
				<div id='a' style='display:none;'>
					<form method="post" action="../controleur/backclient.php?Aide=true">
					<p>ADMINISTRER LA RUBRIQUE "AIDE" :</p>
					<p>Administrer la rubrique "Aide" :</p><br>
					<p>Ajouter une question :</p><br>
					<textarea name="Question" rows="5" cols="100">Saisir une question ici.</textarea><br><br>
					<p>Ajouter sa réponse :</p> <br>
					<textarea name="Réponse" rows="7" cols="100">Saisir la réponse ici.</textarea><br><br>
					<input type="submit" value="Ajouter">
				</form>
				</div>
			</div>
		</div>
	</body>
</html>