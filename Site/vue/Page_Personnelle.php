<!DOCTYPE html>
<html>
	<head>
		<title>Page Personnelle</title>
		<link href="../vue/Page_Personnelle.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		
		<div class="user">
			<img src="../Images/Logos/User.png" style="height: 7em;">
			<div id="uinfo">
				<table>
					<tr>
						<th>
						<?php
							echo $membre['prenom'] . " " . $membre['nom'] . " " . "(mail : " . $membre['adresse_mail'] . ")";
						?>
						</th>
					</tr>
					<tr>
						<th>
							<?php
								echo $membre['adresse'] . ", " . $membre['codepostal'] . ", " . $membre['ville'];
							?>
						</th>
					</tr>
					<tr>
						<th>
							<?php
								echo $membre['numero_de_portable'];
							?>
						</th>
					</tr>
					<tr>
						<th>
							<?php
								echo $membre['date_de_naissance'];
							?>
						</th>
					</tr>
				</table></br>
				<a href="../controleur/CreerGroupe.php">Créer un groupe</a><br />
				<a href="../controleur/ModifProfil.php">Modifier votre profil</a>
									
			</div>
			<div class="more">
				<div id="p">
					<h3>Mon Planning :</h3>
					<table>
						<tr>
							<th>
								<ul>
									<li></li>
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
									<li></li>
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
									<li><a href="../controleur/Page_Personnelle_mon_groupe.php?groupe=<?php echo $groupe['groupe']?>" ><?php echo $groupe['groupe']?></a></li>
									<?php
								}
							?>
						</ul>
					</th>
				</tr>
			</table>
		</div>
	</body>
</html>
