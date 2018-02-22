<?php

/* 
 * The "Meteo des Ecoles" License
 *
 * Copyright 2018 Sylvain Taussac / Alexandre Nicolas pour l'ensemble du site
 *
 * "La météo des écoles" à l'exception de morceaux de codes provenant de sources
 * citées dans les fichiers.
 */
namespace App;

require_once ('../app/Aiguillage.php');

use PDO;

//Chemin vers le fichier contenant les infos d'affichage de carte ou de
// formulaire avec liste des écoles de la zone

$file= dirname(__DIR__)."/config/config_zone_connexion.php";

//Récupération de la zone
$zone = $_GET['zone'];

//Vérification Mot de passe
if(isset($_GET['errone']))
{$passe_errone = $_GET['errone'];}

//Récupération du type de page (carte ou formulaire avec liste
$type = Aiguillage::getInstance($file)->get_type($zone);
//Récupération soit de l'URL de la page de la carte soit de la requête pour
//obtenir la liste des écoles à afficher
$valeur = Aiguillage::getInstance($file)->get_valeur($zone);
//var_dump($sortie);
switch($type)
{
    case "carte":
	require($valeur); 
        break;
    
    case "liste":
        $chemin = "../pages/2017_connexion_formulaire_login_lang.php";
        include($chemin);
        break;
}
