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
	    	<form action='../controleur/Page_Personnelle_mon_groupe.php' method="post">
	    		<input type="text" name="Nom du Groupe" placeholder="Entre un nouveau nom de groupe" />
	    		<input type="text" name="Code Postal" placeholder="Votre groupe déménage ? Entre un nouveau code postal" />
	    		<input type="text" name="Description" placeholder="Entre une nouvelle description de groupe" />
	    		<br /><h3>Membres appartenants au groupe :</h3>
	    		<table>
	    			<th>
	    				<tr>
	    					<ul>
	    						<li>
	    							<?php 
	    							
									include_once'../modele/get_membres_groupes.php';
									$go=get_membres_groupes('','');
									foreach ($go as $test) {
										echo $test['groupe'];
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