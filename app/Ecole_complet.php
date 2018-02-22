<?php
class Ecole_complet extends Ecole_geo
{
	//ATTRIBUTS
		//Dans table école
    private $_creation;
    private $_id_createur;
    private $_projet;
    private $_adresse;
    private $_enseignant;
    private $_niveau;
    private $_mdp_maitre;
    private $_id_ville;
    private $_mdp;
    private $_email;
    private $_mail_prof;
    private $_mail_eleves;
    private $_telephone;
    private $_telephone_prof;
    private $_site;
    private $_id_globe;
    private $_transfert_globe;
    private $_ciel;
    private $_commentaires;
	private $_prec;
    private $_prec_mois;
    private $_pres;
	private $_pres_globe;
    private $_temp;
	private $_temp_globe;
    private $_tempminmax;
	private $_tempminmax_globe;
    private $_vent;
    private $_force;
    private $_nuage;
	private $_nuage_globe;
    private $_neige;
	private $_bilan_hebdo;
    private $_page_accueil;
	private $_id_carte_preference;
	private $_presentation;
    private $_affichage;
	private $_validation;
    private $_bulletin;
	private $_bulletin_fr;
	private $_bulletin_en;
	private $_bulletin_cat;
        
//CONSTRUCTEUR
	
  public function __construct($donnees_ecole) // Constructeur demandant 2 paramètres
  {
    $this->hydrate($donnees_ecole); // hydratation de l'instance.
  }
	
	// LISTE DES GETTERS
		//Dans table "ecoles"
	public function creation(){return $this->_creation;}
	public function id_createur(){return $this->_id_createur;}
	public function projet(){return $this->_projet;}
	public function adresse(){return $this->_adresse;}
	public function enseignant(){return $this->_enseignant;}
	public function niveau(){return $this->_niveau;}
	public function mdp_maitre(){return $this->_mdp_maitre;}
	public function id_ville(){return $this->_id_ville;}
	public function mdp(){return $this->_mdp;}
	public function email(){return $this->_email;}
	public function mail_prof(){return $this->_mail_prof;}
	public function mail_eleves(){return $this->_mail_eleves;}
	public function telephone(){return $this->_telephone;}
	public function telephone_prof(){return $this->_telephone_prof;}
	public function site(){return $this->_site;}
	public function id_globe(){return $this->_id_globe;}
	public function transfert_globe(){return $this->_transfert_globe;}
	public function ciel(){return $this->_ciel;}
	public function commentaires(){return $this->_commentaires;}
	public function prec(){return $this->_prec;}
	public function prec_mois(){return $this->_prec_mois;}
	public function pres(){return $this->_pres;}
	public function pres_globe(){return $this->_pres_globe;}
	public function temp(){return $this->_temp;}
	public function temp_globe(){return $this->_temp_globe;}
	public function tempminmax(){return $this->_tempminmax;}
	public function tempminmax_globe(){return $this->_tempminmax_globe;}
	public function vent(){return $this->_vent;}
	public function force(){return $this->_force;}
	public function nuage(){return $this->_nuage;}
	public function nuage_globe(){return $this->_nuage_globe;}
	public function neige(){return $this->_neige;}
	public function bilan_hebdo(){return $this->_bilan_hebdo;}
	public function page_accueil(){return $this->_page_accueil;}
	public function id_carte_preference(){return $this->_id_carte_preference;}
	public function affichage(){return $this->_affichage;}
	public function validation(){return $this->_validation;}
	public function bulletin(){return $this->_bulletin;}
	public function bulletin_fr(){return $this->_bulletin_fr;}
	public function bulletin_en(){return $this->_bulletin_en;}
	public function bulletin_cat(){return $this->_bulletin_cat;}

	// LISTE DES SETTERS
		//Dans table ecole

//	public function setCreation($creation)
//	{
//		if ((substr($creation,0,4))>2001)&&((substr($creation,0,4))<2099)&&((substr($creation,5,2))>=1)&&((substr($creation,5,2))<=12)&&((substr($creation,8,2))>=1)&&((substr($creation,8,2))<=31))
//		{$this->_creation = $creation;}
//    }
	public function setId_createur($id_createur)
	{
		if (is_numeric($id_createur) && $id_createur>=0)
		{$this->_id_createur = $id_createur;}
    }
	public function setProjet($projet)
	{
		if (is_numeric($projet))
		{$this->_projet = $projet;}
    }
	public function setAdresse($adresse)
	{
		if (is_string($adresse))
		{$this->_adresse = utf8_encode($adresse);}
    }
	public function setEnseignant($enseignant)
	{
		if (is_string($enseignant))
		{$this->_enseignant = utf8_encode($enseignant);}
    }
	public function setNiveau($niveau)
	{
		if (is_string($niveau))
		{$this->_niveau = $niveau;}
    }
	public function setMdp_maitre($mdp_maitre)
	{
		if (is_string($mdp_maitre))
		{$this->_mdp_maitre = $mdp_maitre;}
    }
	public function setId_ville($id_ville)
	{
		if (is_numeric($id_ville) && $id_ville>=0)
		{$this->_id_ville = $id_ville;}
    }
	public function setMdp($mdp)
	{
		if (is_string($mdp))
		{$this->_mdp = $mdp;}
    }
	public function setEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{$this->_email = $email;}
    }
	public function setMail_prof($mail_prof)
	{
		if (filter_var($mail_prof, FILTER_VALIDATE_EMAIL))
		{$this->_mail_prof = $mail_prof;}
    }
	public function setMail_eleves($mail_eleves)
	{
		if (filter_var($mail_eleves, FILTER_VALIDATE_EMAIL))
		{$this->_mail_eleves = $mail_eleves;}
    }
	public function setTelephone_prof($telephone_prof)
	{
		if (is_string($telephone_prof))
		{$this->_telephone_prof = $telephone_prof;}
    }
	public function setTelephone($telephone)
	{
		if (is_string($telephone))
		{$this->_telephone = $telephone;}
    }
	public function setSite($site)
	{
		if (is_string($site))
		{$this->_site = $site;}
    }
	public function setId_globe($id_globe)
	{
		if (is_numeric($id_globe) && $id_globe>=0)
		{$this->_id_globe = $id_globe;}
    }
	public function setTransfert_globe($transfert_globe)
	{
		if ($transfert_globe===0 || $transfert_globe===1)
		{$this->_transfert_globe = $transfert_globe;}
    }
	public function setCiel($ciel)
	{
		if ($ciel===0 || $ciel===1)
		{$this->_ciel = $ciel;}
    }
	public function setCommentaires($commentaires)
	{
		if ($commentaires===0 || $commentaires===1)
		{$this->_commentaires = $commentaires;}
    }
	public function setPrec($prec)
	{
		if ($prec===0 || $prec===1)
		{$this->_prec = $prec;}
    }
	public function setPrec_mois($prec_mois)
	{
		if ($prec_mois===0 || $prec_mois===1)
		{$this->_prec_mois = $prec_mois;}
    }
	public function setPres($pres)
	{
		if ($pres===0 || $pres===1)
		{$this->_pres = $pres;}
    }
	public function setPres_globe($pres_globe)
	{
		if ($pres_globe===0 || $pres_globe===1)
		{$this->_pres_globe = $pres_globe;}
    }
	public function setTemp($temp)
	{
		if ($temp===0 || $temp===1)
		{$this->_temp = $temp;}
    }
	public function setTemp_globe($temp_globe)
	{
		if ($temp_globe===0 || $temp_globe===1)
		{$this->_temp_globe = $temp_globe;}
    }
	public function setTempminmax($tempminmax)
	{
		if ($tempminmax===0 || $tempminmax===1)
		{$this->_tempminmax = $tempminmax;}
    }
	public function setTempminmax_globe($tempminmax_globe)
	{
		if ($tempminmax_globe===0 || $tempminmax_globe===1)
		{$this->_tempminmax_globe = $tempminmax_globe;}
    }
	public function setVent($vent)
	{
		if ($vent===0 || $vent===1)
		{$this->_vent = $vent;}
    }
	public function setForce($force)
	{
		if ($force===0 || $force===1)
		{$this->_force = $force;}
    }
	public function setNuage($nuage)
	{
		if ($nuage===0 || $nuage===1)
		{$this->_nuage = $nuage;}
    }
	public function setNuage_globe($nuage_globe)
	{
		if ($nuage_globe===0 || $nuage_globe===1)
		{$this->_nuage_globe = $nuage_globe;}
    }
	public function setNeige($neige)
	{
		if ($neige===0 || $neige===1)
		{$this->_neige = $neige;}
    }
	public function setBilan_hebdo($bilan_hebdo)
	{
		if ($bilan_hebdo===0 || $bilan_hebdo===1)
		{$this->_bilan_hebdo = $bilan_hebdo;}
    }
	public function setPage_accueil($page_accueil)
	{
		if ($page_accueil===0 || $page_accueil===1)
		{$this->_page_accueil = $page_accueil;}
    }
	public function setId_carte_preference($id_carte_preference)
	{
		if (is_numeric($id_carte_preference) && $id_carte_preference>=0)
		{$this->_id_carte_preference = $id_carte_preference;}
    }
	public function setAffichage($affichage)
	{
		if ($affichage===0 || $affichage===1)
		{$this->_affichage = $affichage;}
    }
	public function setValidation($validation)
	{
		if ($validation==="prof" || $validation==="animateur")
		{$this->_validation = $validation;}
    }
	public function setBulletin($bulletin)
	{
		if ($bulletin===0 || $bulletin===1)
		{$this->_bulletin = $bulletin;}
    }
	public function setBulletin_fr($bulletin_fr)
	{
		if ($bulletin_fr===0 || $bulletin_fr===1)
		{$this->_bulletin_fr = $bulletin_fr;}
    }
	public function setBulletin_en($bulletin_en)
	{
		if ($bulletin_en===0 || $bulletin_en===1)
		{$this->_bulletin_en = $bulletin_en;}
    }


	//HYDRATATION (Remplissage de tous les attributs à partir d'un tableau)
        //Source du code : https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/manipulation-de-donnees-stockees
	public function hydrate(array $donnees_ecole)
	{
	  //On parcourt les clefs du tableau qui ont chacune une valeur
	  //Exemple $donnees_geo_ecoles['nom']="TOULOUSE - Ecole Jules Romain"
	  //Ainsi On n'a pas à réécrire la fonction hydrate si on rajoute des attributs à la classe
	  foreach ($donnees_ecole as $key => $value)
	  {
		// On récupère le nom du setter correspondant à l'attribut.
		$method = 'set'.ucfirst(strtolower ($key));
		// Si le setter correspondant existe.
		if (method_exists($this, $method))
		{
		// On appelle le setter.
		  $this->$method($value);
		  //débug
		  //echo "Clef du tableau : ".$key."<br>";
		  //echo "Nom de la methode : ".$method."<br>";
		  $getter_name=strtolower($key);
		  //echo "Nom du getter ".$getter_name;
		}
	  }
	}

}
?>
