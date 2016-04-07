<!DOCTYPE html>
<html>
	<head>
		<title>Les Sports</title>
		<link href="Sports.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
	    <div class="HOMETOP" style="height: 100vh;">
	    	<div class="menu">
		       	<div id="left">
		       		<a href="../Accueil/Accueil.php"><img src="../Images/Logos/Sporciety.png" style="	height: 4em;" /></a>
			    </div>
			    <ul id="right">
		       	   	<li><a href="../Sports/Sports.php">LES SPORTS</a></li>
		           	<li><a href="#">FORUM</a></li>
		           	<li><a href="#">CONTACT</a></li>
		           	<li><a href="../Connexion/Connexion.php">CONNEXION</a></li>
		           	<li><a href="../Inscription/Inscription.php">INSCRIPTION</a></li>
	         		<li><a href="#">AIDE</a></li>
	       		</ul>
	    	</div>
			<div class="Sports">
			    <table>
			    	<tbody>
						<?php
		    			$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root' , '');
						$req = $bdd->query('SELECT sport FROM sport ORDER BY sport');
						$donnees = $req-> fetch();
						$a=0;
						for($i=0;$i<33;$i++)
						{	
						?>
						<td><a href="#"><?php echo mb_strtoupper($donnees['sport'])?></a></td>
						<?php
							$donnees = $req->fetch();
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
		 				</tr>
					</tbody>
				</table>
			</div>
			<script type="text/javascript">
 			function AfficherMasquer()
			{
				divInfo = document.getElementById('divacacher');
				if (divInfo.style.display == 'none')
				    divInfo.style.display = 'block';
				else
				divInfo.style.display = 'none';
			}
			</script>
			<div id="Plus"  onClick="AfficherMasquer(); scrollTo(0,400)">
				<a>Plus…</a>
			</div>
			<div id="divacacher" style="display:none;">
				<a>AUTRES SPORTS :</a>
			</div>
		</div> 
	</body>
</html>