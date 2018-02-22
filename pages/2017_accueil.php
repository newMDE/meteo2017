<div id="accueil" class="<?php echo $class_contenu; ?>">
    <div class="row">
        <div class="col-md-6" align="center">
	   <img src="images/accueil_images_du_jour_1.png">
	</div>
	<div class="col-md-6" align="center">
		<div class="row">
			<div class="col-md-12" align="center">
				<p id="mde_datedujour">
					<?php   //Affichage de la date en toutes lettres
                                                $jour = array("dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi");
                                                $mois = array("","janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre");
                                                $langue_affichage = $_SESSION['param']->langueaffichage();
                                                $dateobjet = $_SESSION['param']->aujourdhui();
						echo $_SESSION['param']->date_toutes_lettres($langue_affichage,$dateobjet,$jour,$mois);
					?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" align="center">
				<iframe id="carte_accueil" src="http://meteodesecoles.org/carte_inseree_lang.php?id_carte=9999&largeur_demandee=450&langue=fr&titre=non&info=non" height="276" width="450" frameborder="0" scrolling="no">
				</iframe>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" align="center">
				<p>
				Liens vers les cartes de pays ayant saisi</p>
			</div>
		</div>
	</div>
    </div>
</div>