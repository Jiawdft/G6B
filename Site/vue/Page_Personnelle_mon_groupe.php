<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_GET['groupe']?></title>
		<link href="../vue/Page_Personnelle_mon_groupe.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
<!--
		<div class="HOMETOP">
	    	<div class="menu">
		       <div id="left">
		       		<a href="../controleur/Accueil.php"><img src="../Images/Logos/Sporciety.png" style="height: 4em;" /></a>
		       </div>
		       <ul id="right">
		           <li><a href="../controleur/Sports.php">LES SPORTS</a></li>
		           <li><a href="../controleur/Forum.php">FORUM</a></li>
		           <li><a href="../controleur/Contact.php">CONTACT</a></li>
		           <li><a href="../controleur/Accueil.php?deconnexion=true">DECONNEXION</a></li>
			       <li><a href="../controleur/Page_Personnelle.php">PROFIL</a></li>
		           <li><a href="../controleur/Aide.php">AIDE</a></li>
		       </ul>
		    </div>
		</div>
=======
-->
		
		<?php include("../Header/HOMETOP.php"); ?>
		<div class="mygroups">
			<h1 style="padding-left: 20%;"><?php echo $_GET['groupe']?></h1>
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
									<li>a</li>
									
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
									<li>a</li>
									
								</ul>
							</th>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
