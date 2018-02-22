<script type="text/javascript">
function modifie_barre (nouvelle_temperature)
{
	// on récupère l'élément barre
	var elmt = document.getElementById("mde_saisie_thermo_barre");
	var hauteur_10deg = 30;
	var hauteur_barre = parseInt((parseInt(nouvelle_temperature)+60)*(parseInt(hauteur_10deg)/10));
	var ytop_moins60 = 418;
	
	// on modifie son style
	
	elmt.style.height = hauteur_barre+'px';
	elmt.style.top = ytop_moins60-hauteur_barre+'px';
	
	//MISE A JOUR DE LA TEMPERATURE DIGITALE AFFICHEE
	document.getElementById("mde_affichage_temperature_numerique").innerHTML = nouvelle_temperature+' °C';

	//MISE A JOUR DE LA TEMPERATURE TRANSMISE PAR FORMULAIRE
	document.getElementById("form_temperature").value = nouvelle_temperature;
	
	//MAJ des liens des flèches de moins 5 à plus 5
	//Il faut MAJ les valeurs de nouvelle_temperature
	//Il faut respecter les valeurs min et max de la plage (-60 à 65°C)
	//On cache les flèches si elle amène à sortir de la plage.
	
	//Fleche plus 5
	nouvelle_temperature = parseInt(nouvelle_temperature) + 5;
	if(nouvelle_temperature > 65)
	{document.getElementById('fleche_plus5').style.visibility="hidden";}
	else
	{document.getElementById('fleche_plus5').href = 'javascript:modifie_barre(\''+nouvelle_temperature+'\');';
	document.getElementById('fleche_plus5').style.visibility="visible";}
	
	//Fleche plus 1
	nouvelle_temperature = parseInt(nouvelle_temperature) - 4;
	if(nouvelle_temperature > 65)
	{document.getElementById('fleche_plus1').style.visibility="hidden";}
	else
	{document.getElementById('fleche_plus1').href = 'javascript:modifie_barre(\''+nouvelle_temperature+'\');';
	document.getElementById('fleche_plus1').style.visibility="visible";}
	
	//Fleche moins 1
	nouvelle_temperature = parseInt(nouvelle_temperature) - 2;
	if(nouvelle_temperature <-60)
	{document.getElementById('fleche_moins1').style.visibility="hidden";}
	else
	{document.getElementById('fleche_moins1').href = 'javascript:modifie_barre(\''+nouvelle_temperature+'\');';
	document.getElementById('fleche_moins1').style.visibility="visible";}
	
	//Fleche moins 5
	nouvelle_temperature = parseInt(nouvelle_temperature) - 4;
	if(nouvelle_temperature <-60)
	{document.getElementById('fleche_moins5').style.visibility="hidden";}
	else
	{document.getElementById('fleche_moins5').href = 'javascript:modifie_barre(\''+nouvelle_temperature+'\');';
	document.getElementById('fleche_moins5').style.visibility="visible";}
	
}

</script>