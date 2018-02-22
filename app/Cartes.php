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
 * Description of newPHPClass
 *
 * @author taussac
 */
class Cartes {

    private $_ratio_carte; //Réduction de la carte (1=taille de l'image)
    private $_largeur_vignette_ciel; //Largeur des vignettes affichées : ciel
    private $_hauteur_vignette_ciel; //Hauteur des vignettes affichées : ciel
    private $_largeur_vignette_temp; //Largeur des vignettes affichées : température
    private $_hauteur_vignette_temp; //Hauteur des vignettes affichées : température
    private $_largeur_vignette_pres; //Largeur des vignettes affichées : pression
    private $_hauteur_vignette_pres; //Hauteur des vignettes affichées : pression
    private $_largeur_vignette_vent; //Largeur des vignettes affichées : vent
    private $_hauteur_vignette_vent; //Hauteur des vignettes affichées : vent
    private $_separation_vignette_px; //Espace minimum entre deux vignettes
    
    function __construct() {
         $this->_ratio_carte =1;
         $this->_largeur_vignette_ciel = 36;
         $this->_hauteur_vignette_ciel = 30;
         $this->_largeur_vignette_temp = 30;
         $this->_hauteur_vignette_temp = 30;
         $this->_largeur_vignette_pres = 35;
         $this->_hauteur_vignette_pres = 28;
         $this->_largeur_vignette_vent = 30;
         $this->_hauteur_vignette_vent = 30;
         $this->_separation_vignette_px = 3;        
    }

}
