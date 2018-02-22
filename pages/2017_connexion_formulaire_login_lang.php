<?php
//Utiliser Aiguillage pour récupérer ici $valeur et fabriquer la requête
namespace App;


require '../app/Autoloader.php';
Autoloader::register();


//Chemin vers le fichier contenant les infos d'affichage de carte ou de
// formulaire avec liste des écoles de la zone

$file= dirname(__DIR__)."/config/config_zone_connexion.php";


//Récupération du morceau de la requête pour obtenir la liste des écoles à afficher
$valeur = Aiguillage::getInstance($file)->get_valeur($zone);

        $requete = "SELECT ecole.NOM,ecole.RNE,villes.DEP,pays.ABREVIATION_PAYS,villes.ID_PAYS ";
        $requete .= "FROM ecole,villes,pays ";
        $requete .= "WHERE ecole.projet = 1 and ecole.ID_VILLE = villes.ID_VILLE and villes.ID_PAYS=pays.ID_PAYS ";
        $requete .= $valeur;
        $requete .= " ORDER BY villes.ID_PAYS,villes.DEP,ecole.NOM";

$liste_ecoles = Maconnexion::getDb()->query($requete); //liste_ecoles est un tableau d'objet, chaque objet représentant une école

// ETAPE 1 : RECUP DE LA TRADUCTION (NOUVEAU FORMAT)

//include("include/2017_connect_lang.php");

//TRADUCTION
//
//$requete_texte = "SELECT `$texte_langue` FROM traduction_contenus WHERE ID_FICHIER ='00057' order by ITEM";

//Vérification de la bonne marche de la requête
//if(!$result_texte = $maconnexion->query($requete_texte)){
//    die('Erreur dans le SELECT des textes de la page [' . $maconnexion->error . ']');
//}

//Récupération des résultats de la requête
//$i=0;
//while($ligne = $result_texte->fetch_assoc())
//{
//    $textelog[$i] = $ligne[$texte_langue];
//	$i++;
//}
//$result_texte->close();
//
//$txtlog = 0; // indice du texte à insérer


// ETAPE 2 : Récupération de la liste des écoles (classées par département, puis nom)
// $requete est définie avant l'appel include de ce fichier

//$myNOM = "";
//$myRNE = "";
//$myDEP = "";
//$myPAYS = "";
//


// Cas où on revient de la page verification.php (mot de passe errone) (directement ou non,
// il faut effacer les variables de saisie).

//if (isset($_GET['errone']) )
//{
//	$passe_errone = $_GET['errone'];
//
//	unset($_GET['errone']);
//	
//}
//
//$maconnexion->close();
?>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8 text-center">
<?php if ($passe_errone === "vrai")
  	{ ?>
	<div class="alert alert-dismissable alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
			×
		</button>
		<h4>
		Alerte !
		</h4>
		<strong>Attention</strong>
		Le mot de passe n'est pas correct !
	</div>
<?php
	}
?>
    <form class="" action="../app/2017_verif_log.php" method="post" name="formu" id="formu">
    <div class="form-group">
		<label>Choisis ton école</label>
		<select class="form-control" name="ecole" id="ecole" >
                    <?php     
                    foreach ($liste_ecoles as $ecole):
                        echo "<option value=\"".$ecole->RNE."\" class=\"edito_nouveaute\">";
                        echo $ecole->ABREVIATION_PAYS;
				//Si on est en France, on met le département
			if($ecole->DEP < 100 && $ecole->ID_PAYS === 0)
                        {echo " - ".$ecole->DEP;}
                        echo " - ".utf8_encode($ecole->NOM)." </option>";
                    endforeach; ?>
		</select>
	</div>
    <div class="form-group">
		<label>Ecris ton mot de passe</label>
		<input type="password" name="passe" class="form-control" placeholder="Password">
	</div>
        <input type="hidden" name="zone" value="<? echo $zone; ?>">
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Valider</button>
	</div>
</form>
</div>
<div class="col-md-2">
</div>
</div>