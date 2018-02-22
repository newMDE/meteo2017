<?php
ini_set('display_errors',1); //A virer en production
/* 
 * The "Meteo des Ecoles" License
 *
 * Copyright 2018 Sylvain Taussac / Alexandre Nicolas pour l'ensemble du site
 * "La météo des écoles" à l'exception de morceaux de codes provenant de sources 
 * citées dans les fichiers.
 * 
 *Mise en place de l'autoloader selon les tutos du site www.grafikart.fr
 * 
 * Mise en place des classes selon www.grafikart.fr et openclassrooms.com
 */

require '../app/Autoloader.php';
App\Autoloader::register();

session_start();

require '../app/2017_prepare_index.php';

	
?>
<!DOCTYPE html>
<html lang="en">
  
    <title>La Météo des Écoles</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<META name="description" content="Saisies de données météo en ligne pour toutes les écoles primaires du monde.">
	<META name="keywords" content="météo, meteo, écoles, école, schools, school, primaire, primary, meteorologie, meteorology, data, saisies, enfants, children, weather, meteorologia, escuela, escuelas, échanges, exchange, météo des écoles, schools weather, monde, world, maps, map, cartes, carte, données, températures, temperatures, vent, wind, ciel, sky, nuages, clouds, pression, pressure, précipitations,Schule, Wetter, Temperatur">
    <meta name="author" content="Les amis de la météo des écoles">

	<!-- BOOTSTRAP 4 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->
        <!-- BOOTSTRAP 3 EN LOCAL (distant en commentaires-->	
        <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">-->	
        <link href="../config/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
	<!-- BOOTSTRAP 4 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script> -->
        <!-- BOOTSTRAP 3 EN LOCAL (distant en commentaires-->	
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
        <script src="../config/bootstrap/js/bootstrap.min.js"></script>
        <!-- JQUERY EN LOCAL (distant en commentaires-->
        <!--        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
        <script src="../config/jquery/jquery-3.3.1.min.js"></script>
        <!-- Feuille de style spécifique MDE -->
	<link href="css/2017_meteodesecoles.css" rel="stylesheet" type="text/css" />
	<?php
	//Inclusion des scripts selon routage.php
        if(isset($scripts_inclus)){
	for ($i=0;$i<sizeof($scripts_inclus);$i++)
            {
                    require_once($scripts_inclus[$i]);
            }
        }
	?>

  
  <body class="mde_fondnuages">
    <div align="center" class="container">
		<?php //HEADER
		if($inclure_header=="oui")
		{ require_once("../pages/2017_header.php"); }
		?>
		<?php //DEFILANT DES SAISIES DU MOMENT
		if($inclure_defilant=="oui")
		{ require_once("../pages/2017_defilant.php"); }
		?>
		<div align="center" class="row no-padding">
		<?php //INCLUSION DU MENU
		if($inclure_menu=="oui")
		{
                    require_once($menu_inclus);
		// FIN INCLUSION DU MENU
                }
                 //INCLUSION DU CONTENU
                require_once($contenu_inclus);
                // FIN INCLUSION DU CONTENU
                ?>
		</div>
	</div>

  </body>
</html>