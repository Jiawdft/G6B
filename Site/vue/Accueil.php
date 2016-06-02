<!DOCTYPE html>
<html>
	<head>
		<title>Sporciety</title>
		<link href="../vue/Accueil.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>		
		
		<?php include("../Header/HOMETOP Slider.php"); ?>

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
				<form action='../controleur/Fichesporttype.php' method="post">
			
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
			
			    <input id="codepo" type="int" name="codepostal" placeholder="Code Postal" />
			    <input type="submit" value="Rechercher" />
				</form>
			</ul>
	    </div>
		<div id="SPORT"; style="text-align: center">
			<a href="../Sports/Sports.php">LES SPORTS</a>
		</div>
		<div class="picture">
			<div class="pline1"; style="text-align: center">
				<div class="p1"><a href="../controleur/Fichesporttype.php?sport=BASKETBALL">BASKETBALL</a></div>
				<div class="p2"><a href="../controleur/Fichesporttype.php?sport=BOXE">BOXE</a></div>
				<div class="p3"><a href="../controleur/Fichesporttype.php?sport=SKI">SKI</a></div>
			</div>
			<div class="pline2"; style="text-align: center">
				<div class="p4"><a href="../controleur/Fichesporttype.php?sport=ATHLETISME">ATHLETISME</a></div>
				<div class="p5"><a href="../controleur/Fichesporttype.php?sport=RUGBY">RUGBY</a></div>
			</div>
			<div class="pline3"; style="text-align: center">
				<div class="p6"><a href="../controleur/Fichesporttype.php?sport=NATATION">NATATION</a></div>
				<div class="p7"><a href="../controleur/Fichesporttype.php?sport=TENNIS">TENNIS</a></div>
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
			<a href="#">DERNIERS GROUPES</a>
		</div>
		<div class="vedettes">
			<div class="vline"; style="text-align: center">
				<?php
				include ("../modele/get_last.php");
				$groupes=get_last();
				$a=1;
				foreach ($groupes as $groupe) {
					?>
					<div class='v<?php echo $a ?>'>
					<a href='../controleur/Groupe.php?groupe=<?php echo $groupe['groupe']?>'><?php echo ucfirst(strtolower($groupe['groupe']))?></a>
				</div>
					<?php
				 } 
				?>
			</div>
	</body>

	<?php include("../Footer/Footer.php"); ?>
	
</html>