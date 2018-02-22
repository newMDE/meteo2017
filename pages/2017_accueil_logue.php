<?php

/* 
 * The "Meteo des Ecoles" License
 *
 * Copyright 2018 Sylvain Taussac / Alexandre Nicolas pour l'ensemble du site
 *
 * "La météo des écoles" à l'exception de morceaux de codes provenant de sources
 * citées dans les fichiers.
 */

?>

<div id="accueil_logue" class="<?php echo $class_contenu; ?>">
    <div class="row">
        <div class="col-md-6" align="center">
            <p>Carte d'identité de l'école qui vient de se loguer</p>
	</div>
	<div class="col-md-6" align="center">
            <p>
                <a href="../app/2017_saisie_routage.php?origine=nouvelle_saisie&jour=<?= $_SESSION['param']->JourAujourdhui()?>&heure=<?= $_SESSION['param']->HeureAujourdhui("saisie")?>">
                    Saisir pour aujourd'hui
                </a>
            </p>
	</div>
    </div>
    <div class="row">
        <div class="col-md-6" align="center">
            <p>Mur de l'école</p>
	</div>
	<div class="col-md-6" align="center">
            <p>Saisir pour un autre jour</p>
	</div>
    </div>
</div>
<?php var_dump($_SESSION['ecole_loguee']);