<!DOCTYPE html>
<html>
	<head>
		<title>Forum</title>
		<link href="../vue/forum.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>

	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		
		<div class="forum">

			<h1> Forum </h1>

			<div id="sport">
				<a href="../controleur/Post.php?sujet=sport">Sports</a>
			</div>

			<div id="groupe">
				<a href="../vue/Post.php?sujet=groupe">Groupes</a>
			</div>

			<div id="club">
				<a href="../vue/Post.php?sujet=club">Clubs</a>
			</div>

			<div id="question">
				<a href="../vue/Post.php?sujet=question">Questions</a>
			</div>

<<<<<<< Updated upstream
		</div>
=======
			<div class="sommaire">
			<table>
				<tr>
					<td><div id="Question">
						<h3 onclick="bascule('t'); return false;">Question</h3>
						<div id='t' style='display:none;'>
						<p><h4>Question</h4></p>
					</div>
					</div></td>
					<td><h5>x</h5></td>
					<td><h5>x</h5></td>
					<td><h5>x</h5></td>
				</tr>
			</table>
				</div>


	<table>
	</table>		
		


>>>>>>> Stashed changes
	</body>
</html>