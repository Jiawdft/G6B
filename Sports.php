<!DOCTYPE html>
<html>
	<head>
		<title>Les Sports</title>
		<link href="Sports.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
	    <div class="HOMETOP">
	    	<div class="menu">
		       <div id="left">
		       		<a href="C:/wamp/www/Site/Acceuil/Acceuil.html"><img src="C:/wamp/www/Site/Images/Logos/Sporciety.png" style="height: 4em;" /></a>
		       </div>
		       <ul id="right">
		           <li><a href="C:/wamp/www/Site/Sports/Sports.html">LES SPORTS</a></li>
		           <li><a href="#">FORUM</a></li>
		           <li><a href="#">CONTACT</a></li>
		           <li><a href="#">CONNEXION</a></li>
		           <li><a href="#">INSCRIPTION</a></li>
		           <li><a href="#">AIDE</a></li>
		       </ul>
		    </div>
		    <div class="Sports">
		    	<table>
		    		<tbody>
		    			<tr>
		    			<?php
		    			$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
						$req = $bdd->query('SELECT sport FROM sport');
						$donnees = $req-> fetch();
						$a=0;
						for($i=0;$i<20;$i++)
						{	
						?>
						<td><a href="#"><?php echo $donnees['sport']?></a></td>
						<?php
							$donnees = $req->fetch();
							$a++;
							if($a%3==0)
							{
								echo'</br>';
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
			<div class="Plus"  onClick="AfficherMasquer(); scrollTo(0,400)">
				<a>Plus…</a>
			</div>
			<div id="divacacher" style="display:none;">
				<a>AUTRES SPORTS</a>
			</div>
		</div> 
	</body>
</html>