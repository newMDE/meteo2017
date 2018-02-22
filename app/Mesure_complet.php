<?php
namespace App;
class Mesure_complet
{
    private $_rne; // 0340123P
    private $_date_mesure; //yyy-mm-dd
    private $_heure; // 09:00 ou  13:00
    private $_ciel = 0;
        // 00 à 09 (le 02 n'existe pas)
        // 00 : Pas d'observation (seul pour lequel existe_ciel = false
	// 01 : Ensoleille
	// 03 : Nuageux avec eclaircies
	// 04 : Variable avec averses
	// 05 : Couvert
	// 06 : Orageux
	// 07 : Pluvieux
	// 08 : Neige
	// 09 : Brouillard
    private $_existe_ciel = false; // true ou false
    private $_temp; // de -40 à 55 °C
    private $_existe_temp = false; // 0 ou 1
    private $_pres; // de 950 à 1060 hPa
    private $_existe_pres = false; // true ou false
    private $_vent_direction; // n,no,o,so,s,se,e,ne ou si vent nul ve
    private $_existe_vent_direction = false; // true ou false
    private $_vent_force; // de 00 à 12
    private $_existe_vent_force = false; // true ou false
    private $_neige; // en mm, positif ou nul
    private $_existe_neige = false; // true ou false
    private $_nuage_chasseurs; // true ou false (défaut false)
    private $_nuage_chasseurs_heure_exacte; // hh:mm (si chasseur, on prend heure exacte et pas seulement 13:00
    private $_nuage_chasseurs_photos; // true ou false (défaut false)
    private $_nuage_chasseurs_couplage_satellite; // 0 ou 1 (défaut 0)
    private $_nuage_chasseurs_obs_nord; // Nom de l'observateur Nord
    private $_nuage_chasseurs_obs_est; // Nom de l'observateur Est
    private $_nuage_chasseurs_obs_sud; // Nom de l'observateur Sud
    private $_nuage_chasseurs_obs_ouest; // Nom de l'observateur Ouest
    private $_nuage_cs; // format données globe : "0000" (pas saisi =NNNN)
    private $_nuage_ci; // idem
    private $_nuage_cc; // idem
    private $_nuage_as; // idem
    private $_nuage_ac; // idem
    private $_nuage_st; // idem
    private $_nuage_sc; // idem
    private $_nuage_cu; // idem
    private $_nuage_ns; // idem
    private $_nuage_cn; // idem
    private $_nuage_chasseurs_trainees_ephemeres; // 8 caractères, 2 par quartier du ciel (pour les 4 observateurs)
    private $_nuage_chasseurs_trainees_etablies; // idem  (pas saisi = NNNNNNNN pour tous les champs trainées)
    private $_nuage_chasseurs_trainees_non_etablies; // idem
    private $_nuage_couverture; // 1 à 7 (pas saisi =N)
	// 1 : Aucun nuage (0%)
	// 2 : Clair ( < 10%)
	// 3 : Nuages isoles (de 10 a 25%)
	// 4 : Nuages epars (de 25 a 50%)
	// 5 : Nuages fragmentes (de 50 a 90%)
	// 6 : Couvert (>90%)
	// 7 : Obscurci
    private $_nuage_obscurci; // 1 à 10 (pas saisi =N)
	// 1 : par une tempete de neige
	// 2 : a cause de chute de neige
	// 3 : a cause de fortes pluies
	// 4 : par le brouillard
	// 5 : par la bruine ou les embruns
	// 6 : par des cendres volcaniques
	// 7 : par de la fumée
	// 8 : par de la poussière
	// 9 : par du sable
	// 10 : par de la brume
    private $_existe_nuage = false; // true ou false

	// LISTE DES GETTERS
	public function rne(){return $this->_rne;}
	public function date_mesure(){return $this->_date_mesure;}
	public function heure(){return $this->_heure;}
	public function ciel(){return $this->_ciel;}
	public function existe_ciel(){return $this->_existe_ciel;}
	public function temp(){return $this->_temp;}
	public function existe_temp(){return $this->_existe_temp;}
	public function pres(){return $this->_pres;}
	public function existe_pres(){return $this->_existe_pres;}
	public function vent_direction(){return $this->_vent_direction;}
	public function existe_vent_direction(){return $this->_existe_vent_direction;}
	public function vent_force(){return $this->_vent_force;}
	public function existe_vent_force(){return $this->_existe_vent_force;}
	public function neige(){return $this->_neige;}
	public function existe_neige(){return $this->_existe_neige;}
	public function nuage_chasseurs(){return $this->_nuage_chasseurs;}
	public function nuage_chasseurs_heure_exacte(){return $this->_nuage_chasseurs_heure_exacte;}
	public function nuage_chasseurs_photos(){return $this->_nuage_chasseurs_photos;}
	public function nuage_chasseurs_couplage_satellite(){return $this->_nuage_chasseurs_couplage_satellite;}
	public function nuage_chasseurs_obs_nord(){return $this->_nuage_chasseurs_obs_nord;}
	public function nuage_chasseurs_obs_est(){return $this->_nuage_chasseurs_obs_est;}
	public function nuage_chasseurs_obs_sud(){return $this->_nuage_chasseurs_obs_sud;}
	public function nuage_chasseurs_obs_ouest(){return $this->_nuage_chasseurs_obs_ouest;}
	public function nuage_cs(){return $this->_nuage_cs;}
	public function nuage_ci(){return $this->_nuage_ci;}
	public function nuage_cc(){return $this->_nuage_cc;}
	public function nuage_as(){return $this->_nuage_as;}
	public function nuage_ac(){return $this->_nuage_ac;}
	public function nuage_st(){return $this->_nuage_st;}
	public function nuage_sc(){return $this->_nuage_sc;}
	public function nuage_cu(){return $this->_nuage_cu;}
	public function nuage_ns(){return $this->_nuage_ns;}
	public function nuage_cn(){return $this->_nuage_cn;}
	public function nuage_couverture(){return $this->_nuage_couverture;}
	public function nuage_obscurci(){return $this->_nuage_obscurci;}
	public function existe_nuage(){return $this->_existe_nuage;}

	// LISTE DES SETTERS
	public function setRne($rne)
	{
		if (is_numeric(substr($rne,0,7)) and ctype_alpha(substr($rne,7,1)))
		{$this->_rne = $rne;}
    }
	public function setDate_mesure($date_mesure)
	{
		if (checkdate(substr($date_mesure,5,2),substr($date_mesure,8,2),substr($date_mesure,0,4)))
		{$this->_date_mesure = $date_mesure;}
    }
	public function setHeure($heure)
	{
		$this->_heure = $heure;
    }
	public function setCiel($ciel)
	{
		if (is_numeric($ciel))
		{$this->_ciel = $ciel;}
    }
	public function setExiste_ciel($existe_ciel)
	{
		if (is_bool($existe_ciel))
		{$this->_existe_ciel = $existe_ciel;}
    }
	public function setTemp($temp)
	{
		if (is_numeric($temp))
		{$this->_temp = $temp;}                
    }
	public function setExiste_temp($existe_temp)
	{
		if (is_bool($existe_temp))
		{$this->_existe_temp = $existe_temp;}
    }
	public function setPres($pres)
	{
		if (is_numeric($pres))
		{$this->_pres = $pres;}
    }
	public function setExiste_pres($existe_pres)
	{
		if (is_bool($existe_temp))
		{$this->_existe_pres = $existe_pres;}
    }
	public function setVent_direction($vent_direction)
	{
		if (is_string($vent_direction))
		{$this->_vent_direction = $vent_direction;}
    }
	public function setExiste_vent_direction($existe_vent_direction)
	{
		if (is_bool($existe_vent_direction))
		{$this->_existe_pres = $existe_vent_direction;}
    }
	public function setVent_force($vent_force)
	{
		if (is_numeric($vent_force))
		{$this->_vent_force = $vent_force;}
    }
	public function setExiste_vent_force($existe_vent_force)
	{
		if (is_bool($existe_vent_force))
		{$this->_existe_vent_force = $existe_vent_force;}
    }
	public function setNeige($neige)
	{
		if (is_numeric($neige))
		{$this->_neige = $neige;}
    }
	public function setExiste_neige($existe_neige)
	{
		if (is_bool($existe_neige))
		{$this->_existe_neige = $existe_neige;}
    }
	public function setNuage_chasseurs($nuage_chasseurs)
	{
		if (is_bool($nuage_chasseurs))
		{$this->_nuage_chasseurs = $nuage_chasseurs;}
    }
	public function setNuage_chasseurs_heure_exacte($nuage_chasseurs_heure_exacte)
	{
		$this->_nuage_chasseurs_heure_exacte = $nuage_chasseurs_heure_exacte;
    }
	public function setNuage_chasseurs_photos($nuage_chasseurs_photos)
	{
		if (is_bool($nuage_chasseurs_photos))
		{$this->_nuage_chasseurs_photos = $nuage_chasseurs_photos;}
    }
	public function setNuage_chasseurs_couplage_satellite($nuage_chasseurs_couplage_satellite)
	{
		if (is_bool($nuage_chasseurs_couplage_satellite))
		{$this->_nuage_chasseurs_couplage_satellite = $nuage_chasseurs_couplage_satellite;}
    }
	public function setNuage_chasseurs_obs_nord($nuage_chasseurs_obs_nord)
	{
		if (is_string($nuage_chasseurs_obs_nord))
		{$this->_nuage_chasseurs_obs_nord = $nuage_chasseurs_obs_nord;}
    }
	public function setNuage_chasseurs_obs_est($nuage_chasseurs_obs_est)
	{
		if (is_string($nuage_chasseurs_obs_est))
		{$this->_nuage_chasseurs_obs_est = $nuage_chasseurs_obs_est;}
    }
	public function setNuage_chasseurs_obs_sud($nuage_chasseurs_obs_sud)
	{
		if (is_string($nuage_chasseurs_obs_sud))
		{$this->_nuage_chasseurs_obs_sud = $nuage_chasseurs_obs_sud;}
    }
	public function setNuage_chasseurs_obs_ouest($nuage_chasseurs_obs_ouest)
	{
		if (is_string($nuage_chasseurs_obs_ouest))
		{$this->_nuage_chasseurs_obs_ouest = $nuage_chasseurs_obs_ouest;}
    }
	public function setNuage_cs($nuage_cs)
	{
		if (is_string($nuage_cs))
		{$this->_nuage_cs = $nuage_cs;}
    }
	public function setNuage_ci($nuage_ci)
	{
		if (is_string($nuage_ci))
		{$this->_nuage_ci = $nuage_ci;}
    }
	public function setNuage_cc($nuage_cc)
	{
		if (is_string($nuage_cc))
		{$this->_nuage_cc = $nuage_cc;}
    }
	public function setNuage_as($nuage_as)
	{
		if (is_string($nuage_as))
		{$this->_nuage_as = $nuage_as;}
    }
	public function setNuage_ac($nuage_ac)
	{
		if (is_string($nuage_ac))
		{$this->_nuage_ac = $nuage_ac;}
    }
	public function setNuage_st($nuage_st)
	{
		if (is_string($nuage_st))
		{$this->_nuage_st = $nuage_st;}
    }
	public function setNuage_sc($nuage_sc)
	{
		if (is_string($nuage_sc))
		{$this->_nuage_sc = $nuage_sc;}
    }
	public function setNuage_cu($nuage_cu)
	{
		if (is_string($nuage_cu))
		{$this->_nuage_cu = $nuage_cu;}
    }
	public function setNuage_ns($nuage_ns)
	{
		if (is_string($nuage_ns))
		{$this->_nuage_ns = $nuage_ns;}
    }
	public function setNuage_cn($nuage_cn)
	{
		if (is_string($nuage_cn))
		{$this->_nuage_cn = $nuage_cn;}
    }
	public function setNuage_couverture($nuage_couverture)
	{
		if (is_numeric($nuage_couverture))
		{$this->_nuage_couverture = $nuage_couverture;}
    }
	public function setNuage_obscurci($nuage_obscurci)
	{
		if (is_numeric($nuage_obscurci))
		{$this->_nuage_obscurci = $nuage_obscurci;}
    }
	public function setExiste_nuage($existe_nuage)
	{
		if (is_bool($existe_nuage))
		{$this->_existe_nuage = $existe_nuage;}
    }

	//HYDRATATION (Remplissage de tous les attributs à partir d'un tableau)	
	public function hydrate(array $donnees_mesure_complet)
	{
	  //On parcourt les clefs du tableau qui ont chacune une valeur
	  //Exemple $donnees_mesure_complet['rne']="0341563P"
	  //Ainsi On n'a pas à réécrire la fonction hydrate si on rajoute des attributs à la classe
	  foreach ($donnees_mesure_complet as $key => $value)
	  {
		// On récupère le nom du setter correspondant à l'attribut.
		$method = 'set'.ucfirst($key);
		// Si le setter correspondant existe.
		if (method_exists($this, $method))
		{
		// On appelle le setter.
		  $this->$method($value);
		}
	  }
	}

}
//TESTS DEBUG
//$monEcole = new Ecole_geo("0341723N");
//echo "L'ecole ".$monEcole->NOM_ecole();
?>
