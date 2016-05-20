<!DOCTYPE html>
<html>
	<head>
		<title>Modification d'un Groupe</title>
		<link href="../vue/ModifGroupe.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>

	    <div class="ModifGroupe">
	    	<h1 style="text-align: center;">MODIFIE TON GROUPE</h1>
	    	<form action='../controleur/Page_Personnelle_mon_groupe.php' method="post" enctype="multipart/form-data">
	    		<!--
	    		<input type="text" name="nom_groupe" placeholder="Entre un nouveau nom de groupe" />
	    		-->
	    		<input type="text" name="Codepostal" placeholder="Votre groupe déménage ? Entre un nouveau code postal" />
	    		<input type="text" name="Description" placeholder="Entre une nouvelle description de groupe" />

	    	</br><h4> Importer l'image de votre groupe(Max 8Mo)</h4>
	    		<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
	    		<input type="file" name="image_groupe" placeholder="Entre une nouvelle description de groupe" />
	    		<br /><h3>Membres appartenants au groupe :</h3>
	    		<table>
	    			<th>
	    				<tr>
	    					<ul>
	    						<li>
	    							<?php
									foreach ($go as $test) {
										?>
										<input type="checkbox" name="case" id="case" value="<?php echo $test['membre'] ?>" /> <label for="case"><?php echo $test['membre']?></label></br>
										<?php
									}

									 ?>
	    						</li>
	    					</ul>
	    				</tr>
	    			</th>
	    		</table>
	    		
			    <input type="submit" value="VALIDER" />
			</form>
	    </div>
	</body>
</html>