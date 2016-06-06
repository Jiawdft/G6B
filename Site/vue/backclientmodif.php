<!DOCTYPE html>
<html>
	<head>
		<title>Page Personnelle</title>
		<link href="../vue/backclientmodif.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		<?php
			if(isset($_GET['groupe']) and $_GET['groupe']!=''){?>
			<h3>Modification : <?php echo $_GET['groupe']?></h3></br>
			<form method="post" action="../controleur/backclient.php?Groupe==Modif">
				<h4>Description</h4>
				<textarea type="text"  name="description" rows="5" cols="100"><?php echo $groupe['information']?></textarea>
				<!--
				<h4>Image</h4>
				<h4> Importer l'image de votre groupe(Max 8Mo)</h4>
	    		<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
	    		<input type="file" name="image_groupe" placeholder="Entre une nouvelle image de groupe" /></br>
				-->
	    		<input type="hidden"  name="groupe" value=<?php echo $_GET['groupe'] ?> />
	    		</br></br>
				<input type="submit" value="Modifier">
			</form>
			<?php 

			}elseif(isset($_GET['sport']) and $_GET['sport']!=''){?>
			<h3>Modification : <?php echo $_GET['sport']?></h3></br>
				<form method="post" action="../controleur/backclient.php?Sport==Modif">
					<h4>Description</h4>
				<textarea type="text" name="description" rows="5" cols="100"><?php echo $sport['information']?></textarea>
				<!--
				<h4>Image</h4>
				<h4> Importer l'image de votre groupe(Max 8Mo)</h4>
	    		<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
	    		<input type="file" name="image_groupe" placeholder="Entre une nouvelle image de groupe" /></br>
	    	-->
	    		<input type="hidden"  name="sport" value=<?php echo $_GET['sport'] ?> />

				<input type="submit" value="Modifier">
			</form>
			<!--
			<?php	
			}elseif(isset($_GET['page']) and $_GET['page']!=''){?>

				<form method="post" action="../controleur/backclient.php?Page==<?php echo $_GET['page']?>">
				<h3>Modification : <?php echo $_GET['page']?></h3></br>
				<h4> Importer l'image de votre groupe(Max 8Mo)</h4>
	    		<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
	    		<input type="file" name="image_groupe" placeholder="Entre une nouvelle image de groupe" /></br>
	    		<input type="hidden" name="page" value=<?php echo $_GET['page'] ?> />	    		
	    		<input type="submit" value="Modifier">
				</form>	

				<?php
			}
				 ?>
				
	
		<div class="user">
			
		</div>
	</body>
</html>