<link href="css/2017_meteodesecoles.css" rel="stylesheet" type="text/css">
<div id="entete" class="row">
	<div class="col-md-3 text-center">
		<?php if($_SESSION['param']->ecoleloguee() === "oui")
		{ 
			echo "<div class=\"row\">";
			echo "<div class=\"col-md-3 text-center\">";
			echo "<a style=\"cursor:pointer;\" href=\"?page=deconnexion\">";
			echo "<img src=\"images/boutons/connexion_meteo_off.png\" alt=\"déconnexion\" />";
			echo "</a>";
			echo "</div>";
			echo "<div class=\"col-md-9 text-center\">";
			echo "<table id=\"mde_cartouche_ecole\">";
			echo "<tr>";
			echo "<td>";
			echo $_SESSION['ecole_loguee']['NOM'];
			echo "</td>";
			echo "<td>";
			echo "<img src=\"images/drapeaux/drapeau_".$_SESSION['ecole_loguee']['DRAPEAU']."_petit.png\"/>";
			echo "</td>";
			echo "</tr>";
			echo "</table>";
			echo "</div>";
			echo "</div>";
		}
		else
		{
			?>
			<p align="center">
			<a style="cursor:pointer;" href="?page=connexion">
				<img src="images/boutons/connexion_meteo.png" alt="connexion" />
			</a>
			</p>
			<?php
		}
		?>
	</div>
	<div class="col-md-6 text-center">
		  <a style="cursor:pointer;" href="?page=accueil">
			<img class="center-block img-fluid d-block mx-auto" src="images/titre_meteo_des_ecoles.png" alt="La Météo des Écoles" />
		  </a>

	</div>
	<div class="col-md-3" align="center">
	<p>
	<?php //LISTE DES LANGUES DE TRADUCTION
		//include("include/2017_traductions.php");
	?>
	</p>
	</div>
</div>