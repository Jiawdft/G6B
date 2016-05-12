<!DOCTYPE html>
<html>
	<head>
		<title>PagePersonnelle</title>
		<link href="../Page Personelle/Page_Personelle.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<div class="HOMETOP">
	    	<div class="menu">
		       <div id="left">
		       		<a href="../Accueil/Accueil.php"><img src="../Images/Logos/Sporciety.png" style="height: 4em;" /></a>
		       </div>
		       <ul id="right">
		           <li><a href="../Sports/Sports.php">LES SPORTS</a></li>
		           <li><a href="../Forum/Forum.php">FORUM</a></li>
		           <li><a href="../Contact/Contact.php">CONTACT</a></li>
		           <li><a href="../Connexion/Connexion.php">CONNEXION</a></li>
		           <li><a href="../Inscription/Inscription.php">INSCRIPTION</a></li>
		           <li><a href="../Aide/Aide.php">AIDE</a></li>
		       </ul>
		    </div>
		</div>
		<div class="user">
			<img src="../Images/Logos/User.png" style="height: 7em;">
			<div id="uinfo">
				<table>
					<tr>
						<?php
						include'../modele/get_membre.php';
						$membre=get_membres($_SESSION['mail']);
						echo $membre['prenom']." ".$membre['nom']
						?>
					</tr>
					<tr>
					<?php
					echo $membre['codepostal'];
					?>
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
									<li>b</li>
									<li>a</li>
									<li>b</li>
									<li>a</li>
									<li>b</li>
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
									<li>a</li>
									<li>b</li>
									<li>a</li>
									<li>b</li>
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
								include'../modele/get_membres_groupes.php';
								$groupes=get_membres_groupes($_SESSION['mail'],'');
								foreach ($groupes as $groupe) {
									?>
									<li>
										<?php
											echo $groupe['groupe'];
										?>
									</li>
									<?php
								}
							?>
							
							<li>b</li>
							<li>a</li>
							<li>b</li>
							<li>a</li>
							<li>b</li>
							<li>a</li>
							<li>b</li>
							<li>a</li>
							<li>b</li>
							<li>a</li>
							<li>b</li>
						</ul>
					</th>
				</tr>
			</table>
		</div>
	</body>
</html>