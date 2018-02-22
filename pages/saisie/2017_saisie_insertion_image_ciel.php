<?php
//require_once("http://meteodesecoles.org/2017/include/classes/Classe_Mesure_complet.php);
//session_start();
//$saisie_temp = unserialize($_SESSION['saisie_en_cours']);
//$saisie_temp -> setCiel($_GET['NumCiel']);
//$_SESSION['saisie_en_cours'] = serialize($saisie_temp);
echo "<img src=\"http://meteodesecoles.org/2017/images/saisie/ciel_";
echo $_GET['image_ciel'];
echo "_256px.gif\" />";
echo "<p>Couvert</p>";
?>