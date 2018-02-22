<link href="css/2017_meteodesecoles.css" rel="stylesheet" type="text/css">
<div id="saisie_en_cours" class="<?php echo $class_contenu; ?>">
    <div id="date_saisie" class="row">
	<div class="col-md-2 text-right">
            <img src="images/boutons/arrow_left.png" alt="Date précédente"/>
	</div>
	<div class="col-md-8 text-center">
            <p id="mde_datedujour">Saisie du 
					<?php   //Affichage de la date en toutes lettres
                                                $jour = array("dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi");
                                                $mois = array("","janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre");
                                                $langue_affichage = $_SESSION['param']->langueaffichage();
                                                $dateobjet = $_SESSION['param']->aujourdhui();
						echo $_SESSION['param']->date_toutes_lettres($langue_affichage,$dateobjet,$jour,$mois);
					?>
            </p>
        </div>
	<div class="col-md-2 text-left">
            <img src="images/boutons/arrow_right.png" alt="Date suivante"/>
            <img src="images/boutons/calendrier_petit.png" alt="Calendrier"/>
	</div>
    </div>
    <div class="row no-padding">
        <div class="col-md-2 text-center mde_zone_choix no-padding">
        <div id="titrenuages">Force observée</div>
 		<a href="javascript:Changer_saisie_vent('pasdevent','0','mancheon')">
                    <img src="images/saisie/vent_force0.png" alt="Cirrocumulus" title="On ne sent pas le vent. La fumée s'élève horizontalement."/>
                    <p id="nomnuages">Force 0 : Calme</p>
		</a>
                <a href="javascript:Changer_saisie_vent('inchange','1','null');">
                    <img src="images/saisie/vent_force1.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 1 : Très légère brise</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','2','null')">
                    <img src="images/saisie/vent_force2.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 2 : Légère brise</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','3','null')">
                    <img src="images/saisie/vent_force3.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 3 : Petite brise</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','4','null')">
                    <img src="images/saisie/vent_force4.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 4 : Jolie brise</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','5','null')">
                    <img src="images/saisie/vent_force5.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 5 : Bonne brise</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','6','null')">
                    <img src="images/saisie/vent_force6.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 6 : Vent frais</p>
		</a>
        </div>
	<div class="col-md-8 text-center mde_zone_selection no-padding">
                         
		<div class="mde_rose_des_vents" align="center">
                    <div id="zone_manche" >
                        <a href="javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');">
                            <img id="mde_vent_manche" src="images/saisie/vent_manche_a_air_off.png" alt="Manche à air"/>
                        </a>
                    </div>
                    <p id="mde_saisie_vent_texte">Pas de saisie</p>
                    <div id='validation_saisie_vent'>
                        <form class="" method="post" action="2017_saisie_routage.php?origine=vent">
                            <input id="form_vent_direction" type="hidden" name="form_vent_direction" value="nomesure">
                            <input id="form_vent_force" type="hidden" name="form_vent_force" value="nomesure">
                            <input id="form_vent_manche" type="hidden" name="form_vent_manche" value="mancheoff">
                            <button type="submit" class="btn-lg btn-success text-white">OK</button>
                        </form>
                    </div>
                    <a href="javascript:Changer_saisie_vent('n','inchange','null');">
                        <p id="mde_vent_nord"></p>
                    </a>
                    <a href="javascript:Changer_saisie_vent('ne','inchange','null');">
                        <p id="mde_vent_nord_est"></p>
                    </a>
                    <a href="javascript:Changer_saisie_vent('e','inchange','null');">
                        <p id="mde_vent_est"></p>
                    </a>
                    <a href="javascript:Changer_saisie_vent('se','inchange','null');">
                        <p id="mde_vent_sud_est"></p>
                    </a>
                    <a href="javascript:Changer_saisie_vent('s','inchange','null');">
                        <p id="mde_vent_sud"></p>
                    </a>
                    <a href="javascript:Changer_saisie_vent('so','inchange','null');">
                        <p id="mde_vent_sud_ouest"></p>
                    </a>
                    <a href="javascript:Changer_saisie_vent('o','inchange','null');">
                        <p id="mde_vent_ouest" ></p>
                    </a>
                    <a href="javascript:Changer_saisie_vent('no','inchange','null');">
                        <p id="mde_vent_nord_ouest"></p>
                    </a>
		</div>               
	</div>
        <div class="col-md-2 text-center mde_zone_choix no-padding">
                     <div id="titrenuages">Force observée</div>
 		<a href="javascript:Changer_saisie_vent('inchange','7','null')">
                    <img src="images/saisie/vent_force7.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 7 : Grand frais</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','8','null')">
                    <img src="images/saisie/vent_force8.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 8 : Coup de vent</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','9','null')">
                    <img src="images/saisie/vent_force9.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 9 : Fort coup de vent</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','10','null')">
                    <img src="images/saisie/vent_force10.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 10 : Tempête</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','11','null')">
                    <img src="images/saisie/vent_force11.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 11 : Violente tempête</p>
		</a>
 		<a href="javascript:Changer_saisie_vent('inchange','12','null')">
                    <img src="images/saisie/vent_force12.png" alt="Cirrocumulus"/>
                    <p id="nomnuages">Force 12 : Ouragan</p>
		</a>
        </div>
    </div>
</div>
<div class="mde_alert_div" id="alert_ordre_saisie" onclick="javascript:this.style.visibility='hidden'">
    <p id="entete_alerte"></p>
    <p id="message_alerte"></p>
    <p>(Cliquer sur le texte pour fermer la fenêtre)</p>
</div>
<div>
            <div class="row">
		<div class="col-md-10">
                    <p class="mde_affichage_saisie_cartouche_blanc" id="mde_saisie_vent_texte">Pas de saisie</p>
		</div>                  

            </div>
	<p>
	<?php echo $_SESSION['ecole_loguee']->nom().' ('.$_SESSION['ecole_loguee']->ville().') a pour RNE '.$_SESSION['ecole_loguee']->rne().'.'; ?>
	</p>
	<p>
		<?php echo $_SESSION['ecole_loguee']->nom().' ('.$_SESSION['ecole_loguee']->ville().') a pour fuseau horaire '.$_SESSION['ecole_loguee']->timezone_region().'.'; ?>
	</p>
	<p>
		<?php
		$saisie_temp = unserialize($_SESSION['saisie_en_cours']);
		echo "Date et heure en cours : ".$saisie_temp-> date_mesure().' à '.$saisie_temp-> heure(); ?>
	</p>
</div>