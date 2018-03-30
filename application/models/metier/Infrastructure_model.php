<?php 

class Infrastructure_model extends CI_Model{

	private $idTrophyStadium;
	private $nomInfrastructure;
	private $niveauActuel;
	private $valeur;
	private $coutUn;
	private $coutDeux;
	private $coutTrois;
	private $coutQuatre;
	private $coutCinq;
	private $coutSix;
	private $coutSept;
	private $coutHuit;
	private $coutNeuf;
	private $coutDix;
	private $maintenanceUn;
	private $maintenanceDeux;
	private $maintenanceTrois;
	private $maintenanceQuatre;
	private $maintenanceCinq;
	private $maintenanceSix;
	private $maintenanceSept;
	private $maintenanceHuit;
	private $maintenanceNeuf;
	private $maintenanceDix;
	private $effectUn;
	private $effectDeux;
	private $effectTrois;
	private $effectQuatre;
	private $effectCinq;
	private $effectSix;
	private $effectSept;
	private $effectHuit;
	private $effectNeuf;
	private $effectDix;

	public function __construct($idTrophyStadium = '', $nomInfrastructure = '', $niveauActuel = '', $valeur = '', $coutUn = '', $coutDeux = '', $coutTrois = '', $coutQuatre = '', $coutCinq = '', $coutSix = '', $coutSept = '', $coutHuit = '', $coutNeuf = '', $coutDix = '', $maintenanceUn = '', $maintenanceDeux = '', $maintenanceTrois = '', $maintenanceQuatre = '', $maintenanceCinq = '', $maintenanceSix = '', $maintenanceSept = '', $maintenanceHuit = '', $maintenanceNeuf = '', $maintenanceDix = '', $effectUn = '', $effectDeux = '', $effectTrois = '', $effectQuatre = '', $effectCinq = '', $effectSix = '', $effectSept = '', $effectHuit = '', $effectNeuf = '', $effectDix = ''){

		$this->idTrophyStadium =   $idTrophyStadium;
  		$this->nomInfrastructure =   $nomInfrastructure;
  		$this->niveauActuel =    $niveauActuel;
  		$this->valeur =    $valeur;
  		$this->coutUn =    $coutUn;
  		$this->coutDeux =    $coutDeux;
  		$this->coutTrois =   $coutTrois;
  		$this->coutQuatre =    $coutQuatre;
  		$this->coutCinq =    $coutCinq;
  		$this->coutSix =   $coutSix;
  		$this->coutSept =    $coutSept;
  		$this->coutHuit =    $coutHuit;
  		$this->coutNeuf =    $coutNeuf;
  		$this->coutDix =   $coutDix;
  		$this->maintenanceUn =   $maintenanceUn;
  		$this->maintenanceDeux =   $maintenanceDeux;
  		$this->maintenanceTrois =    $maintenanceTrois;
  		$this->maintenanceQuatre =   $maintenanceQuatre;
  		$this->maintenanceCinq =   $maintenanceCinq;
  		$this->maintenanceSix =    $maintenanceSix;
  		$this->maintenanceSept =   $maintenanceSept;
  		$this->maintenanceHuit =   $maintenanceHuit;
  		$this->maintenanceNeuf =   $maintenanceNeuf;
  		$this->maintenanceDix =    $maintenanceDix;
  		$this->effectUn =    $effectUn;
  		$this->effectDeux =    $effectDeux;
  		$this->effectTrois =   $effectTrois;
  		$this->effectQuatre =    $effectQuatre;
  		$this->effectCinq =    $effectCinq;
  		$this->effectSix =   $effectSix;
  		$this->effectSept =    $effectSept;
  		$this->effectHuit =    $effectHuit;
  		$this->effectNeuf =    $effectNeuf;
  		$this->effectDix =   $effectDix;
		
	}

    public function hydrate($obj){
        
        foreach ($obj as $key => $value) {


            if ($value <> '' ) {                
                
                if (stripos($key, '_')) {
                    $key = str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
                }

                if(stripos($key, '10')){
                    $key = str_replace('10','Dix',$key);
                }elseif(stripos($key, '1')){
                    $key = str_replace('1','Un',$key);
                }elseif(stripos($key, '2')){
                    $key = str_replace('2','Deux',$key);
                }elseif(stripos($key, '3')){
                    $key = str_replace('3','Trois',$key);
                }elseif(stripos($key, '4')){
                    $key = str_replace('4','Quatre',$key);
                }elseif(stripos($key, '5')){
                    $key = str_replace('5','Cinq',$key);
                }elseif(stripos($key, '6')){
                    $key = str_replace('6','Six',$key);
                }elseif(stripos($key, '7')){
                    $key = str_replace('7','Sept',$key);
                }elseif(stripos($key, '8')){
                    $key = str_replace('8','Huit',$key);
                }elseif(stripos($key, '9')){
                    $key = str_replace('9','Neuf',$key);
                }
                
                $key = lcfirst($key);
                $this->{$key} = $value;
                
            }

        }


        return $this;

    }


    /**
     * Gets the value of idTrophyStadium.
     *
     * @return mixed
     */
    public function getIdTrophyStadium()
    {
        return $this->idTrophyStadium;
    }

    /**
     * Sets the value of idTrophyStadium.
     *
     * @param mixed $idTrophyStadium the id trophy stadium
     *
     * @return self
     */
    public function setIdTrophyStadium($idTrophyStadium)
    {
        $this->idTrophyStadium = $idTrophyStadium;

        return $this;
    }

    /**
     * Gets the value of nomInfrastructure.
     *
     * @return mixed
     */
    public function getNomInfrastructure()
    {
        return $this->nomInfrastructure;
    }

    /**
     * Sets the value of nomInfrastructure.
     *
     * @param mixed $nomInfrastructure the nom infrastructure
     *
     * @return self
     */
    public function setNomInfrastructure($nomInfrastructure)
    {
        $this->nomInfrastructure = $nomInfrastructure;

        return $this;
    }

    /**
     * Gets the value of niveauActuel.
     *
     * @return mixed
     */
    public function getNiveauActuel()
    {
        return $this->niveauActuel;
    }

    /**
     * Sets the value of niveauActuel.
     *
     * @param mixed $niveauActuel the niveau actuel
     *
     * @return self
     */
    public function setNiveauActuel($niveauActuel)
    {
        $this->niveauActuel = $niveauActuel;

        return $this;
    }

    /**
     * Gets the value of valeur.
     *
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Sets the value of valeur.
     *
     * @param mixed $valeur the valeur
     *
     * @return self
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Gets the value of coutUn.
     *
     * @return mixed
     */
    public function getCoutUn()
    {
        return $this->coutUn;
    }

    /**
     * Sets the value of coutUn.
     *
     * @param mixed $coutUn the cout un
     *
     * @return self
     */
    public function setCoutUn($coutUn)
    {
        $this->coutUn = $coutUn;

        return $this;
    }

    /**
     * Gets the value of coutDeux.
     *
     * @return mixed
     */
    public function getCoutDeux()
    {
        return $this->coutDeux;
    }

    /**
     * Sets the value of coutDeux.
     *
     * @param mixed $coutDeux the cout deux
     *
     * @return self
     */
    public function setCoutDeux($coutDeux)
    {
        $this->coutDeux = $coutDeux;

        return $this;
    }

    /**
     * Gets the value of coutTrois.
     *
     * @return mixed
     */
    public function getCoutTrois()
    {
        return $this->coutTrois;
    }

    /**
     * Sets the value of coutTrois.
     *
     * @param mixed $coutTrois the cout trois
     *
     * @return self
     */
    public function setCoutTrois($coutTrois)
    {
        $this->coutTrois = $coutTrois;

        return $this;
    }

    /**
     * Gets the value of coutQuatre.
     *
     * @return mixed
     */
    public function getCoutQuatre()
    {
        return $this->coutQuatre;
    }

    /**
     * Sets the value of coutQuatre.
     *
     * @param mixed $coutQuatre the cout quatre
     *
     * @return self
     */
    public function setCoutQuatre($coutQuatre)
    {
        $this->coutQuatre = $coutQuatre;

        return $this;
    }

    /**
     * Gets the value of coutCinq.
     *
     * @return mixed
     */
    public function getCoutCinq()
    {
        return $this->coutCinq;
    }

    /**
     * Sets the value of coutCinq.
     *
     * @param mixed $coutCinq the cout cinq
     *
     * @return self
     */
    public function setCoutCinq($coutCinq)
    {
        $this->coutCinq = $coutCinq;

        return $this;
    }

    /**
     * Gets the value of coutSix.
     *
     * @return mixed
     */
    public function getCoutSix()
    {
        return $this->coutSix;
    }

    /**
     * Sets the value of coutSix.
     *
     * @param mixed $coutSix the cout six
     *
     * @return self
     */
    public function setCoutSix($coutSix)
    {
        $this->coutSix = $coutSix;

        return $this;
    }

    /**
     * Gets the value of coutSept.
     *
     * @return mixed
     */
    public function getCoutSept()
    {
        return $this->coutSept;
    }

    /**
     * Sets the value of coutSept.
     *
     * @param mixed $coutSept the cout sept
     *
     * @return self
     */
    public function setCoutSept($coutSept)
    {
        $this->coutSept = $coutSept;

        return $this;
    }

    /**
     * Gets the value of coutHuit.
     *
     * @return mixed
     */
    public function getCoutHuit()
    {
        return $this->coutHuit;
    }

    /**
     * Sets the value of coutHuit.
     *
     * @param mixed $coutHuit the cout huit
     *
     * @return self
     */
    public function setCoutHuit($coutHuit)
    {
        $this->coutHuit = $coutHuit;

        return $this;
    }

    /**
     * Gets the value of coutNeuf.
     *
     * @return mixed
     */
    public function getCoutNeuf()
    {
        return $this->coutNeuf;
    }

    /**
     * Sets the value of coutNeuf.
     *
     * @param mixed $coutNeuf the cout neuf
     *
     * @return self
     */
    public function setCoutNeuf($coutNeuf)
    {
        $this->coutNeuf = $coutNeuf;

        return $this;
    }

    /**
     * Gets the value of coutDix.
     *
     * @return mixed
     */
    public function getCoutDix()
    {
        return $this->coutDix;
    }

    /**
     * Sets the value of coutDix.
     *
     * @param mixed $coutDix the cout dix
     *
     * @return self
     */
    public function setCoutDix($coutDix)
    {
        $this->coutDix = $coutDix;

        return $this;
    }

    /**
     * Gets the value of maintenanceUn.
     *
     * @return mixed
     */
    public function getMaintenanceUn()
    {
        return $this->maintenanceUn;
    }

    /**
     * Sets the value of maintenanceUn.
     *
     * @param mixed $maintenanceUn the maintenance un
     *
     * @return self
     */
    public function setMaintenanceUn($maintenanceUn)
    {
        $this->maintenanceUn = $maintenanceUn;

        return $this;
    }

    /**
     * Gets the value of maintenanceDeux.
     *
     * @return mixed
     */
    public function getMaintenanceDeux()
    {
        return $this->maintenanceDeux;
    }

    /**
     * Sets the value of maintenanceDeux.
     *
     * @param mixed $maintenanceDeux the maintenance deux
     *
     * @return self
     */
    public function setMaintenanceDeux($maintenanceDeux)
    {
        $this->maintenanceDeux = $maintenanceDeux;

        return $this;
    }

    /**
     * Gets the value of maintenanceTrois.
     *
     * @return mixed
     */
    public function getMaintenanceTrois()
    {
        return $this->maintenanceTrois;
    }

    /**
     * Sets the value of maintenanceTrois.
     *
     * @param mixed $maintenanceTrois the maintenance trois
     *
     * @return self
     */
    public function setMaintenanceTrois($maintenanceTrois)
    {
        $this->maintenanceTrois = $maintenanceTrois;

        return $this;
    }

    /**
     * Gets the value of maintenanceQuatre.
     *
     * @return mixed
     */
    public function getMaintenanceQuatre()
    {
        return $this->maintenanceQuatre;
    }

    /**
     * Sets the value of maintenanceQuatre.
     *
     * @param mixed $maintenanceQuatre the maintenance quatre
     *
     * @return self
     */
    public function setMaintenanceQuatre($maintenanceQuatre)
    {
        $this->maintenanceQuatre = $maintenanceQuatre;

        return $this;
    }

    /**
     * Gets the value of maintenanceCinq.
     *
     * @return mixed
     */
    public function getMaintenanceCinq()
    {
        return $this->maintenanceCinq;
    }

    /**
     * Sets the value of maintenanceCinq.
     *
     * @param mixed $maintenanceCinq the maintenance cinq
     *
     * @return self
     */
    public function setMaintenanceCinq($maintenanceCinq)
    {
        $this->maintenanceCinq = $maintenanceCinq;

        return $this;
    }

    /**
     * Gets the value of maintenanceSix.
     *
     * @return mixed
     */
    public function getMaintenanceSix()
    {
        return $this->maintenanceSix;
    }

    /**
     * Sets the value of maintenanceSix.
     *
     * @param mixed $maintenanceSix the maintenance six
     *
     * @return self
     */
    public function setMaintenanceSix($maintenanceSix)
    {
        $this->maintenanceSix = $maintenanceSix;

        return $this;
    }

    /**
     * Gets the value of maintenanceSept.
     *
     * @return mixed
     */
    public function getMaintenanceSept()
    {
        return $this->maintenanceSept;
    }

    /**
     * Sets the value of maintenanceSept.
     *
     * @param mixed $maintenanceSept the maintenance sept
     *
     * @return self
     */
    public function setMaintenanceSept($maintenanceSept)
    {
        $this->maintenanceSept = $maintenanceSept;

        return $this;
    }

    /**
     * Gets the value of maintenanceHuit.
     *
     * @return mixed
     */
    public function getMaintenanceHuit()
    {
        return $this->maintenanceHuit;
    }

    /**
     * Sets the value of maintenanceHuit.
     *
     * @param mixed $maintenanceHuit the maintenance huit
     *
     * @return self
     */
    public function setMaintenanceHuit($maintenanceHuit)
    {
        $this->maintenanceHuit = $maintenanceHuit;

        return $this;
    }

    /**
     * Gets the value of maintenanceNeuf.
     *
     * @return mixed
     */
    public function getMaintenanceNeuf()
    {
        return $this->maintenanceNeuf;
    }

    /**
     * Sets the value of maintenanceNeuf.
     *
     * @param mixed $maintenanceNeuf the maintenance neuf
     *
     * @return self
     */
    public function setMaintenanceNeuf($maintenanceNeuf)
    {
        $this->maintenanceNeuf = $maintenanceNeuf;

        return $this;
    }

    /**
     * Gets the value of maintenanceDix.
     *
     * @return mixed
     */
    public function getMaintenanceDix()
    {
        return $this->maintenanceDix;
    }

    /**
     * Sets the value of maintenanceDix.
     *
     * @param mixed $maintenanceDix the maintenance dix
     *
     * @return self
     */
    public function setMaintenanceDix($maintenanceDix)
    {
        $this->maintenanceDix = $maintenanceDix;

        return $this;
    }

    /**
     * Gets the value of effectUn.
     *
     * @return mixed
     */
    public function getEffectUn()
    {
        return $this->effectUn;
    }

    /**
     * Sets the value of effectUn.
     *
     * @param mixed $effectUn the effect un
     *
     * @return self
     */
    public function setEffectUn($effectUn)
    {
        $this->effectUn = $effectUn;

        return $this;
    }

    /**
     * Gets the value of effectDeux.
     *
     * @return mixed
     */
    public function getEffectDeux()
    {
        return $this->effectDeux;
    }

    /**
     * Sets the value of effectDeux.
     *
     * @param mixed $effectDeux the effect deux
     *
     * @return self
     */
    public function setEffectDeux($effectDeux)
    {
        $this->effectDeux = $effectDeux;

        return $this;
    }

    /**
     * Gets the value of effectTrois.
     *
     * @return mixed
     */
    public function getEffectTrois()
    {
        return $this->effectTrois;
    }

    /**
     * Sets the value of effectTrois.
     *
     * @param mixed $effectTrois the effect trois
     *
     * @return self
     */
    public function setEffectTrois($effectTrois)
    {
        $this->effectTrois = $effectTrois;

        return $this;
    }

    /**
     * Gets the value of effectQuatre.
     *
     * @return mixed
     */
    public function getEffectQuatre()
    {
        return $this->effectQuatre;
    }

    /**
     * Sets the value of effectQuatre.
     *
     * @param mixed $effectQuatre the effect quatre
     *
     * @return self
     */
    public function setEffectQuatre($effectQuatre)
    {
        $this->effectQuatre = $effectQuatre;

        return $this;
    }

    /**
     * Gets the value of effectCinq.
     *
     * @return mixed
     */
    public function getEffectCinq()
    {
        return $this->effectCinq;
    }

    /**
     * Sets the value of effectCinq.
     *
     * @param mixed $effectCinq the effect cinq
     *
     * @return self
     */
    public function setEffectCinq($effectCinq)
    {
        $this->effectCinq = $effectCinq;

        return $this;
    }

    /**
     * Gets the value of effectSix.
     *
     * @return mixed
     */
    public function getEffectSix()
    {
        return $this->effectSix;
    }

    /**
     * Sets the value of effectSix.
     *
     * @param mixed $effectSix the effect six
     *
     * @return self
     */
    public function setEffectSix($effectSix)
    {
        $this->effectSix = $effectSix;

        return $this;
    }

    /**
     * Gets the value of effectSept.
     *
     * @return mixed
     */
    public function getEffectSept()
    {
        return $this->effectSept;
    }

    /**
     * Sets the value of effectSept.
     *
     * @param mixed $effectSept the effect sept
     *
     * @return self
     */
    public function setEffectSept($effectSept)
    {
        $this->effectSept = $effectSept;

        return $this;
    }

    /**
     * Gets the value of effectHuit.
     *
     * @return mixed
     */
    public function getEffectHuit()
    {
        return $this->effectHuit;
    }

    /**
     * Sets the value of effectHuit.
     *
     * @param mixed $effectHuit the effect huit
     *
     * @return self
     */
    public function setEffectHuit($effectHuit)
    {
        $this->effectHuit = $effectHuit;

        return $this;
    }

    /**
     * Gets the value of effectNeuf.
     *
     * @return mixed
     */
    public function getEffectNeuf()
    {
        return $this->effectNeuf;
    }

    /**
     * Sets the value of effectNeuf.
     *
     * @param mixed $effectNeuf the effect neuf
     *
     * @return self
     */
    public function setEffectNeuf($effectNeuf)
    {
        $this->effectNeuf = $effectNeuf;

        return $this;
    }

    /**
     * Gets the value of effectDix.
     *
     * @return mixed
     */
    public function getEffectDix()
    {
        return $this->effectDix;
    }

    /**
     * Sets the value of effectDix.
     *
     * @param mixed $effectDix the effect dix
     *
     * @return self
     */
    public function setEffectDix($effectDix)
    {
        $this->effectDix = $effectDix;

        return $this;
    }
}

