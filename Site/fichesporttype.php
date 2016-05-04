
<meta charset="utf8" />
<!DOCTYPE html>
<html>
	<head>
		<title>Sports</title>
		<link href="fichesporttype.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
	    <div class="HOMETOP" style="height: 100vh;">
	    	<div class="menu">
		       	<div id="left">
		       		<a href="../Accueil/Accueil.html"><img src="Images/Logos/Sporciety.png" style="	height: 4em;" /></a>
			    </div>
			    <ul id="right">
		       	   	<li><a href="#">LES SPORTS</a></li>
		           	<li><a href="#">FORUM</a></li>
		           	<li><a href="#">CONTACT</a></li>
		           	<li><a href="../Connexion/Connexion.html">CONNEXION</a></li>
		           	<li><a href="../Connexion/Inscription.html">INSCRIPTION</a></li>
	         		<li><a href="#">AIDE</a></li>
	       		</ul>
	    	</div>
	    	<div class="center">
	    	<div class="titre">
		<h1><?php echo $_GET['sport'];?></h1>
	    	</div>
	    	<div class="texte">
	    		<?php
	    		include'modele/get_sports.php';
	    		$sports=get_sports('');
	    		/*
	    		foreach($sports as $cle => $sport)
				{
					$sports[$cle]['sport'] = htmlspecialchars($sport['sport']);
				}
				*/
				foreach ($sports as $sport)
				{
					if(strtolower($sport['sport'])==strtolower($_GET['sport']))
					{
						break;
					}
				}
	    		?>
	    		<p> <?php echo ucfirst(strtolower($sport['information'])).'</br>' ?> </p>

	    		<p> Texte descriptif du sport en question.  </p>
	    	</div>
			<div class="Groupes">
			    <table>
			    	<tbody>
						<tr>
							<?php
							include'modele/get_sports_groupes.php';
							$sports_groupes= get_sports_groupes($_GET['sport'],'');
							$a=0;
							foreach ($sports_groupes as $sports_groupe) 
							{
								?>

							<td><a href="#"><?php echo ucfirst(strtolower($sports_groupe['groupe'])) ?></a></td>
							<?php	
							}

							?>
							<td><a href="#">x</a></td>
							<td><a href="#">y</a></td>
							<td><a href="#">z</a></td>
						</tr>
						<tr>
							<td><a href="#">x1</a></td>
							<td><a href="#">y1</a></td>
							<td><a href="#">z1</a></td>
						</tr>
						<tr>
							<td><a href="#">x2</a></td>
							<td><a href="#">y2</a></td>
							<td><a href="#">z2</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
			<div id="Plus">
				<a id="Plus" href="#">Plus…</a>
			</div>
		</div> 
	</body>
</html>