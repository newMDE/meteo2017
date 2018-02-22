<?php

/*/* 
 * The "Meteo des Ecoles" License
 *
 * Copyright 2018 Sylvain Taussac / Alexandre Nicolas pour l'ensemble du site
 * "La météo des écoles" à l'exception de morceaux de codes provenant de sources 
 * citées dans les fichiers.
 * 
 */

namespace App;

use \DateTime;
use \DateTimeZone;

/**
 * Description of parametres
 *
 * @author taussac
 */
class Parametres {
//VARIABLES
    private $_traductions_existantes = array('fr','cat','de','en','es','nl','oc');
    private $_langueaffichage; //Langue d'affichage
    private $_ecoleloguee; //Mode connexion ou pas
    private $_rneloguee; //Rne de l'école loguée
    private $_aujourdhui; //Date du jour (format datetime() )
    private $_datebdd; //Date des données manipulées (format datetime() )
    private $_pass; //Accès
    
// CONSTRUCTEUR
    
     public function __construct() {
         $this->_langueaffichage = "fr";
         $this->_ecoleloguee = "non";
        // $this->_rneloguee = ""; //Rne de l'école loguée
         $this->_aujourdhui = new DateTime('now',new DateTimeZone('Europe/Paris'));
         $this->_datebdd = clone $this->_aujourdhui; //au départ on considère que l'accès bdd est à la date de connexion
         if ( $this->_aujourdhui->format('H:i:s') > "13:00:00" )
         { $hour = "13:00:00";}
         else
         { $hour = "09:00:00";}
         $this->setDatebdd($this->_aujourdhui->format('Y-m-d'), $hour);
         $this->_pass = "pass1212";

     }

// LISTE DES GETTERS
    public function langueaffichage(){
        return $this->_langueaffichage;}

    public function ecoleloguee(){
        return $this->_ecoleloguee;}
    

    public function rneloguee(){
        return $this->_rneloguee;}
    
    public function aujourdhui(){
        return $this->_aujourdhui;
    }
    
    public function datebdd(){
        return $this->_datebdd;
    }
    
    public function pass(){
        return $this->_pass;
    }
    
// LISTE DES SETTERS
    
    public function setLangueaffichage($langue) {
	if (in_array($langue, $_traductions_existantes))
	{$this->_langueaffichage = $langue;}
        else {$this->_langueaffichage = "fr";}
    }

    public function setEcoleloguee($connecte) {
	if ($connecte==="oui" || $connecte==="non")
	{$this->_ecoleloguee = $connecte;}
        else {$this->_ecoleloguee = "non";}
    }


    public function setRneloguee($rne) {
	if ((is_numeric(substr($rne, 0, 7))) and (is_string(substr($rne, 7, 1))))
	{$this->_rneloguee = $rne;}
    }

    public function setDatebdd($day,$hour) {
        //Modif de l'heure
        if ( $hour === "13:00:00" )
        { $this->_datebdd->setTime(13,0);}//"13:00:00"
        else
        { $this->_datebdd->setTime(9,0);}//"09:00:00"
        //Modif du jour
        $jourbdd= substr($day,8,2);
        $moisbdd = substr($day,5,2);
        $anneebdd = substr($day,0,4);
        if(checkdate ( $moisbdd , $jourbdd , $anneebdd )){
             $this->_datebdd->setDate($anneebdd, $moisbdd, $jourbdd);
        }
    }
    
    //Fonctions de date
    public function date_toutes_lettres($langue,$date,$tab_jours,$tab_mois){
        //$langue = langue d'affichage
        //$date = objet date
        //$tab_jours = tableau des jours en langue d'affichage
        //$tab_mois = tableau des mois en langue d'affichage
        $date_ttes_lettres = $tab_jours[date_format($date,'w')]." ".date_format($date,'d')." ".$tab_mois[date_format($date,'n')]." ".date_format($date,'Y');
	return $date_ttes_lettres;
    }
    
    public function JourAujourdhui(){
        $jour = date_format($this->_aujourdhui,'Y-m-d');
        return $jour;
    }    
    public function HeureAujourdhui($type_heure){
        if($type_heure === "saisie"){
            if ( $this->_aujourdhui->format('H:i:s') > "13:00:00" )
            { $hour = "13:00";}
            else
            { $hour = "09:00";}
        }
        else{
            $hour = date_format($this->_aujourdhui,'H:i');
        }
        return $hour;
    }
    
    public function JourBDD(){
        $jour = date_format($this->_datebdd,'Y-m-d');
        return $jour;
    }    
    public function HeureBDD(){
        $heure = date_format($this->_datebdd,'H:i');
        return $heure;
    }
}
?>