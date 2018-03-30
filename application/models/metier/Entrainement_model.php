<?php

class Entrainement_model extends CI_Model{

	private $idEntrainement;
	private $idTrophyJoueur;
	private $asi;
	private $dateSynchro;
	private $puissance;
	private $endurance;
	private $vitesse;
	private $marquage;
	private $tacle;
	private $activite;
	private $placement;
	private $passe;
	private $centre;
	private $technique;
	private $tete;
	private $finition;
	private $tirDeLoin;
	private $coupFranc;
	private $gkPriseDeBalle;
	private $gkUnContreUn;
	private $gkReflexe;
	private $gkHabileteAir;
	private $gkDetente;
	private $gkCommunication;
	private $gkDegagementPied;
	private $gkRelanceMain;
	private $salaire;	


	public function __construct($idEntrainement='', $idTrophyJoueur='', $asi='', $dateSynchro='', $puissance='', $endurance='', $vitesse='', $marquage='', $tacle='', $activite='', $placement='', $passe='', $centre='', $technique='', $tete='', $finition='', $tirDeLoin='', $coupFranc='', $gkPriseDeBalle='', $gkUnContreUn='', $gkReflexe='', $gkHabileteAir='', $gkDetente='', $gkCommunication='', $gkDegagementPied='', $gkRelanceMain='', $salaire=''){

		$this->idEntrainement = $idEntrainement;
		$this->idTrophyJoueur = $idTrophyJoueur;
		$this->asi = $asi;
		$this->dateSynchro = $dateSynchro;
		$this->puissance = $puissance;
		$this->endurance = $endurance;
		$this->vitesse = $vitesse;
		$this->marquage = $marquage;
		$this->tacle = $tacle;
		$this->activite = $activite;
		$this->placement = $placement;
		$this->passe = $passe;
		$this->centre = $centre;
		$this->technique = $technique;
		$this->tete = $tete;
		$this->finition = $finition;
		$this->tirDeLoin = $tirDeLoin;
		$this->coupFranc = $coupFranc;
		$this->gkPriseDeBalle = $gkPriseDeBalle;
		$this->gkUnContreUn = $gkUnContreUn;
		$this->gkReflexe = $gkReflexe;
		$this->gkHabileteAir = $gkHabileteAir;
		$this->gkDetente = $gkDetente;
		$this->gkCommunication = $gkCommunication;
		$this->gkDegagementPied = $gkDegagementPied;
		$this->gkRelanceMain = $gkRelanceMain;
		$this->salaire = $salaire;
	}



    /**
     * Gets the value of idEntrainement.
     *
     * @return mixed
     */
    public function getIdEntrainement()
    {
        return $this->idEntrainement;
    }

    /**
     * Gets the value of idTrophyJoueur.
     *
     * @return mixed
     */
    public function getIdTrophyJoueur()
    {
        return $this->idTrophyJoueur;
    }

    /**
     * Gets the value of asi.
     *
     * @return mixed
     */
    public function getAsi()
    {
        return $this->asi;
    }

    /**
     * Gets the value of dateSynchro.
     *
     * @return mixed
     */
    public function getDateSynchro()
    {
        return $this->dateSynchro;
    }

    /**
     * Gets the value of puissance.
     *
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Gets the value of endurance.
     *
     * @return mixed
     */
    public function getEndurance()
    {
        return $this->endurance;
    }

    /**
     * Gets the value of vitesse.
     *
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Gets the value of marquage.
     *
     * @return mixed
     */
    public function getMarquage()
    {
        return $this->marquage;
    }

    /**
     * Gets the value of tacle.
     *
     * @return mixed
     */
    public function getTacle()
    {
        return $this->tacle;
    }

    /**
     * Gets the value of activite.
     *
     * @return mixed
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Gets the value of placement.
     *
     * @return mixed
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * Gets the value of passe.
     *
     * @return mixed
     */
    public function getPasse()
    {
        return $this->passe;
    }

    /**
     * Gets the value of centre.
     *
     * @return mixed
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Gets the value of technique.
     *
     * @return mixed
     */
    public function getTechnique()
    {
        return $this->technique;
    }

    /**
     * Gets the value of tete.
     *
     * @return mixed
     */
    public function getTete()
    {
        return $this->tete;
    }

    /**
     * Gets the value of finition.
     *
     * @return mixed
     */
    public function getFinition()
    {
        return $this->finition;
    }

    /**
     * Gets the value of tirDeLoin.
     *
     * @return mixed
     */
    public function getTirDeLoin()
    {
        return $this->tirDeLoin;
    }

    /**
     * Gets the value of coupFranc.
     *
     * @return mixed
     */
    public function getCoupFranc()
    {
        return $this->coupFranc;
    }

    /**
     * Gets the value of gkPriseDeBalle.
     *
     * @return mixed
     */
    public function getGkPriseDeBalle()
    {
        return $this->gkPriseDeBalle;
    }

    /**
     * Gets the value of gkUnContreUn.
     *
     * @return mixed
     */
    public function getGkUnContreUn()
    {
        return $this->gkUnContreUn;
    }

    /**
     * Gets the value of gkReflexe.
     *
     * @return mixed
     */
    public function getGkReflexe()
    {
        return $this->gkReflexe;
    }

    /**
     * Gets the value of gkHabileteAir.
     *
     * @return mixed
     */
    public function getGkHabileteAir()
    {
        return $this->gkHabileteAir;
    }

    /**
     * Gets the value of gkDetente.
     *
     * @return mixed
     */
    public function getGkDetente()
    {
        return $this->gkDetente;
    }

    /**
     * Gets the value of gkCommunication.
     *
     * @return mixed
     */
    public function getGkCommunication()
    {
        return $this->gkCommunication;
    }

    /**
     * Gets the value of gkDegagementPied.
     *
     * @return mixed
     */
    public function getGkDegagementPied()
    {
        return $this->gkDegagementPied;
    }

    /**
     * Gets the value of gkRelanceMain.
     *
     * @return mixed
     */
    public function getGkRelanceMain()
    {
        return $this->gkRelanceMain;
    }

    /**
     * Gets the value of salaire.
     *
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->salaire;
    }
}