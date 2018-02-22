	<div id="defilant_saisies" class="row">
		<!-- début du bandeau défilant des températures -->
		<div class="col-md-1">
			<p>
				<span class="bg-warning">
				<?php echo $_SESSION['jour_courant_affichage']." ".$heure_fr." : &nbsp;&nbsp;&nbsp;"; ?>
				</span>
			</p>
		</div>
		<div class="col-md-11" id="bandeaudefilant">
		  <div>
			<ul id="listedefilante">
			  <?php
				  if(sizeof($TEMP_ecole_defilant)!=0)
				  {
					echo "<li style=\"margin-top:2px\">";
					echo "<span class=\"defilant_separations\">";
					echo $_SESSION['jour_courant_affichage']." ".$heure_fr." : &nbsp;&nbsp;&nbsp;";
					echo "</span>";
					for($j=0;$j<sizeof($TEMP_ecole_defilant);$j++)
					{
						echo "<li>";
						echo "<span>";
						echo $NOM_ecole_defilant[$j];
						echo "</span>";
						echo "<span class=\"defilant_localisation\">";
						echo $CONTINENT_ecole_defilant[$j]." - ".$PAYS_ecole_defilant[$j];
						
								if ($PAYS_ecole[$j]=='000') {
									   echo " (".$ID_DEP_court[$j].")";
									  }
						  
						$seuil = -900; // Les bases sont à -1000m si l'altitude n'est pas saisie.
						
						if($ALTITUDE_ecole_defilant[$j]>$seuil)
						{echo " - ".$ALTITUDE_ecole_defilant[$j]."m";}	
						echo " </span><span>".$TEMP_ecole_defilant[$j]."°C </span>";
						
						if($IMAGE_ecole_defilant[$j]!="")// Cas où l'école a saisi la T° mais pas le ciel (=="")
						{
							echo " <img align='absmiddle' src='cartes/images/".$IMAGE_ecole_defilant[$j]."_0800.png' border='0'>";
						}
						echo "<span class=\"defilant_separations\">";
						echo "&nbsp;&nbsp;§§§";
						echo "</span>";
						echo "</li>";
					 }
					//echo "</div>";
				   }
				 ?>
			</ul>
		  </div>
		</div>
		<!-- fin du bandeau défilant des températures -->
	</div>