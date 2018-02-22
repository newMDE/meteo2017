<?php
//require_once("include/classes/Classe_Mesure_complet.php");
require_once("scripts/2017_fonctions_sanitize_variables.php");
require_once("Mesure_complet.php");
require_once("Parametres.php");
session_start();
//1 - Aseptisation de _GET['origine']
if(isset($_GET['origine'])){
$origine_appel=sanitizeString($_GET['origine']);}

//2 - Mise à jour éventuelle de la date et de l'heure
    $modif_datebdd = FALSE;
    $jourmesure = $_SESSION['param']->JourBDD();
    $heuremesure = $_SESSION['param']->HeureBDD();

    if(isset($_GET['jour'])){      
        $jour_appel=sanitizeString($_GET['jour']);
        if($jour_appel != $jourmesure){
            echo "<br> Entrée dans jour";  
            $jourmesure = $jour_appel;
            $modif_datebdd = TRUE;
        }
    }
    if(isset($_GET['heure'])){
        $heure_appel=sanitizeString($_GET['heure']);
        $heure_appel_secondes = $heuremesure.":00"; //les secondes semblent perdues lors 
        if(($heure_appel != $heuremesure) AND ($heure_appel != $heure_appel_secondes)){
            $heuremesure = $heure_appel;
            $modif_datebdd = TRUE;
        }
    }
    //MAJ date bdd dans param
    if($modif_datebdd){
        $_SESSION['param']->setDatebdd($jourmesure,$heuremesure);
    }

//2 - Création de Mesure_complet lors du premier passage
if(!isset($_SESSION['mesure'])){
    $_SESSION['mesure'] = new App\Mesure_complet;
    $_SESSION['mesure']->setRne($_SESSION['ecole_loguee']['RNE']);
    $_SESSION['mesure']->setDate_mesure($jourmesure);
    $_SESSION['mesure']->setHeure($heuremesure);
}
 //               var_dump($_SESSION['param']);

//$aujourdhui = new DateTime('now',new DateTimeZone($_SESSION['ecole_loguee']->timezone_region())); 
//$date_saisie = clone $aujourdhui;
//$_SESSION['aujourdhui']=serialize($aujourdhui);
//$_SESSION['date_saisie']=serialize($date_saisie);
//$essai=unserialize($_SESSION['date_saisie']);
//echo $essai->format('w');
switch($origine_appel)
{
case "nouvelle_saisie" :
//On vient de se connecter ou de choisir une date pour une nouvelle saisie
//On traite d'abord l'observation du ciel, seule (saisie_ciel_seul)
//ou avec temperature (saisie_ciel_temp)
	if(($_SESSION['ecole_loguee']['CIEL']===1) AND ($_SESSION['ecole_loguee']['TEMP']===0))
	{
		header("Location:../public/index.php?page=saisie_ciel");
	}
	else
	{
		header("Location:../public/index.php?page=saisie_ciel_temp");
	}
	break;
case "ciel" :	//chemin : CIEL / nuages / vent / pression / neige / Carte
	//1 - écrire la valeur du ciel dans l'objet Mesure_complet
        // FAIT LORS DU CLIC SUR L'ICONE (via l'appel AJAX de 2017_saisie_insertion_image_ciel.php)
	//2 - Rediriger vers la page de saisie suivante (NUAGES) si nécessaire ou
	// vers ce script pour la mesure suivante (VENT)
	if($_SESSION['ecole_loguee']['NUAGE']===1)
	{
            header("Location:../public/index.php?page=saisie_nuages");
	}
	else
	{
		header("#?origine=nuages");
		//header("Location:2017_saisie_routage.php?origine=carte");

	}
	break;

case "ciel_temp" :	//chemin : CIEL_TEMP / nuages / vent / pression / neige / Carte
	//1 - écrire les valeurs du ciel et de la température dans l'objet Mesure_complet
            // CIEL FAIT LORS DU CLIC SUR L'ICONE (via l'appel AJAX de 2017_saisie_insertion_image_ciel.php)
            //Température :
        $temp = sanitizeString($_POST['form_temperature']);
        if($temp != -111){
            $_SESSION['mesure']->setTemp($temp);
            $_SESSION['mesure']->setExiste_temp(TRUE);
        }
	//2 - Rediriger vers la page de saisie suivante (NUAGES) si nécessaire ou
	// vers ce script pour la mesure suivante (VENT)
        //echo "On est dans ciel_temp : ".$_SESSION['ecole_loguee']['NUAGE'];
        
	if($_SESSION['ecole_loguee']['NUAGE'] == 1)
	{
	            //echo "Entré !";
                header("Location:../public/index.php?page=saisie_nuages");
//		header("Location:../public/index.php?page=saisie_ciel_temp");
	}
	else
	{
		header("Location:2017_saisie_routage.php?origine=nuages");
		//header("Location:2017_saisie_routage.php?origine=carte");

	}
	break;

case "nuages" :	//chemin : ciel ou ciel_temp / NUAGES / vent / pression / neige / Carte
	//1 - écrire les valeurs des nuages dans l'objet Mesure_complet
        $form_cirrus = sanitizeString($_POST['form_cirrus']);
        $form_cirrostratus = sanitizeString($_POST['form_cirrostratus']);
        $form_cirrocumulus = sanitizeString($_POST['form_cirrocumulus']);
        $form_nimbostratus = sanitizeString($_POST['form_nimbostratus']);
        $form_cumulonimbus = sanitizeString($_POST['form_cumulonimbus']);
        $form_stratocumulus = sanitizeString($_POST['form_stratocumulus']);
        $form_altostratus = sanitizeString($_POST['form_altostratus']);
        $form_altocumulus = sanitizeString($_POST['form_altocumulus']);
        $form_stratus = sanitizeString($_POST['form_stratus']);
        $form_cumulus = sanitizeString($_POST['form_cumulus']);
        $form_existe_nuage = sanitizeString($_POST['form_existe_nuage']);
        if($form_existe_nuage === 1){
//            //Reconstitution de la données nuage (type 0110111000)
//            $mesure_nuages = $form_cirrus.$form_cirrostratus.$form_cirrocumulus;
//            $mesure_nuages .= $form_nimbostratus.$form_cumulonimbus.$form_stratocumulus;
//            $mesure_nuages .= $form_altostratus.$form_altocumulus.$form_stratus.$form_cumulus;
            $_SESSION['mesure']->setNuage_ci($form_cirrus);
            $_SESSION['mesure']->setNuage_cs($form_cirrostratus);
            $_SESSION['mesure']->setNuage_cc($form_cirrocumulus);
            $_SESSION['mesure']->setNuage_ns($form_nimbostratus);
            $_SESSION['mesure']->setNuage_cn($form_cumulonimbus);
            $_SESSION['mesure']->setNuage_sc($form_stratocumulus);
            $_SESSION['mesure']->setNuage_as($form_altostratus);
            $_SESSION['mesure']->setNuage_ac($form_altocumulus);
            $_SESSION['mesure']->setNuage_st($form_stratus);
            $_SESSION['mesure']->setNuage_cu($form_cumulus);
        }
	//2 - Rediriger vers la page de saisie suivante (VENT) si nécessaire ou
	// vers ce script pour la mesure suivante (PRESSION)        
        if($_SESSION['ecole_loguee']['VENT']==1)	{
		header("Location:../public/index.php?page=saisie_vent");
	}
	else
	{
		header("Location:2017_saisie_routage.php?origine=vent");
        }
	break;

case "vent" :	//chemin : ciel ou ciel_temp / nuages / VENT / pression / neige / Carte
	//1 - écrire les valeurs du vent dans l'objet Mesure_complet
	//2 - Rediriger vers la page de saisie suivante (PRESSION) si nécessaire ou
	// vers ce script pour la mesure suivante (NEIGE)
	if($_SESSION['ecole_loguee']['PRES']===1)
	{
		header("Location:../public/index.php?page=saisie_pression");
	}
	else
	{
		header("Location:2017_saisie_routage.php?origine=pression");
	}
	break;

case "pression" :	//chemin : ciel ou ciel_temp / nuages / vent / PRESSION / neige / Carte
	//1 - écrire la valeur de la pression dans l'objet Mesure_complet
	//2 - Rediriger vers la page de saisie suivante (NEIGE) si nécessaire ou
	// vers la carte (car NEIGE est la dernière)
	if($_SESSION['ecole_loguee']['NEIGE']===1)
	{
		header("Location:../public/index.php?page=neige");
	}
	else
	{
		header("Location:2017_saisie_routage.php?origine=neige");
	}
	break;

case "neige" :
	//1 - écrire la valeur de hauteur de neige dans l'objet Mesure_complet
	//2 - Rediriger vers la carte (car NEIGE est la dernière)
	//header("Location:2017_saisie_routage.php?origine=carte");
	echo "ON VA AFFICHER LE BILAN DE LA SAISIE<br>";
        var_dump($_SESSION['mesure']);
        break;
	
default :
        //On redirige vers la page d'accueil
        header("Location:../public/index.php");

}
?>