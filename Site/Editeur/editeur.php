<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../Editeur/editeur.css">
	</head>
	<body>

				<input type="button" value="G" style="font-weight:bold;" onclick="commande('bold');" id="bouton_bold"/> 
			    <input type="button" value="I" style="font-style:italic;" onclick="commande('italic');" id="bouton_italic"/> 
			    <input type="button" value="S" style="text-decoration:underline;" onclick="commande('underline');" id="bouton_underline"/> 
			    <br><br>
			    <div id="editeur" contentEditable></div>
			    <input type="button" value="Obtenir le HTML" onclick="resultat();"/>
			<form name="form" action='../Editeur/test.php' method="post">  
			    <input type="hidden" name="resultat" id="resultat"> <br>
			    <input type="submit" value="CREER" />
			</form> 

		    <script type="text/javascript" src="../Editeur/editeur.js"></script>
	</body>
</html>