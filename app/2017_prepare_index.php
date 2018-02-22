<?php

/* 
 * The "Meteo des Ecoles" License
 *
 * Copyright 2018 Sylvain Taussac / Alexandre Nicolas pour l'ensemble du site
 *
 * "La météo des écoles" à l'exception de morceaux de codes provenant de sources
 * citées dans les fichiers.
 */

//1 - Définition des paramètres généraux s'ils n'existent pas encore
if(!isset($_SESSION['param'])){
    $_SESSION['param'] = new \App\Parametres;
}
//2 - DEFINITION DE LA PAGE AFFICHEE, de ses scripts,...
require ('../app/2017_routage.php');

//3 - CAS DE DECONNEXION ($deconnexion est géré dans 2017_routage.php
if(isset($deconnexion)){
    if($deconnexion==="oui")
    {
            $_SESSION['param']->setEcoleloguee("non"); //On passe en mode déconnecté
            unset($_SESSION['ecole_loguee']);
    }
}

// 4 - CAS DE PAGE ACCESSIBLES SEULEMENT EN LOGUE ALORS QUE PAS LOGUE
if(($selon_log=="log")and ($_SESSION['param']->ecoleloguee() === "non"))
{header("Location:index.php?page=accueil");}

// 5 - CAS DE PAGE ACCESSIBLES SEULEMENT EN NON LOGUE ALORS QUE LOGUE
if(($selon_log=="non_log")and ($_SESSION['param']->ecoleloguee() === "oui"))
{header("Location:index.php?page=accueil");}

// 6 - SI NECESSAIRE, RECUP DES INFOS DE L'ECOLE LOGUEE
if($_SESSION['param']->ecoleloguee() === "oui"){
    if(!isset($_SESSION['ecole_loguee']))
    {
        $langue_en_cours = $_SESSION['param']->langueaffichage();
        $rne = $_SESSION['param']->rneloguee();
        
        $requete = "SELECT ecole.RNE,ecole.NOM,ecole.MDP,ecole.LATITUDE, ecole.LONGITUDE, ";
        $requete .= "ecole.ID_CARTE_PREFERENCE,villes.ID_VILLE,villes.DEP,ecole.ALTITUDE, ";
        $requete .= "ecole.MAIL,ecole.MDPmaitre,ecole.ID_GLOBE,ecole.CIEL,ecole.COMMENTAIRES, ";
        $requete .= "ecole.ENSEIGNANT,ecole.NIVEAU,ecole.TEMP,ecole.TEMP_GLOBE,ecole.TEMPMINMAX, ";
        $requete .= "ecole.TEMPMINMAX_GLOBE,ecole.PREC,ecole.ADRESSE,ecole.MAIL_PROF, ";
        $requete .= "ecole.MAIL_ELEVES,ecole.TELEPHONE,ecole.PRECMOIS,ecole.PRES, ";
        $requete .= "ecole.PRES_GLOBE,ecole.VENT,ecole.FORCE,ecole.NUAGE,ecole.NUAGE_GLOBE, ";
        $requete .= "ecole.NEIGE,ecole.TELEPHONE_PROF,ecole.SITE, ecole.PRESENTATION, ";
        $requete .= "ecole.AFFICHAGE,ecole.VALIDATION,ecole.BULLETIN,ecole.BULLETIN_FR, ";
        $requete .= "ecole.BULLETIN_EN,ecole.BULLETIN_CAT,villes.VILLE, villes.TIMEZONE_REGION, ";
	$requete .= "pays_langues.ID_PAYS, pays_langues.NOM_PAYS, pays_langues.DRAPEAU, ";
        $requete .= "continents_langues.ID_CONTINENT, continents_langues.NOM_CONTINENT ";
	$requete .= "FROM ecole,villes,pays_langues,continents_langues ";
	$requete .= "WHERE ecole.RNE=\"".$rne."\" AND ecole.ID_VILLE=villes.ID_VILLE ";
	$requete .= "AND villes.ID_PAYS=pays_langues.ID_PAYS AND pays_langues.ID_CONTINENT=continents_langues.ID_CONTINENT ";
	$requete .= "AND pays_langues.ID_LANGUE='".$langue_en_cours."' AND continents_langues.ID_LANGUE='".$langue_en_cours."' ";
 
        $attributs = array($rne);
        $_SESSION['ecole_loguee'] = \App\Maconnexion::getDb()->prepare($requete,$attributs,'app\Table\Ecole',TRUE);
    }
}
if(isset($_SESSION['ecole_loguee'])){
    //var_dump($_SESSION['ecole_loguee']);
}
