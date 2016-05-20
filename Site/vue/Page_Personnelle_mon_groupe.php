<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_GET['groupe']?></title>
		<link href="../vue/Page_Personnelle_mon_groupe.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>

		<?php include("../Header/HOMETOP.php"); ?>

		<div class="mygroups">
			<h1><?php echo $_GET['groupe']?></h1><br />
			<a href="../controleur/ModifGroupe.php">Modifie ton Groupe</a>
			<div class="members">
				<h3>Les Membres :</h3>
				<table>
					<tr>
						<th>
							<ul>
								<?php foreach($mails as $mail){
										foreach($membres as $membre){
										if($mail['membre']==$membre['adresse_mail']){
									?>
								<li><?php echo mb_strtoupper($membre['nom'])." ".ucfirst(mb_strtolower($membre['prenom']))?></li>
								<?php
							}}}
								?>
								
							</ul>
						</th>
					</tr>
				</table>
			</div>
			<div class="more">
				<div id="club">
					<h3>Le Club :</h3>
					<table>
						<tr>
							<th>
								<ul>
									
								</ul>
							</th>
						</tr>
					</table>
				</div>
				<div id="cal">
					<h3>Le Calendrier :</h3>
					<table>
						<tr>
							<th>
								<ul>
									
								</ul>
							</th>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
