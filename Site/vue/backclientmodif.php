
<!DOCTYPE html>
<html>
	<head>
		<title>Page Personnelle</title>
		<link href="../vue/Page_Personnelle.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		<?php
			if(isset($_GET['groupe']) and $_GET['groupe']!=''){?>
			<form method="post" action="../controleur/backclient.php?Groupe==Modif">
				<textarea type="text" name="description" rows="5" cols="100"><?php echo $groupe['information']?></textarea>
				<input type="submit" value="Modifier">
			</form>
			<?php 
			}elseif(isset($_GET['sport']) and $_GET['sport']!=''){?>
				<form method="post" action="../controleur/backclient.php?Sport==Modif">
				<textarea type="text" name="description" rows="5" cols="100"><?php echo $sport['information']?></textarea>
				<input type="submit" value="Modifier">
			</form>

			<?php	
			}elseif(isset($_GET['page']) and $_GET['page']!=''){?>

			<?php	
			}elseif(isset($_GET['post']) and $_GET['post']!=''){?>
			<?php	
			}
			?>
		
		<div class="user">
			
		</div>
	</body>
</html>