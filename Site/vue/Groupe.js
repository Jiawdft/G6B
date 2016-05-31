function popAlert(message){
	alert (message);
}
function bascule(elem) {
      var i, str;
         if(document.getElementById(elem).style.display=="none") {
         for (i=1; i<=6; i++) {
         str='div'+i;
         if (document.getElementById(str).style.display=="block") {
         document.getElementById(str).style.display = 'none';
         }
         }
         document.getElementById(elem).style.display="block";
         }
         else {
        document.getElementById(elem).style.display = 'none';
         }
      }