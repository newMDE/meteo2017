<script type="text/javascript">
function Changer_saisie_vent(direction,force,manche) {
	var force_actuelle = document.getElementById('form_vent_force').value;
 	var direction_actuelle = document.getElementById('form_vent_direction').value;
 	var manche_actuelle = document.getElementById('form_vent_manche').value;

       //Blocage si on saisit la force avant la direction (sauf force=0, temps calme)
       if(((direction_actuelle === "nomesure")||(direction_actuelle === "pasdevent"))&&(direction === "inchange"))
       {
            document.getElementById('entete_alerte').innerHTML = "Aide pour la saisie";            
            document.getElementById('message_alerte').innerHTML = "Il faut saisir la direction du vent avant de saisir la force.";            
            document.getElementById('alert_ordre_saisie').style.visibility = "visible";
            document.getElementById(elem).style.visibility = "visible";
       }

       // Prise en compte de l'origine de l'appel de la fonction
       // pour MAJ de la direction et de la force actuelles
       if(direction !== "inchange")
       {
            direction_actuelle=direction;
            document.getElementById('form_vent_direction').value = direction;
        }
       if(force !== "inchange")
       {
            force_actuelle=force;
            document.getElementById('form_vent_force').value = force;
        }
       if(manche === "mancheon")
       {
            force_actuelle=0;
            document.getElementById('form_vent_force').value = 0;
            document.getElementById('form_vent_direction').value = "pasdevent";
            document.getElementById('form_vent_manche').value = "mancheon";
            document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('nomesure','nomesure','mancheoff');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_on.png\" alt=\"Manche à air\"/></a>";
            document.getElementById('mde_saisie_vent_texte').innerHTML = "Pas de vent";       
        } 
       if(manche === "mancheoff")
       {
            force_actuelle=0;
            document.getElementById('form_vent_force').value = "nomesure";
            document.getElementById('form_vent_direction').value = "nomesure";
            document.getElementById('form_vent_manche').value = "mancheoff";
            document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";
            document.getElementById('mde_saisie_vent_texte').innerHTML = "Pas de saisie";       
        } 
       //Flèche Nord
       if(direction_actuelle === "n")
       {
           if(manche_actuelle==="mancheon")
           {
                document.getElementById('form_vent_force').value = "nomesure";
                force_actuelle = "nomesure";
                document.getElementById('form_vent_manche').value = "mancheoff";
                document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";    
           }
           if(force_actuelle!=="nomesure")
           {
                document.getElementById('mde_vent_nord').style.backgroundImage  = "url('images/saisie/vent_fleche_n"+force_actuelle+".png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du nord de force "+force_actuelle;
           }
           else
           {
                document.getElementById('mde_vent_nord').style.backgroundImage  = "url('images/saisie/vent_fleche_n4.png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du nord";
           }
       }
       else
       {
            document.getElementById('mde_vent_nord').style.backgroundImage  = "url('images/saisie/vent_fleche_n_defaut.png')";
       }

        //Flèche Nord Est
       if(direction_actuelle === "ne")
       {
           if(manche_actuelle==="mancheon")
           {
                document.getElementById('form_vent_force').value = "nomesure";
                force_actuelle = "nomesure";
                document.getElementById('form_vent_manche').value = "mancheoff";
                document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";    
           }
           if(force_actuelle!=="nomesure")           {
                document.getElementById('mde_vent_nord_est').style.backgroundImage  = "url('images/saisie/vent_fleche_ne"+force_actuelle+".png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du nord-est de force "+force_actuelle;
           }
           else
           {
                document.getElementById('mde_vent_nord_est').style.backgroundImage  = "url('images/saisie/vent_fleche_ne4.png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du nord-est";
           }
       }
       else
       {
            document.getElementById('mde_vent_nord_est').style.backgroundImage  = "url('images/saisie/vent_fleche_ne_defaut.png')";
       }

       //Flèche Est
       if(direction_actuelle === "e")
       {
           if(manche_actuelle==="mancheon")
           {
                document.getElementById('form_vent_force').value = "nomesure";
                force_actuelle = "nomesure";
                document.getElementById('form_vent_manche').value = "mancheoff";
                document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";    
           }
           if(force_actuelle!=="nomesure")           {
                document.getElementById('mde_vent_est').style.backgroundImage  = "url('images/saisie/vent_fleche_e"+force_actuelle+".png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent d\'est de force "+force_actuelle;
           }
           else
           {
                document.getElementById('mde_vent_est').style.backgroundImage  = "url('images/saisie/vent_fleche_e4.png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent d\'est";
           }
       }
       else
       {
            document.getElementById('mde_vent_est').style.backgroundImage  = "url('images/saisie/vent_fleche_e_defaut.png')";
       }

       //Flèche Sud-Est
       if(direction_actuelle === "se")
       {
           if(manche_actuelle==="mancheon")
           {
                document.getElementById('form_vent_force').value = "nomesure";
                force_actuelle = "nomesure";
                document.getElementById('form_vent_manche').value = "mancheoff";
                document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";    
           }
           if(force_actuelle!=="nomesure")           {
                document.getElementById('mde_vent_sud_est').style.backgroundImage  = "url('images/saisie/vent_fleche_se"+force_actuelle+".png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du sud-est de force "+force_actuelle;
           }
           else
           {
                document.getElementById('mde_vent_sud_est').style.backgroundImage  = "url('images/saisie/vent_fleche_se4.png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du sud-est";
           }
       }
       else
       {
            document.getElementById('mde_vent_sud_est').style.backgroundImage  = "url('images/saisie/vent_fleche_se_defaut.png')";
       }

       //Flèche Sud
       if(direction_actuelle === "s")
       {
           if(manche_actuelle==="mancheon")
           {
                document.getElementById('form_vent_force').value = "nomesure";
                force_actuelle = "nomesure";
                document.getElementById('form_vent_manche').value = "mancheoff";
                document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";    
           }
           if(force_actuelle!=="nomesure")           {
                document.getElementById('mde_vent_sud').style.backgroundImage  = "url('images/saisie/vent_fleche_s"+force_actuelle+".png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du sud de force "+force_actuelle;
           }
           else
           {
                document.getElementById('mde_vent_sud').style.backgroundImage  = "url('images/saisie/vent_fleche_s4.png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du sud";
           }
       }
       else
       {
            document.getElementById('mde_vent_sud').style.backgroundImage  = "url('images/saisie/vent_fleche_s_defaut.png')";
       }

       //Flèche Sud-Ouest
       if(direction_actuelle === "so")
       {
           if(manche_actuelle==="mancheon")
           {
                document.getElementById('form_vent_force').value = "nomesure";
                force_actuelle = "nomesure";
                document.getElementById('form_vent_manche').value = "mancheoff";
                document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";    
           }
           if(force_actuelle!=="nomesure")           {
                document.getElementById('mde_vent_sud_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_so"+force_actuelle+".png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du sud-ouest de force "+force_actuelle;
           }
           else
           {
                document.getElementById('mde_vent_sud_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_so4.png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du sud-ouest";
           }
       }
       else
       {
            document.getElementById('mde_vent_sud_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_so_defaut.png')";
       }

       //Flèche Ouest
       if(direction_actuelle === "o")
       {
           if(manche_actuelle==="mancheon")
           {
                document.getElementById('form_vent_force').value = "nomesure";
                force_actuelle = "nomesure";
                document.getElementById('form_vent_manche').value = "mancheoff";
                document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";    
           }
           if(force_actuelle!=="nomesure")           {
                document.getElementById('mde_vent_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_o"+force_actuelle+".png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent d\'ouest de force "+force_actuelle;
           }
           else
           {
                document.getElementById('mde_vent_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_o4.png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent d\'ouest";
           }
       }
       else
       {
            document.getElementById('mde_vent_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_o_defaut.png')";
       }

       //Flèche Nord-Ouest
       if(direction_actuelle === "no")
       {
           if(manche_actuelle==="mancheon")
           {
                document.getElementById('form_vent_force').value = "nomesure";
                force_actuelle = "nomesure";
                document.getElementById('form_vent_manche').value = "mancheoff";
                document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";    
           }
           if(force_actuelle!=="nomesure")           {
                document.getElementById('mde_vent_nord_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_no"+force_actuelle+".png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du nord-ouest de force "+force_actuelle;
           }
           else
           {
                document.getElementById('mde_vent_nord_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_no4.png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du nord-ouest";
           }
       }
       else
       {
            document.getElementById('mde_vent_nord_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_no_defaut.png')";
       }

       //Manche à air
       if(direction_actuelle === "no")
       {
           if(manche_actuelle==="mancheon")
           {
                document.getElementById('form_vent_force').value = "nomesure";
                force_actuelle = "nomesure";
                document.getElementById('form_vent_manche').value = "mancheoff";
                document.getElementById('zone_manche').innerHTML = "<a href=\"javascript:Changer_saisie_vent('pasdevent','inchange','mancheon');\"><img id=\"mde_vent_manche\" src=\"images/saisie/vent_manche_a_air_off.png\" alt=\"Manche à air\"/></a>";    
           }
           if(force_actuelle!=="nomesure")           {
                document.getElementById('mde_vent_nord_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_no"+force_actuelle+".png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du nord-ouest de force "+force_actuelle;
           }
           else
           {
                document.getElementById('mde_vent_nord_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_no4.png')";
                document.getElementById('mde_saisie_vent_texte').innerHTML = "Vent du nord-ouest";
           }
       }
       else
       {
            document.getElementById('mde_vent_nord_ouest').style.backgroundImage  = "url('images/saisie/vent_fleche_no_defaut.png')";
       }
}
</script>