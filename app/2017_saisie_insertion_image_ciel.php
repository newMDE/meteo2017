<?php
require_once("Mesure_complet.php");
require_once("scripts/2017_fonctions_sanitize_variables.php");
$num_ciel = sanitizeString($_GET['NumCiel']);
session_start();
//Mise à jour des valeurs de saisie dans la variable de classe Mesure_complet
$_SESSION['mesure']->setCiel($num_ciel);
$_SESSION['mesure']->setExiste_ciel(TRUE);
//Récupération du texte selon num_ciel
switch($num_ciel)
{
    case 0 :
	$texte_ciel = _("Pas d'observation");
        $image_ciel = "nomesure";
        $_SESSION['mesure']->setExiste_ciel(FALSE);
        break;
    case 1 :
	$texte_ciel = _("Ensoleillé");
        $image_ciel = "soleil";
        break;
    case 3 :
	$texte_ciel = _("Nuageux avec éclaircies");
        $image_ciel = "nuageux";
        break;
    case 4 :
	$texte_ciel = _("Variable avec averses");
        $image_ciel = "variable-averses";
        break;
    case 5 :
	$texte_ciel = _("Couvert");
        $image_ciel = "couvert_nuageux";
        break;
    case 6 :
	$texte_ciel = _("Orageux");
        $image_ciel = "orage";
        break;
    case 7 :
	$texte_ciel = _("Pluvieux");
        $image_ciel = "couvert_pluies";
        break;
    case 8 :
	$texte_ciel = _("Neige");
        $image_ciel = "neige_forte";
        break;
    case 9 :
	$texte_ciel = _("Brouillard");
        $image_ciel = "brouillard";
        break;
}
echo "<img src=\"../public/images/saisie/ciel_";
echo $image_ciel;
echo "_256px.gif\" />";
echo "<p>".$texte_ciel."</p>";
?>