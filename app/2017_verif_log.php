<?php
namespace App;

require '../app/Autoloader.php';
Autoloader::register();

session_start();

// VERIFICATION DU MDP
//
$teste_mdp = Maconnexion::getDb()->mdp($_POST['passe'],$_POST['ecole']);

if ($teste_mdp["mdp_ok"])
{
    switch($teste_mdp["mdp_type"]){
                case "eleve" :
                    $_SESSION['param']->setRneloguee($_POST['ecole']);
                    $_SESSION['param']->setEcoleloguee("oui");
                    header("Location:../public/index.php?page=accueil_logue&type_logue=eleve&test=".$_POST['ecole']);
                break;

                case "maitre";
                    $_SESSION['param']->setRneloguee($_POST['ecole']);
                    $_SESSION['param']->setEcoleloguee("oui");                    
                    header("Location:../public/index.php?page=accueil_logue&type_logue=prof");
                break;

                case "admin";
                    $_SESSION['param']->setRneloguee($_POST['ecole']);
                    $_SESSION['param']->setEcoleloguee("oui");
                    header("Location:../public/index.php?page=accueil_logue&type_logue=admin");
                break;
    }   
}
else{
    header("Location:../public/index.php?page=connexion&errone=vrai");
}


?>