<script type="text/javascript">
function Afficher_Cacher(elem) {
    image = "mde_"+elem;
    form = "form_"+elem; 
    if (document.getElementById(image).style.visibility === 'hidden') {
        document.getElementById(image).style.visibility = 'visible';
        document.getElementById(form).value = "1";        
    } else {
        document.getElementById(image).style.visibility = 'hidden';
        document.getElementById(form).value = "0";              
    }
}

function cacher(elem) {
    document.getElementById(elem).style.visibility = "hidden";
}

function afficher(elem) {
    document.getElementById(elem).style.visibility = "visible";
}

function Nomesure_nuages(){
    //rendre invisibles tous les nuages
    document.getElementById('mde_cirrus').style.visibility = "hidden";
    //Mettre à zéro le champ hidden form_existe_nuage
    document.getElementById('form_existe_nuage').value = "0";
    //Afficher l'image NOMESURE GRANDE TAILLE AU MILIEU DU GRAPHIQUE

}
</script>