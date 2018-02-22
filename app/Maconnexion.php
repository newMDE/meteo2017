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
 * Description of Connect
 *Classe permettant de garder la connexion ouverte et de stocker les param d'accès
 * @author taussac d'après GRAFIKART.COM
 */
class Maconnexion {
    const DB_NAME = 'meteodesecoles'; //idem
    const DB_USER = 'root'; //'meteodesecoles'
    const DB_PASS = ''; //'Go0XyjCcIU0P'
    const DB_HOST = 'localhost'; //'mysql:host=mysql5-13'
    
    private static $database;
    
    public static function getDb() {
        if(self::$database === NULL){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }
}
