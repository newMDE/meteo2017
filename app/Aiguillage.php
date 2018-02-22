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

/**
 * Description of Aiguillage
 *
 * @author taussac
 * 
 * Classe permettant de gérer le cheminement du planisphère à la liste des écoles
 * Planisphère -> Continent -> Pays -> Région
 * 
 * Les constantes fonctionnent par paire :
 *ZONE_GEOGRAPHIQUE_SUIVANT : carte (le clic envoi vers une carte) OU
 * liste (envoie vers la liste des écoles)
 *ZONE_GEOGRAPHIQUE_VALEUR : le nom du fichier contenant la carte et son mapping OU
 * la requête qui renverra la liste des écoles incluse dans le formulaire
 * 
 * Classe réalisée d'après le tuto SINGLETON de GRAFIKART 
 */
class Aiguillage {
    private $tab_aiguillage = [];
    private static $_instance; // L'attribut qui stockera l'instance unique

    /**
    * La méthode statique qui permet d'instancier ou de récupérer l'instance unique
    **/
    public static function getInstance($file)
    {
        //if (is_null(self::$_instance)) {
            self::$_instance = new Aiguillage($file);
        //}
        return self::$_instance;
    }

    /**
    * Le constrcuteur avec sa logique est privé pour émpêcher l'instanciation en dehors de la classe
    **/
    private function __construct($file){
        $this->tab_aiguillage = require($file);
    }

    /**
    *  Permet d'obtenir la valeur de la configuration
    *  @param $key string clef à récupérer
    *  @return mixed
    **/
    public function get_type($key)
    {
        if (!isset($this->tab_aiguillage[$key]['type'])) {
            return $this->tab_aiguillage['GLOBE']['type'];
        }
        return $this->tab_aiguillage[$key]['type'];
    }

    public function get_valeur($key)
    {
        if (!isset($this->tab_aiguillage[$key]['valeur'])) {
            return $this->tab_aiguillage['GLOBE']['valeur'];
        }
        return $this->tab_aiguillage[$key]['valeur'];
    }
}
//A VIRER (debug)
//$file= dirname(__DIR__)."/config/config_zone_connexion.php";
//var_dump($file);
//$config = Aiguillage::getInstance($file);
