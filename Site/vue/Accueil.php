<!DOCTYPE html>
<html>
	<head>
		<title>Sporciety</title>
		<link href="../vue/Accueil.css" rel="stylesheet" type="text/css" media="screen" />
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
			   		<a id="inscription" href="../controleur/Inscription.php">Je m'inscris</a>
			   <div class="slider">
			    	<figure>
			    		
	    				<img src="../Images/Wallpaper/Slider.jpg">
	    				<img src="../Images/Wallpaper/Slider2.jpg">
	    				<img src="../Images/Wallpaper/Slider.jpg">
	    				<img src="../Images/Wallpaper/Slider2.jpg">
	    				<img src="../Images/Wallpaper/Slider.jpg">
	    		
	  				</figure>
  				</div>
			   	<div class="search">
				<ul>
					<form action='../fichesporttype/fichesporttype.php' method="post">
				
					<select name="choix">
					    <option value=''>Sport</option>
					    <?php
						foreach($sports as $sport)
						{
							?>
							<option value= <?php echo $sport['sport'] ?>><?php echo ucfirst(strtolower($sport['sport'])) ?></option>
							<?php
						}
						?>
					</select>
				
				    <input type="int" name="codepostal" placeholder="Code Postal" />
				    <input type="submit" value="Rechercher" />
					</form>
				</ul>
			</div>
	    </div>
		<div id="SPORT"; style="text-align: center">
			<a href="../Sports/Sports.php">LES SPORTS</a>
		</div>
		<div class="picture">
			<div class="pline1"; style="text-align: center">
				<div class="p1"><a href="../fichesporttype/fichesporttype.php?sport=BASKETBALL">BASKETBALL</a></div>
				<div class="p2"><a href="../fichesporttype/fichesporttype.php?sport=BOXE">BOXE</a></div>
				<div class="p3"><a href="../fichesporttype/fichesporttype.php?sport=SKI">SKI</a></div>
			</div>
			<div class="pline2"; style="text-align: center">
				<div class="p4"><a href="../fichesporttype/fichesporttype.php?sport=ATHLETISME">ATHLETISME</a></div>
				<div class="p5"><a href="../fichesporttype/fichesporttype.php?sport=RUGBY">RUGBY</a></div>
			</div>
			<div class="pline3"; style="text-align: center">
				<div class="p6"><a href="../fichesporttype/fichesporttype.php?sport=NATATION">NATATION</a></div>
				<div class="p7"><a href="../fichesporttype/fichesporttype.php?sport=TENNIS">TENNIS</a></div>
			</div>
		</div>
		<div id="MAPS" style="text-align: center">
			<a>PLAN</a>
		</div>
		<div class="googlemaps" style="text-align: center">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d85161.85430845951!2d2.3617916544987367!3d48.864518359376234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1457358140451" style="height: 100%; width: 92%; border: none;"></iframe>
		</div>
		</div>
		<div id="GROUPES" style="text-align: center">
			<a href="#">GROUPES POPULAIRES</a>
		</div>
		<div class="vedettes">
			<div class="vline"; style="text-align: center">
				<div class="v1">
					<a href="#">Patriots</a>
					<br />
					<img id="a1" src="../Images/Logos/Star.png">
					<img id="a2" src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
				</div>
				<div class="v2">
					<a href="#">Red Rings</a>
					<br />
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
				</div>
				<div class="v3">
					<a href="#">Chicago Bulls</a>
					<br />
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
				</div>
				<div class="v3">
					<a href="#">Chicago Bulls</a>
					<br />
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
				</div>
				<div class="v3">
					<a href="#">Chicago Bulls</a>
					<br />
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
					<img src="../Images/Logos/Star.png">
				</div>
			</div>
	</body>
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
</html>