<?php

class test{
    const CONSTANTE = "Voilou";
//    public $nomconstante;

        public static function affiche($nomconstante){
        echo self::CONSTANTE;
    }
}

$nom = "CONSTANTE";
test::affiche($nom);

class Aiguillage {
    //PLANISPHERE
    static $_tab_type;
    static $_tab_valeur;
    
    static function setType(){
        self::$_tab_type['type']['GLOBE'] = "carte" ;
    }
    static function setValeur(){
        self::$_tab_valeur['valeur']['GLOBE'] = "../pages/2017_connexion_zone_0globe_lang.php" ;
    }
    
    static function Type($zone){
        return self::$_tab_type['type'][$zone];
    }
    
    static function Valeur($zone){
        return self::$_tab_valeur['valeur'][$zone];
    }
}

Aiguillage::setType();
Aiguillage::setValeur();
echo "<br>Type Globe : ".Aiguillage::Type('GLOBE');
echo "<br>Valeur Globe : ".Aiguillage::Valeur('GLOBE');