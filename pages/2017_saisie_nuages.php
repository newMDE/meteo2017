<div id="saisie_en_cours" class="<?php echo $class_contenu; ?> no-padding">
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
        <div class="col-md-2 text-center mde_zone_choix ">
             <div id="titrenuages">Nuages observés</div>
                        <a href="javascript:Afficher_Cacher('cirrus')">
                                <img src="images/saisie/mini_cirrus.png" alt="Cirrus"/>
                                <p id="nomnuages">Cirrus</p>
                        </a>
                        <a href="javascript:Afficher_Cacher('cirrocumulus')">
                                <img src="images/saisie/mini_cirrocumulus.png" alt="Cirrocumulus"/>
                                <p id="nomnuages">Cirrocumulus</p>
                        </a>
						
                        <a href="javascript:Afficher_Cacher('altostratus')">
                                <img src="images/saisie/mini_altostratus.png" alt="Altostratus"/>
                                <p id="nomnuages">Altostratus</p>
                        </a>
                        <a href="javascript:Afficher_Cacher('nimbostratus')">
                                <img src="images/saisie/mini_nimbostratus.png" alt="Nimbostratus"/>
                                <p id="nomnuages">Nimbostratus</p>
                        </a>
                        <a href="javascript:Afficher_Cacher('stratus')">
                                <img src="images/saisie/mini_stratus.png" alt="Stratus"/>
                                <p id="nomnuages">Stratus</p>
                        </a>         
        </div>
        <div class="col-md-8 mde_zone_selection no-padding">
            <div align="center" id="titretemp">Coupe d'altitude</div> 
            <div class="mde_meteo_typenuages" align="center">
                <div id='nomesure_nuages'>
                    <a href="javascript:Nomesure_nuages()">
                            <img src="images/saisie/ciel_nomesure_100px.gif" alt="Pas de mesure"/>
                    </a>
                </div>
                <div id='validation_saisie_nuages'>
                    <form class="" method="post" action="../app/2017_saisie_routage.php?origine=nuages">
                            <input id="form_cirrus" type="hidden" name="form_cirrus" value="0">
                            <input id="form_cirrostratus" type="hidden" name="form_cirrostratus" value="0">
                            <input id="form_cirrocumulus" type="hidden" name="form_cirrocumulus" value="0">
                            <input id="form_nimbostratus" type="hidden" name="form_nimbostratus" value="0">
                            <input id="form_cumulonimbus" type="hidden" name="form_cumulonimbus" value="0">
                            <input id="form_stratocumulus" type="hidden" name="form_stratocumulus" value="0">
                            <input id="form_altostratus" type="hidden" name="form_altostratus" value="0">
                            <input id="form_altocumulus" type="hidden" name="form_altocumulus" value="0">
                            <input id="form_stratus" type="hidden" name="form_stratus" value="0">
                            <input id="form_cumulus" type="hidden" name="form_cumulus" value="0">
                            <input id="form_existe_nuage" type="hidden" name="form_existe_nuage" value="0">
                            <button type="submit" class="btn-lg btn-success text-white">OK</button>
                    </form>
                </div>
                <p id="mde_cirrus" style="visibility:hidden"></p>
                <p id="mde_cirrostratus" style="visibility:hidden"></p>
                <p id="mde_cirrocumulus" style="visibility:hidden"></p>
                <p id="mde_nimbostratus" style="visibility:hidden"></p>
                <p id="mde_cumulonimbus" style="visibility:hidden"></p>
                <p id="mde_stratocumulus" style="visibility:hidden"></p>
                <p id="mde_altostratus" style="visibility:hidden"></p>
                <p id="mde_altocumulus" style="visibility:hidden"></p>
                <p id="mde_stratus" style="visibility:hidden"></p>
                <p id="mde_cumulus" style="visibility:hidden"></p>
            </div>
        </div>   
        <div class="col-md-2 text-center mde_zone_choix no-padding">
            <div id="titrenuages">Nuages observés</div>
                        <a href="javascript:Afficher_Cacher('cirrostratus')">
                                <img src="images/saisie/mini_cirrostratus.png" alt="Cirrostratus"/>
                                <p id="nomnuages">Cirrostratus</p>
                        </a>
                        <a href="javascript:Afficher_Cacher('altocumulus')">
                                <img src="images/saisie/mini_altocumulus.png" alt="Altocumulus"/>
                                <p id="nomnuages">Altocumulus</p>
                        </a>
                        <a href="javascript:Afficher_Cacher('cumulonimbus')">
                                <img src="images/saisie/mini_cumulonimbus.png" alt="Cumulonimbus"/>
                                <p id="nomnuages">Cumulonimbus</p>
                        </a>
                        <a href="javascript:Afficher_Cacher('stratocumulus')">
                                <img src="images/saisie/mini_stratocumulus.png" alt="Stratocumulus"/>
                                <p id="nomnuages">Stratocumulus</p>
                        </a>
                        <a href="javascript:Afficher_Cacher('cumulus')">
                                <img src="images/saisie/mini_cumulus.png" alt="Cumulus"/>
                                <p id="nomnuages">Cumulus</p>
                        </a>
          </div>

    </div>
</div>
<div>
	<p>
	<?php echo $_SESSION['ecole_loguee']['NOM'].' ('.$_SESSION['ecole_loguee']['VILLE'].') a pour RNE '.$_SESSION['ecole_loguee']['RNE'].'.'; ?>
	</p>
	<p>
		<?php echo $_SESSION['ecole_loguee']['NOM'].' ('.$_SESSION['ecole_loguee']['VILLE'].') a pour fuseau horaire '.$_SESSION['ecole_loguee']['TIMEZONE_REGION'].'.'; ?>
	</p>
	<p>
		<?php
                var_dump($_SESSION['ecole_loguee']);
                echo "<br>----------------------<br>";
                var_dump($_SESSION['mesure']);
                echo "<br>----------------------<br>";
                var_dump($_SESSION['param']);
                ?>
	</p>
</div>