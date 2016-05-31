<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $Groupe?></title>
		<link href="../vue/Page_Personnelle_mon_groupe.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>

		<?php include("../Header/HOMETOP.php"); ?>

		<div class="mygroups">
			<a href='../controleur/Groupe.php?groupe=<?php echo $Groupe ?>' id="titre_h1"><?php echo $Groupe?></a><br /><br />
			<?php

			foreach ($leader as $lead) {
				if($lead['membre']==$_SESSION['mail'] and $lead['groupe']==$Groupe){?>
					<a href="../controleur/ModifGroupe.php">Modifie ton Groupe</a><br /><br /> <?php
				}
			}
				?>
			<?php
			if(isset($deja_membre)){
			?>
				<a href="../controleur/quitter_groupe.php?groupe=<?php echo $_GET['groupe']; ?>">Quitter le groupe</a>
			<?php
			}
			 ?>
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
									<?php
									foreach($club as $clubs){
											?><li><a href="../controleur/Club.php?club=<?php echo $clubs['club']?>" ><?php echo $clubs['club']?></li><?php
										}
									?>
								</ul>
							</th>
						</tr>
					</table>
				</div>
				<div id="cal">
					<h3>Le Calendrier :</h3>
					<!--
					<a href="../controleur/Event.php?groupe=<?php echo $_GET['groupe'] ?>">Le Calendrier :</a>
					-->
					<a href="../vue/new_event.php?groupe=<?php echo $_GET['groupe'] ?>">Créer un événement</a>
					<table>
						<tr>
							<th>
								<ul>
									<?php
									foreach($event as $events){
										if($events['groupe']==$Groupe ){
											?><li><a href="../controleur/Event.php?id=<?php echo $events['id']?>&groupe=<?php echo $_GET['groupe']?>" ><?php echo $events['nom'] ?></li><?php
										}
										}
									?>
								</ul>
							</th>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
