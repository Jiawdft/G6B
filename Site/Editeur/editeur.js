function commande(nom, argument){
    if (typeof argument === 'undefined') {
        argument = '';
    }
    if(document.queryCommandValue("bold")){
   		 document.getElementById("bouton_bold").className = "actif";
	}
	else{
	    document.getElementById("bouton_bold").className = "";
	}
    document.execCommand(nom, false, argument);
}


function resultat(){

	document.getElementById("resultat").value = document.getElementById("editeur").innerHTML;

}