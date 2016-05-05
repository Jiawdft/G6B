<!DOCTYPE html>
<html>
	<head>
		<title>Page Sports</title>
		<link href="fichesporttype.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
	    <div class="HOMETOP" style="height: 100vh;">
	    	<div class="menu">
		       	<div id="left">
		       		<a href="../controleur/Accueil.php"><img src="../Images/Logos/Sporciety.png" style="height: 3.8em;" /></a>
			    </div>
			    <ul id="right">
		       	   	<li><a href="../controleur/Sports.php">LES SPORTS</a></li>
		           	<li><a href="../controleur/Forum.php">FORUM</a></li>
		           	<li><a href="../controleur/Contat.php">CONTACT</a></li>
		           	<li><a href="../controleur/Connexion.php">CONNEXION</a></li>
		           	<li><a href="../controleur/Inscription.php">INSCRIPTION</a></li>
	         		<li><a href="../controleur/Aide.php">AIDE</a></li>
	       		</ul>
	    	</div>
	    	<div class="center">
	    		<div class="titre">
					<h1>
						<?php
						if(!isset($_GET['sport'])or $_GET['sport']=='')
						{
							echo'SPORTS';
						}
						else
						{
							echo $_GET['sport'];
						}	
					 	?>
					</h1>
	    		</div>
	    		<div class="texte">
	    			<?php
	    			include'../modele/get_sports.php';
	    			$sports=get_sports('');
	    			/*
	    			foreach($sports as $cle => $sport)
					{
						$sports[$cle]['sport'] = htmlspecialchars($sport['sport']);
					}
					*/
					if(!isset($_GET['sport'])or $_GET['sport']=='')
					{

					}
					else
					{
						foreach ($sports as $sport)
						{
							if(strtolower($sport['sport'])==strtolower($_GET['sport']))
							{
								break;
							}
						}
		    			?>
		    			<p><?php echo ucfirst(strtolower($sport['information'])).'</br>' ?></p>
		    			<?php
	    			}?>
	    	</div>
			<div class="Groupes">
			    <table>
			    	<tbody>
						<tr>
							<?php
							include'../modele/get_sports_groupes.php';
							if(!isset($_GET['sport'])or $_GET['sport']=='')
							{
								include'../modele/get_groupes.php';
								$sports_groupes= get_groupes('');
							}

							else
							{
							
								if(isset($_GET['codepostal'])and $_GET['codepostal']!='')
								{

								}
								else
								{
									$sports_groupes= get_sports_groupes($_GET['sport'],'');
								}	
							}
							
							$a=0;
							foreach ($sports_groupes as $sports_groupe) 
							{
								?>

							<td><a href="#"><?php echo ucfirst(strtolower($sports_groupe['groupe'])) ?></a></td>
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
					</tbody>
				</table>
			</div>
	</body>
</html>