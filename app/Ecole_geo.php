<?php

namespace App;

/**
 * Description of Ecole_geo
 *
 * Contient les informations géographiques d'une école
 * 
 * @author taussac
 */

class Ecole_geo {

    private $_rne;
    private $_nom;
    private $_altitude;
    private $_latitude;
    private $_longitude;
    private $_idcontinent;
    private $_continent;
    private $_idpays;
    private $_pays;
    private $_dep;
    private $_idville;
    private $_ville;
    private $_timezone_region;
    private $_drapeau;

    //CONSTRUCTEUR
    public function __construct($donnees) {
        $this->hydrate($donnees);
    }

    // LISTE DES GETTERS
    public function rne() {
        return $this->_rne;
    }

    public function nom() {
        return $this->_nom;
    }

    public function altitude() {
        return $this->_altitude;
    }

    public function latitude() {
        return $this->_latitude;
    }

    public function longitude() {
        return $this->_longitude;
    }

    public function idcontinent() {
        return $this->_idcontinent;
    }

    public function continent() {
        return $this->_continent;
    }

    public function idpays() {
        return $this->_idpays;
    }

    public function pays() {
        return $this->_pays;
    }

    public function dep() {
        return $this->_dep;
    }

    public function idville() {
        return $this->_idville;
    }

    public function ville() {
        return $this->_ville;
    }

    public function timezone_region() {
        return $this->_timezone_region;
    }

    public function drapeau() {
        return $this->_drapeau;
    }

    // LISTE DES SETTERS
    public function setNom($nom) {
        if (is_string($nom)) {
            $this->_nom = $nom;
        }
    }

    public function setRne($rne) {
        if (is_numeric(substr($rne, 0, 7)) and ctype_alpha(substr($rne, 7, 1))) {
            $this->_rne = $rne;
        }
    }

    public function setAltitude($altitude) {
        $altitude = (int) $altitude; //On garde la partie entière
        // On vérifie ensuite si ce nombre est bien positif.
        if ($altitude >= 0) {
            $this->_altitude = $altitude;
        }
    }

    public function setLatitude($latitude) {
        if (is_numeric($latitude)) {
            $this->_latitude = $latitude;
        }
    }

    public function setLongitude($longitude) {
        if (is_numeric($longitude)) {
            $this->_longitude = $longitude;
        }
    }

    public function setIdContinent($idcontinent) {
        if (is_numeric($idcontinent)) {
            $this->_idcontinent = $idcontinent;
        }
    }

    public function setContinent($continent) {
        if (is_string($continent)) {
            $this->_continent = $continent;
        }
    }

    public function setIdPays($idpays) {
        if (is_numeric($idpays)) {
            $this->_idpays = $idpays;
        }
    }

    public function setPays($pays) {
        if (is_string($pays)) {
            $this->_pays = $pays;
        }
    }

    public function setDep($dep) {
        if (is_numeric($dep)) {
            $this->_dep = $dep;
        }
    }

    public function setIdVille($idville) {
        if (is_numeric($idville)) {
            $this->_idville = $idville;
        }
    }

    public function setVille($ville) {
        if (is_string($ville)) {
            $this->_ville = $ville;
        }
    }

    public function setTimezone_region($timezone_region) {
        if (is_string($timezone_region)) {
            $this->_timezone_region = $timezone_region;
        }
    }

    public function setDrapeau($drapeau) {
        if (is_string($drapeau)) {
            $this->_drapeau = $drapeau;
        }
    }

    //HYDRATATION (Remplissage de tous les attributs à partir d'un tableau)	
    public function hydrate(array $donnees_geo_ecoles) {
        //On parcourt les clefs du tableau qui ont chacune une valeur
        //Exemple $donnees_geo_ecoles['nom']="TOULOUSE - Ecole Jules Romain"
        //Ainsi On n'a pas à réécrire la fonction hydrate si on rajoute des attributs à la classe
        foreach ($donnees_geo_ecoles as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set' . ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

}

//TESTS DEBUG
//$monEcole = new Ecole_geo("0341723N");
//echo "L'ecole ".$monEcole->NOM_ecole();
?>
