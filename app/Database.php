<?php

/*/* 
 * The "Meteo des Ecoles" License
 *
 * Copyright 2018 Sylvain Taussac / Alexandre Nicolas pour l'ensemble du site
 * "La météo des écoles" à l'exception de morceaux de codes provenant de sources 
 * citées dans les fichiers.
 * 
 *Mise en place de la connexion à la BDD selon les tutos du site www.grafikart.fr
 */

namespace App;

use PDO;

/**
 * Description of database
 *
 * @author taussac
 */
class Database {
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;
    const MDP_UNIVERSEL = "pass1212";


    public function __construct($db_name,$db_user,$db_pass,$db_host) {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }  
            
    private function getPDO () {
        if($this->pdo === NULL){
        //$pdo = new PDO('mysql:host=localhost;dbname=meteodesecoles', 'root', '');
        $pdo = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name, $this->db_user, $this->db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        }
        return $this->pdo;
    }
    
    public function query($statement) {
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }
    
    //La fonction prepare sécurise la requête SQL. Les attributs sont utilisés dans PDO->execute. 
    //Elle renvoie un objet selon la classe passée.Si un seul résultat, unique = TRUE
    //ATTENTION : POUR L'INSTANT RENVOIE UN TABLEAU ASSOCIATIF
    public function prepare($mysql,$attributs,$nom_classe,$unique = FALSE){
        $req = $this->getPDO()->prepare($mysql);
//        var_dump($nom_classe);
        $req->execute($attributs);
        //$req->PDOStatement::setFetchMode(PDO::FETCH_CLASS,$nom_classe);
        if($unique){
            $datas = $req->fetch();
        }
        else{
            $datas = $req->fetchAll();          
        }
        return $datas;
    }
    public function mdp($valeur,$rne){
        $requete = "SELECT `ecole`.`MDP`, `ecole`.`MDPmaitre` FROM `ecole` WHERE `ecole`.`RNE`='".$rne."'";
        $mdps = $this->query($requete);
        switch($valeur){
                case $mdps[0]->MDP :
		$mdp_ok = TRUE;
                $mdp_type = "eleve";
                break;

                case $mdps[0]->MDPmaitre :
		$mdp_ok = TRUE;
                $mdp_type = "maitre";
                break;

                case self::MDP_UNIVERSEL :
		$mdp_ok = TRUE;
                $mdp_type = "admin";
                break;
            
                default :
		$mdp_ok = FALSE;
                $mdp_type = NULL;
                break;                   
        }
        $etat_log = array(
                'mdp_ok' => $mdp_ok,
                'mdp_type' => $mdp_type
            );
        return $etat_log;
    }

}