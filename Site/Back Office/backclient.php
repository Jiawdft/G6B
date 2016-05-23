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
					<p>LISTE DES MEMBRES :</p>
					<h4>
					<table>
		    		<tbody>
					<?php
					include_once'../modele/get_membres.php';
					$Membres=get_membres('','');
					$a=0;
					foreach ($Membres as $Membre) { ?>
						<td><?php echo $Membre['adresse_mail']?></td>
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
					</h4>
					</table>
		    		</tbody>
				</div>
			</div>

			<div id="Groupes">
				<h3 onclick="bascule('g'); return false;">Groupes</h3>
				<div id='g' style='display:none;'>
					<p>LISTE DES GROUPES :</p>
					<h4>
					<table>
		    		<tbody>
					<?php
					include_once'../modele/get_groupes.php';
					$Groupes=get_groupes('','');
					$a=0;
					foreach ($Groupes as $Groupe) { ?>
						<td><?php echo $Groupe['groupe']?></td>
					<?php
					$a++;
					if($a%10==0)
								{
									?>
									</tr>
									<tr>
									<?php
								}
					}
					?>
					</h4>
					</table>
		    		</tbody>
				</div>
			</div>

			<div id="Sports">
				<h3 onclick="bascule('s'); return false;">Sports</h3>
				<div id='s' style='display:none;'>
					<p>LISTE DES SPORTS :</p>
					<h4>
					<table>
		    			<tbody>
						<tr>
						<?php
						include_once'../modele/get_sports.php';
						$Sports=get_sports('');
						$a=0;
						foreach ($Sports as $Sport) { ?>
							<td><?php echo $Sport['sport']?></td>
							<?php
							$a++;
							if($a%10==0)
								{
									?>
									</tr>
									<tr>
									<?php
								}
						}
						?>
						</tr>
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
							<tr>
							<?php
							$Pages=array('Page accueuil - Carousel','Page Accueil - Grille', 'Page Contact', 'Page Inscription', 'Page Connexion', 'Page Recherche/Sport', 'Page Recherche/Groupe', 'Page Création/Groupe', 'Page Sport - Carousel', 'Page Modification - Groupe', 'Page Modification - Informations' );
							$a=0;
							foreach ($Pages as $page){ ?>
								<td><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block' ; document.getElementById('titre2').innerHTML='<?php echo $page ?>'"><?php echo $page ?></a></td>
							<?php
							$a++;
								if($a%4==0)
									{
										?>
										</tr>
										<tr>
										<?php
									}
							}
							?>
							</tr>
						</tbody>
					</table>
					</h4>			
					<div id="light1" class="white_content">
					<h2 id="titre"></h2> 
      				<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      					<fieldset>
        				<legend>Images 1 :</legend>
          					<p>
            				<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
            				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            				<input name="fichier" type="file" id="fichier_a_uploader" />
            				<input type="submit" name="submit" value="Uploader" />
          					</p>
      					</fieldset>
      					<fieldset>
        				<legend>Images 2 :</legend>
          					<p>
            				<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
            				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            				<input name="fichier" type="file" id="fichier_a_uploader" />
            				<input type="submit" name="submit" value="Uploader" />
          					</p>
      					</fieldset>
      					<fieldset>
        				<legend>Images 3 :</legend>
          					<p>
            				<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
            				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            				<input name="fichier" type="file" id="fichier_a_uploader" />
            				<input type="submit" name="submit" value="Uploader" />
          					</p>
      					</fieldset>
      					<fieldset>
        				<legend>Images 4 :</legend>
          					<p>
            				<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
            				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            				<input name="fichier" type="file" id="fichier_a_uploader" />
            				<input type="submit" name="submit" value="Uploader" />
          					</p>
      					</fieldset>
      					<fieldset>
        				<legend>Images 5 :</legend>
          					<p>
            				<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
            				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            				<input name="fichier" type="file" id="fichier_a_uploader" />
            				<input type="submit" name="submit" value="Uploader" />
          					</p>
      					</fieldset>
      				</form>
      				<a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='none';document.getElementById('fade').style.display='none'"><h5>CLOSE<h5></a>
    				</div>


					<div id="light" class="white_content">
					<h2 id="titre2"></h2> 
      				<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      					<fieldset>
        				<legend>Images</legend>
          					<p>
            				<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
            				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            				<input name="fichier" type="file" id="fichier_a_uploader" />
            				<input type="submit" name="submit" value="Uploader" />
          					</p>
      					</fieldset>
      				</form>
      				<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><h5>CLOSE<h5></a>
    				</div>
    				<div id="fade" class="black_overlay"></div>
					</div>
				</div>
			<div id="Forum">
				<h3 onclick="bascule('f'); return false;">Forum</h3>
				<div id='f' style='display:none;'>
					<p>MODERER LES MESSAGES :</p>
				</div>
			</div>
			<div id="Aide">
				<h3 onclick="bascule('a'); return false;">Aide</h3>
				<div id='a' style='display:none;'>
					<p>ADMINISTRER LA RUBRIQUE "AIDE" :</p>
					<p>Administrer la rubrique "Aide" :</p><br>
					<p>Ajouter une question :</p><br>
					<textarea name="Question" rows="5" cols="100">Saisir une question ici.</textarea><br><br>
					<p>Ajouter sa réponse :</p> <br>
					<textarea name="Réponse" rows="7" cols="100">Saisir la réponse ici.</textarea><br><br>
					<input type="submit" value="Ajouter">
				</div>
			</div>
		</div>
	</body>
</html>