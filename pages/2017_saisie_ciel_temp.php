<div id="saisie_en_cours" class="<?php echo $class_contenu; ?>">
    <div id="date_saisie" class="row">
	<div class="col-md-2 text-right">
<!-- ICI BLANC UTILISABLE POUR CARTOUCHE ECOLE LOGUEE -->
	</div>
	<div class="col-md-8 text-center">
            <p id="mde_datedujour">Saisie du 
					<?php   //Affichage de la date en toutes lettres
                                            $jour = array(_("dimanche"),_("lundi"),_("mardi"),_("mercredi"),_("jeudi"),_("vendredi"),_("samedi"));
                                            $mois = array("",_("janvier"),_("février"),_("mars"),_("avril"),_("mai"),_("juin"),_("juillet"),_("août"),_("septembre"),_("octobre"),_("novembre"),_("décembre"));
                                            $langue_affichage = $_SESSION['param']->langueaffichage();
                                            $dateobjet = $_SESSION['param']->datebdd();
                                            echo $_SESSION['param']->date_toutes_lettres($langue_affichage,$dateobjet,$jour,$mois);
                                            //Séparateur
                                            echo " - ";
                                            // Affichage de l'heure d'observation et de mesure
                                            $heuremesure = $_SESSION['param']->HeureBDD();
                                            if($heuremesure === "09:00"){
                                                echo _("Le matin à 9h00");
                                            }
                                            else{
                                                echo _("Au midi solaire");
                                            }
                                        ?>
            </p>
	</div>
	<div class="col-md-2 text-left">
            <p>BOUTON ANNULER</p>
	</div>
    </div>
    <div class="row">
	<div class="col-md-3 mde_zone_choix">
            <div id="titretemp">
                <p>Quelle est la température ?</p>
            </div>
            <div id="zone_aide_gauche" class="mde_meteo_temperature" style="visibility:visible;">
                <p id="mde_saisie_thermometre">
                    <img src="images/2017_base_thermo.png" alt="Pas de mesure" width="83" height="500"/>
                    <p id="mde_saisie_thermo_barre" style="position: absolute; background-color: #b80106; left: 44px; top: 238px; height: 198px; width: 15px;"></p>
                </p>
                <p id="mde_thermo_plus5">
                    <a id="fleche_plus5" href="javascript:modifie_barre('5');">
                        <img src="images/saisie/temperature_plus5.png" alt="Plus 5°C"/>
                    </a>
                </p>
                <p id="mde_thermo_plus1">
                    <a id="fleche_plus1" href="javascript:modifie_barre('1');">
                        <img src="images/saisie/temperature_plus1.png" alt="Plus 1°C"/>
                    </a>
                </p>
                <p id="mde_thermo_zero">
                    <a id="bouton_zero" href="javascript:modifie_barre('0');">
                        <img src="images/saisie/temperature_zero.png" alt="Zéro"/>
                    </a>
                </p>
                <p id="mde_thermo_moins1" >
                    <a id="fleche_moins1" href="javascript:modifie_barre('-1');">
                        <img src="images/saisie/temperature_moins1.png" alt="Moins 1°C"/>
                    </a>
                </p>
                <p id="mde_thermo_moins5">
                    <a id="fleche_moins5" href="javascript:modifie_barre('-5');">
                        <img src="images/saisie/temperature_moins5.png" alt="Moins 5°C"/>
                    </a>
                </p>
            </div>
	</div>
        <div class="col-md-6 text-center mde_zone_selection" align="center">
            <div class="row">
                <div align="center">
                    <p id="mde_image_saisie_ciel">
                        <img src="images/saisie/ciel_nomesure_256px.gif" alt="<?php echo _("Pas d'observation") ?>"/>
                        <?php echo _("Pas d'observation") ?>
                    </p>
                    <p class="mde_affichage_saisie_cartouche_blanc" id="mde_affichage_temperature_numerique" align="center"> -- °C</p>
                </div>
                <div align="center" style="height:20px">  
                    <form class="" method="post" action="../app/2017_saisie_routage.php?origine=ciel_temp"> 
                        <input id="form_ciel" type="hidden" name="form_ciel" value="nomesure">
                        <input id="form_temperature" type="hidden" name="form_temperature" value="-111">
                        <button type="submit" class="btn-lg btn-success text-white">OK</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 panel mde_zone_choix" >		
            <div id="titretemp">Quel est l'état du ciel ?</div>
            <div class="panel-body">
                <div class="row" align="center">
                    <div class="col-md-6">
                        <a href="javascript:getFileSimple('#mde_image_saisie_ciel','../app/2017_saisie_insertion_image_ciel.php?NumCiel=1');">
                            <img src="images/saisie/ciel_soleil_100px.gif" alt="Brouillard" class="cadrepictos100"/>
                        </a>
                        <a href="javascript:getFileSimple('#mde_image_saisie_ciel','../app/2017_saisie_insertion_image_ciel.php?NumCiel=3');">
                            <img src="images/saisie/ciel_nuageux_100px.gif" alt="Nuageux avec éclaircies" class="cadrepictos100"/>
                        </a>
                        <a href="javascript:getFileSimple('#mde_image_saisie_ciel','../app/2017_saisie_insertion_image_ciel.php?NumCiel=9');">
                            <img src="images/saisie/ciel_brouillard_100px.gif" alt="Brouillard" class="cadrepictos100"/>
                        </a>
                        <a href="javascript:getFileSimple('#mde_image_saisie_ciel','../app/2017_saisie_insertion_image_ciel.php?NumCiel=5');">
                            <img src="images/saisie/ciel_couvert_nuageux_100px.gif" alt="Couvert" class="cadrepictos100"/>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="javascript:getFileSimple('#mde_image_saisie_ciel','../app/2017_saisie_insertion_image_ciel.php?NumCiel=7');">
                            <img src="images/saisie/ciel_couvert_pluies_100px.gif" alt="Pluie" class="cadrepictos100"/>
                        </a>
                        <a href="javascript:getFileSimple('#mde_image_saisie_ciel','../app/2017_saisie_insertion_image_ciel.php?NumCiel=4');">
                            <img src="images/saisie/ciel_variable-averses_100px.gif" alt="Variable avec averses" class="cadrepictos100"/>
                        </a>
                        <a href="javascript:getFileSimple('#mde_image_saisie_ciel','../app/2017_saisie_insertion_image_ciel.php?NumCiel=6');">
                            <img src="images/saisie/ciel_orage_100px.gif" alt="Orage" class="cadrepictos100"/>
                        </a>
                        <a href="javascript:getFileSimple('#mde_image_saisie_ciel','../app/2017_saisie_insertion_image_ciel.php?NumCiel=8');">
                            <img src="images/saisie/ciel_neige_forte_100px.gif" alt="Neige" class="cadrepictos100"/>
                        </a>
                    </div>
                    <div align="center">
                        <a href="javascript:getFileSimple('#mde_image_saisie_ciel','../app/2017_saisie_insertion_image_ciel.php?NumCiel=0');">
                            <img src="images/saisie/ciel_nomesure_100px.gif" alt="Pas de mesure"/>
                        </a>
                    </div>
                </div>
            </div>
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