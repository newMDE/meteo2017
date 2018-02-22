<?php
if(isset($_SESSION['log_ecole'])and($_SESSION['log_ecole'] == "oui"))
{
	include("2017_menu_participants.php");
}
else
{
	include("2017_menu_visiteurs.php");
}
?>
