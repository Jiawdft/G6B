<?php	
	echo 'ok';
	if(isset($_GET['sujet'])and isset($_GET['sous_sujet'])) {
		echo 'bonjour'
		?>
		<h1><?php echo strtoupper($_GET['sujet']) ?></h1>
		<h3><?php echo $_GET['sous_sujet'] ?></h3>
		<?php
		include'../modele/get_post.php';
		$posts=get_post($_GET['sujet'],$_GET['sous_sujet']);
		foreach($posts as $post) {
			?>
			<div id="post">
				<table>
					<th><h5><?php echo $post['auteur'].'</br>'.$post['date']; ?> </h5></th>
					<th><h6> <?php echo $post['post'] ?></h6></th>
				</table>
			</div>
		<?php
		}
	}
?>