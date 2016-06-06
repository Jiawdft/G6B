<!DOCTYPE html>
<html>
	<head>
		<title>Aide</title>
		<link rel="stylesheet" type="text/css" href="../vue/faq.css" media="screen">
		<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	</head>
	<body>
		<?php include("../Header/HOMETOP.php"); ?>
		<div id="titre">
			<p>Une question ? Une réponse </p>
		</div>
		<section>
			<div class="question">Comment s'inscrire ?</div>
			<div class="reponse"><a href="../controleur/Inscription.php">Cliquer ici !</a></div>

			<div class="question">Comment se connecter ?</div>
			<div class="reponse"><a href="../controleur/Connexion.php">Cliquer ici !</a></div>

			<div class="question">Comment trouver ou rejoindre un groupe ?</div>
			<div class="reponse"><a href="../controleur/Sports.php">Faites une recherche ici en fonction de votre sport</a></div>

			<div class="question">Comment gérer votre mot de passe ?</div>
			<div class="reponse"><?php if(isset($_SESSION['mail'])and $_SESSION['mail']!=""){ ?>
				<a href="../controleur/Page_Personnelle.php">Cliquer ici pour accèder à votre profil et aller dans modifier</a></div><?php
			}else{?>
				<a href="../controleur/Connexion.php">Connectez vous d'abord</a></div><?php
			} ?>

			<div class="question">Comment crée votre groupe ?</div>
			<div class="reponse"><?php if(isset($_SESSION['mail'])and $_SESSION['mail']!=""){ ?>
				<a href="../controleur/Page_Personnelle.php">Cliquer ici pour accèder à votre profil et aller dans groupe puis créer un groupe</a></div><?php
			}else{?>
				<a href="../controleur/Connexion.php">Connectez vous d'abord</a></div><?php
			} ?>
			<?php
			foreach($Question as $q){?>
				<div class="question"><?php  echo $q['question'] ?></div>
				<div class="reponse"><?php  echo $q['reponse'] ?></div>
				<?php
			}
			?>
		</section>	
		<section id="mail">
			<p>Pour toute autre question, n'hésitez pas à nous contacter en nous envoyant un mail :</p>
			<a href="mailto:adresse@serveur.com" id="bouton_contact">Contactez-nous</a>

		</section>


		 <footer>	
	      	<div class="organisation">
	        	<h3>Partenaires premium</h3>
		        <table>
		        	<tbody>
		           		<tr>
			            	<td><img src="../Images/Logos/WebAward.png"><br><a>Awwwards : Best Web Design</a><br/></td>
			            	<td></td>
			            	<td><br><img src="../Images/Logos/Nike.png"><br/></td>
			            	<td><img src="../Images/Logos/Powerade.png"><br/></td>
			           		<td><br><img src="../Images/Logos/BNP.png"><br/></td>
		           		</tr>
		            	<div id="L1"></div>
		            	<tr>
			             	<td><h4 href="#"><br>Aide<br/></h4></td>
			             	<td><h4 href="#"><br>Langue<br/></h4></td>
			             	<td><h4 href="#"><br>Contact<br/></h4></td>
			             	<td><h4 href="#"><br>Plan du Site<br/></h4></td>
			             	<td><h4 href="#"><br>Mentions légales<br/></h4></td>
		           		</tr>
		         	</tbody>
		        </table>
	        	<div id="L2"></div>
	     	</div>
		    <div id="social" style="text-align: center">
		        <a href="https://www.facebook.com/workoutsociety/?ref=aymt_homepage_panel"><img src="../Images/Logos/Fb.png"></a>
		        <a href="https://twitter.com/?lang=fr"><img src="../Images/Logos/Tw.png"></a>
		        <a href="https://www.instagram.com"><img src="../Images/Logos/Insta.png"></a>
		        <a href="https://www.pinterest.com"><img src="../Images/Logos/Pint.png"></a>
		    </div>
	      	<div id="copyright" style="text-align: center">
	        	<a>Copyright www.sportciety.com </a>
	        	<a><br>Sportciety : 28 Rue Notre Dame des Champs, 75006 Paris </br></a>
	      	</div>
	    </footer>
	</body>
</html>