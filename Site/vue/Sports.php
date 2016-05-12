<!DOCTYPE html>
<html>
	<head>
		<title>Les Sports</title>
		<link href="../vue/Sports.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
	    <div class="HOMETOP" style="height: 100vh;">
	    	<div class="menu">
		       	<div id="left">
		       		<a href="../controleur/Accueil.php"><img src="../Images/Logos/Sporciety.png" style="	height: 3.8em;" /></a>
			    </div>
			    <ul id="right">
		       	   	<li><a href="../controleur/Sports.php">LES SPORTS</a></li>
			        <li><a href="../controleur/Forum.php">FORUM</a></li>
			        <li><a href="../controleur/Contact.php">CONTACT</a></li>
			        <?php if(isset($_SESSION['mail'])){
			          	?>
			          	<li><a href="../controleur/Accueil.php?deconnexion=true">DECONNEXION</a></li>
			          	<li><a href="../controleur/Page_Personnelle.php">PROFIL</a></li>
			          	<?php
			          }
			          else
			          {
			          	?>
			          <li><a href="../controleur/Connexion.php">CONNEXION</a></li>
			          <li><a href="../controleur/Inscription.php">INSCRIPTION</a></li>
			          <?php
			          }
			          ?>
			        <li><a href="../controleur/Aide.php">AIDE</a></li>
	       		</ul>
	    	</div>
			<div class="Sports">
			    <table>
			    	<tbody>
						<?php
						$a=0;
						foreach($sports as $sport)
						{	
						?>
						<td><a href='../controleur/Fichesporttype.php?sport=<?php echo ($sport['sport'])?>'>  <?php echo mb_strtoupper($sport['sport'])?></a></td>
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