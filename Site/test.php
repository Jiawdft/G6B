<?php
include'modele/upload.php';

echo $_FILES['image_groupe']['name'].'</br>' ;    //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_image_groupe.png).
echo $_FILES['image_groupe']['type'].'</br>' ;    //Le type du fichier. Par exemple, cela peut être « image/png ».
echo $_FILES['image_groupe']['size'].'</br>' ;    //La taille du fichier en octets.
echo $_FILES['image_groupe']['tmp_name'].'</br>'; //L'adresse vers le fichier uploadé dans le répertoire temporaire.
echo $_FILES['image_groupe']['error'];    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.




upload('image_groupe','C:\Users\alexandre\Desktop/',10485760,array('png','gif','jpg','jpeg'));

?>