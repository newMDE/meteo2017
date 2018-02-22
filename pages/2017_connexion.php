<div align="center" class="<?php echo $class_contenu; ?> text-center" id="zone_login">
<?php
require_once ('../app/Aiguillage.php');

$file= dirname(__DIR__)."/config/config_zone_connexion.php";

//Récupération de l'URL de la page de la carte du GLOBE
$valeur = \App\Aiguillage::getInstance($file)->get_valeur('GLOBE');
require_once ($valeur);
?>
</div>