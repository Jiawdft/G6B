<?php
		include_once'../modele/get_sports.php';
		$Sports=get_sports('');
		foreach ($Sports as $Sport) { ?>
			<a href="../controleur/Post.php?sujet=sport&sous_sujet=<?php echo $Sport['sport']?>" onclick="bascule('g'); return false;"><?php echo $Sport['sport']?></a>
			<br />
			<br />
		<?php
		}
	?>


<div id='g' style='display:none;'>
	<p>LISTE DES GROUPES :</p>
</div>