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
			function bascule(elem) {
			var i, str;
			   if(document.getElementById(elem).style.display=="none") {
			   for (i=1; i<=6; i++) {
			   str='div'+i;
			   if (document.getElementById(str).style.display=="block") {
			   document.getElementById(str).style.display = 'none';
			   }
			   }
			   document.getElementById(elem).style.display="block";
			   }
			   else {
			  document.getElementById(elem).style.display = 'none';
			   }
			}
			</script>

			<h1> Page Administrateur </h1>
			<div id="Membres">
				<h3 onclick="bascule('div1'); return false;">Membres</h3>
				<div id='div1' style='display:none;'>
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
							</tr>
							<input type="submit" value="Supprimer" />
							</form>
						</tbody>
						<tr>
					</h4>
		    		</table>
				</div>
			</div>

			<div id="Groupes">
				<h3 onclick="bascule('div2'); return false;">Groupes</h3>
				<div id='div2' style='display:none;'>
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
							<input type="checkbox" name="case[]"  value='<?php echo $Groupe['groupe'] ?>' />
							<a href="../controleur/backclientmodif.php?groupe=<?php echo $Groupe['groupe']?>"><?php echo $Groupe['groupe']?></a></td>	
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
				<h3 onclick="bascule('div3'); return false;">Sports</h3>
				<div id='div3' style='display:none;'>
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
							<a href="../controleur/backclientmodif.php?sport=<?php echo $Sport['sport']?>"><?php echo $Sport['sport']?></a></td>	
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

			<div id="Images">
				<h3 onclick="bascule('div4'); return false;">Images</h3>
				<div id='div4' style='display:none;'>
					<p>IMAGERIE :</p>
					<h4>
					<table>
						<tbody>
							<form method="post" action="../controleur/backclient.php?Image=true">
							<tr>
							<?php
							$Pages=array('Page accueuil - Carousel','Page Accueil - Grille', 'Page Contact', 'Page Inscription', 'Page Connexion', 'Page Recherche/Sport', 'Page Recherche/Groupe', 'Page Création/Groupe', 'Page Sport - Carousel', 'Page Modification - Groupe', 'Page Modification - Informations');
							$a=0;
							foreach ($Pages as $page){
								if($a==0 or $a==8){
									?><td>
									<a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='block';document.getElementById('fade').style.display='block' ; document.getElementById('titre1').innerHTML='<?php echo $page ?>'"><?php echo $page ?></a></td>
								<?php
								}
								else{
									?><td>
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
						</form>
						</tbody>
					</table>
					</h4>			
				</div>	
			</div>

			<div id="Forum">
				<h3 onclick="bascule('div5'); return false;">Forum</h3>
				<div id='div5' style='display:none;'>
					<p>MODERER LES MESSAGES :</p>
					<form method="post" action="../controleur/backclient.php?Forum=true">
					<?php 
					include'../modele/get_post.php';
					$posts=get_post('','');
					foreach ($posts as $post) {?>
						<td>
							<input type="checkbox" name="case[]"  value='<?php echo $post['id'] ?>' />
							<a href="../controleur/backclientmodif.php?post=<?php echo $post['id'] ?>"><?php echo $post['id'] ?></a></td>
					<?php
					}
					?>
					<input type="submit" value="Supprimer" />
				</form>
				</div>
			</div>

			<div id="Aide">
				<h3 onclick="bascule('div6'); return false;">Aide</h3>
				<div id='div6' style='display:none;'>
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