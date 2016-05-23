<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../Editeur.editeur.css">
	</head>
	<body>
		<form action='../controleur/new_event.php' method="post">
			<input type="button" value="G" style="font-weight:bold;" onclick="commande('bold');" id="bouton_bold"/> 
		    <input type="button" value="I" style="font-style:italic;" onclick="commande('italic');" id="bouton_italic"/> 
		    <input type="button" value="S" style="text-decoration:underline;" onclick="commande('underline');" id="bouton_underline"/> 


		</form>
		
	</body>
</html>