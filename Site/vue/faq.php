<!DOCTYPE html>
<html>
<head>
	<title>Aide</title>
	<link rel="stylesheet" type="text/css" href="../vue/faq.css" media="screen">
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
</head>
<body>
	<header>
		<div class="menu">
			<div id="left">
		    	<a href="../controleur/Accueil.php"><img src="../Images/Logos/Sporciety.png" style="height: 4em;" /></a>
			</div>

			<ul id="right">
		    	<li><a href="../controleur/Sports.php">LES SPORTS</a></li>
            	<li><a href="../controleur/Forum.php">FORUM</a></li>
            	<li><a href="../controleur/Contact.php">CONTACT</a></li>
           		<?php if(isset($_SESSION['mail'])){
			          	?>
			          	<li><a href="../controleur/session_destroy.php">DECONNEXION</a></li>
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
	</header>

	<h1>Une question ? Une réponse </h1>



	<section>
		<div class="question">Comment s'inscrire ?</div>
		<div class="reponse">Ceci est la réponse !</div>

		<div class="question">Comment se connecter ?</div>
		<div class="reponse">Ceci est la réponse !</div>

		<div class="question">Comment trouver ou rejoindre un groupe</div>
		<div class="reponse">Ceci est la réponse !</div>

		<div class="question">Gérer votre mot de passe</div>
		<div class="reponse">Ceci est la réponse !</div>

		<div class="question">Crée votre groupe</div>
		<div class="reponse">Ceci est la réponse !</div>
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