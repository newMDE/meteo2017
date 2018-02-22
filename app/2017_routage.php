<?php
////////////////////////////////////////////////////////////////////////////////////
// $selon_log   		détermine l'accès aux pages selon qu'elles sont réservées 
//						aux log (log), aux non-log (non_log) ou à tous (tous)
// $inclure_defilant 	Inclusion du bandeau défilant des saisies du moment
// $inclure_header		Inclusion du bandeau haut de la page
// $contenu_inclus		Fichier de contenu à inclure
// $inclure_footer		Inclusion du pied de page
// $scripts_inclus[0]	Fichiers de scripts à inclure
// $classes_incluses[0]	Fichiers de classes à inclure
////////////////////////////////////////////////////////////////////////////////////

if(!isset($_GET["page"])){
    $page_demandee = "accueil";
}
else{
    $page_demandee = $_GET["page"];
}
    
    
switch($page_demandee)
{
    case "accueil":
		$selon_log="tous";
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_selon_log.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_accueil.php";
		$inclure_footer="non";
        break;
    case "accueil_logue":
		$selon_log="log";
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_participants.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_accueil_logue.php";
		$inclure_footer="non";
        break;
    case "annuaire":
		$selon_log="tous";
                $inclure_defilant="non";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_selon_log.php";
		$class_contenu="col-md-11";
		$inclure_header="oui";
		$inclure_menu="oui";
		$contenu_inclus="../pages/2017_annuaire.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_scripts_defilant.php";
        break;
    case "chasseurs":
		$selon_log="tous";
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_selon_log.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_chasseurs.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_scripts_defilant.php";
        break;
    case "classement":
		$selon_log="tous";
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_selon_log.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_classement.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_scripts_defilant.php";
		$scripts_inclus[1]="scripts/2017_scripts_classement.php";
        break;
    case "config_ecole_grandeurs":
		$selon_log="log";
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_participants.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_config_ecole_grandeurs.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_scripts_affiche_menu_horizontal.php";
		$scripts_inclus[1]="include/2017_menu_configuration_ecole.php";
        break;
    case "config_ecole_identite":
		$selon_log="log";
        $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_participants.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_config_ecole_identite.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_scripts_affiche_menu_horizontal.php";
		$scripts_inclus[1]="include/2017_menu_configuration_ecole.php";
        break;
    case "config_ecole_menus":
		$selon_log="log";
        $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_participants.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_config_ecole_menus.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_scripts_affiche_menu_horizontal.php";
		$scripts_inclus[1]="include/2017_menu_configuration_ecole.php";
        break;
    case "connexion":
		$selon_log="non_log";
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_visiteurs.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_connexion.php";
		$inclure_footer="non";
		$scripts_inclus[0]="js/2017_scripts_ajax_change_contenu_div.php";
        break;
    case "deconnexion":
		$selon_log="tous";
		$deconnexion = "oui"; //On passe en mode non logué
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_visiteurs.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_accueil.php";
		$inclure_footer="non";
        break;
    case "graphiques":
		$selon_log="tous";
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_selon_log.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_graphiques.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_scripts_defilant.php";
        break;
    case "pierrot":
		$selon_log="tous";
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_selon_log.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_pierrot.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_scripts_defilant.php";
        break;
    case "saisie_ciel_temp":
		$selon_log="log";
                $inclure_defilant="non";
		$inclure_header="non";
		$inclure_menu="non";
		//$class_menu="col-md-2";
		$class_contenu="col-md-12";
		$contenu_inclus="../pages/2017_saisie_ciel_temp.php";
		$inclure_footer="non";
		$scripts_inclus[0]="js/2017_ajax_get_file_in_id.php";
		$scripts_inclus[1]="js/2017_scripts_thermo_modifie_barre.php";
		//$scripts_inclus[3]="scripts/2017_scripts_temp_afficher_cacher.php";
		//$classes_incluses[0]="include/classes/Classe_Mesure_complet.php";
        break;
    case "saisie_nuages":
		$selon_log="log";
                $inclure_defilant="non";
		$inclure_header="non";
		$inclure_menu="non";
		//$class_menu="col-md-2";
		$class_contenu="col-md-12";
		$contenu_inclus="../pages/2017_saisie_nuages.php";
		$inclure_footer="non";
		$scripts_inclus[0]="js/2017_ajax_get_file_in_id.php";
		$scripts_inclus[1]="js/2017_scripts_nuages_afficher_cacher.php";
		//$classes_incluses[0]="include/classes/Classe_Mesure_complet.php";
        break;
    case "saisie_vent":
		$selon_log="log";
        $inclure_defilant="non";
		$inclure_header="non";
		$inclure_menu="non";
		//$class_menu="col-md-2";
		$class_contenu="col-md-12";
		$contenu_inclus="../pages/2017_saisie_vent.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_fonctions_dates_toutes_lettres.php";
		$scripts_inclus[0]="js/2017_ajax_get_file_in_id.php";
		$scripts_inclus[1]="js/2017_scripts_saisie_vent_direction_force.php";
		//$classes_incluses[0]="include/classes/Classe_Mesure_complet.php";
        break;
    case "saisie2":
		$selon_log="log";
        $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_saisie2.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_saisie2.php";
		$inclure_footer="non";
		$scripts_inclus[0]="scripts/2017_fonctions_dates_toutes_lettres.php";
		$scripts_inclus[1]="scripts/2017_ajax.php";
		$scripts_inclus[2]="scripts/2017_ajax_get_file_in_id.php";
        break;
    default:
		$selon_log="tous";
                $inclure_defilant="non";
		$inclure_header="oui";
		$inclure_menu="oui";
		$class_menu="col-md-1";
		$menu_inclus="../pages/2017_menu_selon_log.php";
		$class_contenu="col-md-11";
		$contenu_inclus="../pages/2017_accueil.php";
		$inclure_footer="non";
        break;
}
?>