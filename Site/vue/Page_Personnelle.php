<!DOCTYPE html>
<html>
	<head>
		<title>PagePersonnelle</title>
		<link href="../vue/Page_Personelle.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<div class="HOMETOP">
	    	<div class="menu">
		       <div id="left">
		       		<a href="../controleur/Accueil.php"><img src="../Images/Logos/Sporciety.png" style="height: 4em;" /></a>
		       </div>
		       <ul id="right">
		           <li><a href="../controleur/Sports.php">LES SPORTS</a></li>
		           <li><a href="../Forum/Forum.php">FORUM</a></li>
		           <li><a href="../controleur/Contact.php">CONTACT</a></li>
				   <li><a href="../controleur/Accueil.php?deconnexion=true">DECONNEXION</a></li>
		           <li><a href="../controleur/Page_Personnelle.php">PROFIL</a></li>
		           <li><a href="../controleur/Aide.php">AIDE</a></li>
		       </ul>
		    </div>
		</div>
		<div class="user">
			<img src="../Images/Logos/User.png" style="height: 7em;">
			<div id="uinfo">
				<table>
					<tr>
						<th>
						<?php
						echo $membre['prenom']." ".$membre['nom']
						?>
						</th>
					</tr>
					<tr><th>
					<?php
					echo $membre['codepostal'];
					?>
				</th></tr>
				</table>	
			</div>
			<div class="more">
				<div id="p">
					<h3>Mon Planning :</h3>
					<table>
						<tr>
							<th>
								<ul>
									<li>a</li>
								</ul>
							</th>
						</tr>
					</table>
				</div>
				<div id="f">
					<h3>Forum :</h3>
					<table>
						<tr>
							<th>
								<ul>
									<li>a</li>
									
								</ul>
							</th>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="mygroups">
			<h3>Mes Groupes :</h3>
			<table>
				<tr>
					<th>
						<ul>
							<?php
								foreach ($groupes as $groupe) {
									?>
									<li><a href="../controleur/Groupe.php?groupe=<?php echo $groupe['groupe']?>" ><?php echo $groupe['groupe']?></a></li>
									<?php
								}
							?>
							
							<li>b</li>
							
						</ul>
					</th>
				</tr>
			</table>
		</div>
	</body>
</html>
