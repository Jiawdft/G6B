function commande(nom, argument, target){
    if (typeof argument === 'undefined') {
        argument = '';
    }
    if (document.getElementById(target).style.backgroundColor=="") {
      document.getElementById(target).style.backgroundColor="#cecece";
    }
    else {
      document.getElementById(target).style.backgroundColor="";
    }

    document.execCommand(nom, false, argument);
}


function resultat(){

	document.getElementById("resultat").value = document.getElementById("editeur").innerHTML;
  document.form.submit();

}
