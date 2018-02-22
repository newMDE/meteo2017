<!-- AJAX AJAX AJAX Site du zéro / CHANGER LE CONTENU D'UN DIV-->
<script type="text/javascript" src="js/oXHR.js"></script><!-- Fonction instanciation objet XMLHttpRequest -->
<script type="text/javascript">
<!-- AJAX appelle le script 
function request(callback,id_objet,chemin) {
	var xhr = getXMLHttpRequest(); //Fonction définie dans oXHR.js
	
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			callback(xhr.responseText,id_objet);
		}
	};
	xhr.open("GET", chemin , true);
	xhr.send(null);
}

function change_contenu_div(oData,id) {
	$('#'+id).empty(); // on vide le div
	$('#'+id).append(oData); // on met dans le div le rsultat de la requete ajax
}
</script>
<!-- FIN AJAX AJAX AJAX Site du zéro-->