<?php 

class Joueur_model extends CI_Model{

	private $idJoueur;
	private $idTrophyJoueur;
	private $idClub;
	private $numeroMaillot;
	private $ban;
	private $banPoints;
	private $blessure;
	private $nom;
	private $experience;
	private $retrait;
	private $age;
	private $poste;
	private $asi;
	private $pays;
	private $puissance;
	private $endurance;
	private $vitesse;
	private $marquage;
	private $tacles;
	private $activite;
	private $placement;
	private $passes;
	private $centres;
	private $technique;
	private $tete;
	private $finition;
	private $tirsDeLoin;
	private $coupFrancs;
	private $gkPrisesDeBalle;
	private $gkUnContreUn;
	private $gkReflexes;
	private $gkHabileteDansLesAirs;
	private $gkDetente;
	private $gkCommunication;
	private $gkDegagementsAuPied;
	private $gkRelancesALaMain;
	private $salaire;
	private $matchJoues;
	private $butsMarques;
	private $passesDecisives;
	private $rendement;
	private $note;
	private $cartons;

	public function __construct($idJoueur = '', $idTrophyJoueur = '', $idClub = '', $numeroMaillot = '', $ban = '', $banPoints = '', $blessure = '', $nom = '', $experience = '', $retrait = '', $age = '', $poste = '', $asi = '', $pays = '', $puissance = '', $endurance = '', $vitesse = '', $marquage = '', $tacles = '', $activite = '', $placement = '', $passes = '', $centres = '', $technique = '', $tete = '', $finition = '', $tirsDeLoin = '', $coupFrancs = '', $gkPrisesDeBalle = '', $gkUnContreUn = '', $gkReflexes = '', $gkHabileteDansLesAirs = '', $gkDetente = '', $gkCommunication = '', $gkDegagementsAuPied = '', $gkRelancesALaMain = '', $salaire = '', $matchJoues = '', $butsMarques = '', $passesDecisives = '', $rendement = '', $note = '', $cartons = ''){
		parent::__construct();
		
        $this->idJoueur = $idJoueur;
        $this->idTrophyJoueur = $idTrophyJoueur;
        $this->idClub = $idClub;
        $this->numeroMaillot = $numeroMaillot;
        $this->ban = $ban;
        $this->banPoints = $banPoints;
        $this->blessure = $blessure;
        $this->nom = $nom;
        $this->experience = $experience;
        $this->retrait = $retrait;
        $this->age = $age;
        $this->poste = $poste;
        $this->asi = $asi;
        $this->pays = $pays;
        $this->puissance = $puissance;
        $this->endurance = $endurance;
        $this->vitesse = $vitesse;
        $this->marquage = $marquage;
        $this->tacles = $tacles;
        $this->activite = $activite;
        $this->placement = $placement;
        $this->passes = $passes;
        $this->centres = $centres;
        $this->technique = $technique;
        $this->tete = $tete;
        $this->finition = $finition;
        $this->tirsDeLoin = $tirsDeLoin;
        $this->coupFrancs = $coupFrancs;
        $this->gkPrisesDeBalle = $gkPrisesDeBalle;
        $this->gkUnContreUn = $gkUnContreUn;
        $this->gkReflexes = $gkReflexes;
        $this->gkHabileteDansLesAirs = $gkHabileteDansLesAirs;
        $this->gkDetente = $gkDetente;
        $this->gkCommunication = $gkCommunication;
        $this->gkDegagementsAuPied = $gkDegagementsAuPied;
        $this->gkRelancesALaMain = $gkRelancesALaMain;
        $this->salaire = $salaire;
        $this->matchJoues = $matchJoues;
        $this->butsMarques = $butsMarques;
        $this->passesDecisives = $passesDecisives;
        $this->rendement = $rendement;
        $this->note = $note;
        $this->cartons = $cartons;

	}

    public function calculGk($pdb,$reflexe,$vitesse,$puissance,$detente,$air,$unvun){
        $maxGK = 180;

        return ((($pdb*2+$reflexe*2)+($vitesse+$puissance+$detente+$air+$unvun))/$maxGK)*100;
    }

    public function calculDl($marquage, $tacle, $vitesse, $placement, $puissance, $tete, $centre, $technique){
        $maxDL = 220;

        return ((($marquage*2+$tacle*2+$vitesse*2)  +   ($placement+$puissance+$tete+$centre+$technique)) /$maxDL)*100;
    }

    public function calculDc($marquage, $tacle, $placement, $puissance, $tete, $vitesse){
        $maxDC = 160;

        return ((($marquage*2+$tacle*2)+($placement+$puissance+$tete+$vitesse)) /$maxDC)*100;
    }

    public function calculMd($activite, $passe, $tacle, $placement, $marquage, $puissance, $endurance, $vitesse, $centre, $technique){
        $maxMD = 320;

        return ((($activite*2+$passe*2+$tacle*2+$placement*2+$marquage*2+$puissance*2)+($endurance+$vitesse+$centre+$technique) )/$maxMD)*100;
    }

    public function calculMc($passe, $activite, $technique, $placement, $endurance, $puissance, $marquage, $tacle, $finition, $tdl, $tete, $centre, $vitesse){
        $maxMC = 300;

        return ((($passe*2+$activite*2)+($technique+$placement+$endurance+$puissance+$marquage+$tacle+$finition+$tdl+$tete+$centre+$vitesse) )/$maxMC)*100;
    }
    
    public function calculMo($activite, $passe, $technique, $tete, $finition, $tdl, $puissance, $vitesse, $endurance, $centre, $placement){
        $maxMO = 340;

        return ((($activite*2+$passe*2+$technique*2+$tete*2+$finition*2+$tdl*2)+($puissance+$vitesse+$endurance+$centre+$placement))/$maxMO)*100;
    }

    public function calculAi($vitesse, $centre, $technique, $activite, $placement, $passe, $finition, $tdl, $tete, $puissance, $endurance){
        $maxAI = 260;

        return ((($vitesse*2+$centre*2)+($technique+$activite+$placement+$passe+$finition+$tdl+$tete+$puissance+$endurance) )/$maxAI)*100;
    }

    public function calculA($finition, $tdl, $tete, $technique, $puissance, $passe, $placement, $activite, $endurance, $vitesse){
        $maxA = 260;

        return ((($finition*2+$tdl*2+$tete*2)+($technique+$puissance+$passe+$placement+$activite+$endurance+$vitesse) )/$maxA)*100;
    }

    /**
     * Gets the value of idJoueur.
     *
     * @return mixed
     */
    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

    /**
     * Sets the value of idJoueur.
     *
     * @param mixed $idJoueur the id joueur
     *
     * @return self
     */
    public function setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;

        return $this;
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
     * Sets the value of idTrophyJoueur.
     *
     * @param mixed $idTrophyJoueur the id trophy joueur
     *
     * @return self
     */
    public function setIdTrophyJoueur($idTrophyJoueur)
    {
        $this->idTrophyJoueur = $idTrophyJoueur;

        return $this;
    }

    /**
     * Gets the value of idClub.
     *
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * Sets the value of idClub.
     *
     * @param mixed $idClub the id club
     *
     * @return self
     */
    public function setIdClub($idClub)
    {
        $this->idClub = $idClub;

        return $this;
    }

    /**
     * Gets the value of numeroMaillot.
     *
     * @return mixed
     */
    public function getNumeroMaillot()
    {
        return $this->numeroMaillot;
    }

    /**
     * Sets the value of numeroMaillot.
     *
     * @param mixed $numeroMaillot the numero maillot
     *
     * @return self
     */
    public function setNumeroMaillot($numeroMaillot)
    {
        $this->numeroMaillot = $numeroMaillot;

        return $this;
    }

    /**
     * Gets the value of ban.
     *
     * @return mixed
     */
    public function getBan()
    {
        return $this->ban;
    }

    /**
     * Sets the value of ban.
     *
     * @param mixed $ban the ban
     *
     * @return self
     */
    public function setBan($ban)
    {
        $this->ban = $ban;

        return $this;
    }

    /**
     * Gets the value of banPoints.
     *
     * @return mixed
     */
    public function getBanPoints()
    {
        return $this->banPoints;
    }

    /**
     * Sets the value of banPoints.
     *
     * @param mixed $banPoints the ban points
     *
     * @return self
     */
    public function setBanPoints($banPoints)
    {
        $this->banPoints = $banPoints;

        return $this;
    }

    /**
     * Gets the value of blessure.
     *
     * @return mixed
     */
    public function getBlessure()
    {
        return $this->blessure;
    }

    /**
     * Sets the value of blessure.
     *
     * @param mixed $blessure the blessure
     *
     * @return self
     */
    public function setBlessure($blessure)
    {
        $this->blessure = $blessure;

        return $this;
    }

    /**
     * Gets the value of nom.
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the value of nom.
     *
     * @param mixed $nom the nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Gets the value of experience.
     *
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Sets the value of experience.
     *
     * @param mixed $experience the experience
     *
     * @return self
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Gets the value of retrait.
     *
     * @return mixed
     */
    public function getRetrait()
    {
        return $this->retrait;
    }

    /**
     * Sets the value of retrait.
     *
     * @param mixed $retrait the retrait
     *
     * @return self
     */
    public function setRetrait($retrait)
    {
        $this->retrait = $retrait;

        return $this;
    }

    /**
     * Gets the value of age.
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets the value of age.
     *
     * @param mixed $age the age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets the value of poste.
     *
     * @return mixed
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Sets the value of poste.
     *
     * @param mixed $poste the poste
     *
     * @return self
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
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
     * Sets the value of asi.
     *
     * @param mixed $asi the asi
     *
     * @return self
     */
    public function setAsi($asi)
    {
        $this->asi = $asi;

        return $this;
    }

    /**
     * Gets the value of pays.
     *
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Sets the value of pays.
     *
     * @param mixed $pays the pays
     *
     * @return self
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
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
     * Sets the value of puissance.
     *
     * @param mixed $puissance the puissance
     *
     * @return self
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
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
     * Sets the value of endurance.
     *
     * @param mixed $endurance the endurance
     *
     * @return self
     */
    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;

        return $this;
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
     * Sets the value of vitesse.
     *
     * @param mixed $vitesse the vitesse
     *
     * @return self
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
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
     * Sets the value of marquage.
     *
     * @param mixed $marquage the marquage
     *
     * @return self
     */
    public function setMarquage($marquage)
    {
        $this->marquage = $marquage;

        return $this;
    }

    /**
     * Gets the value of tacles.
     *
     * @return mixed
     */
    public function getTacles()
    {
        return $this->tacles;
    }

    /**
     * Sets the value of tacles.
     *
     * @param mixed $tacles the tacles
     *
     * @return self
     */
    public function setTacles($tacles)
    {
        $this->tacles = $tacles;

        return $this;
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
     * Sets the value of activite.
     *
     * @param mixed $activite the activite
     *
     * @return self
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
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
     * Sets the value of placement.
     *
     * @param mixed $placement the placement
     *
     * @return self
     */
    public function setPlacement($placement)
    {
        $this->placement = $placement;

        return $this;
    }

    /**
     * Gets the value of passes.
     *
     * @return mixed
     */
    public function getPasses()
    {
        return $this->passes;
    }

    /**
     * Sets the value of passes.
     *
     * @param mixed $passes the passes
     *
     * @return self
     */
    public function setPasses($passes)
    {
        $this->passes = $passes;

        return $this;
    }

    /**
     * Gets the value of centres.
     *
     * @return mixed
     */
    public function getCentres()
    {
        return $this->centres;
    }

    /**
     * Sets the value of centres.
     *
     * @param mixed $centres the centres
     *
     * @return self
     */
    public function setCentres($centres)
    {
        $this->centres = $centres;

        return $this;
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
     * Sets the value of technique.
     *
     * @param mixed $technique the technique
     *
     * @return self
     */
    public function setTechnique($technique)
    {
        $this->technique = $technique;

        return $this;
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
     * Sets the value of tete.
     *
     * @param mixed $tete the tete
     *
     * @return self
     */
    public function setTete($tete)
    {
        $this->tete = $tete;

        return $this;
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
     * Sets the value of finition.
     *
     * @param mixed $finition the finition
     *
     * @return self
     */
    public function setFinition($finition)
    {
        $this->finition = $finition;

        return $this;
    }

    /**
     * Gets the value of tirsDeLoin.
     *
     * @return mixed
     */
    public function getTirsDeLoin()
    {
        return $this->tirsDeLoin;
    }

    /**
     * Sets the value of tirsDeLoin.
     *
     * @param mixed $tirsDeLoin the tirs de loin
     *
     * @return self
     */
    public function setTirsDeLoin($tirsDeLoin)
    {
        $this->tirsDeLoin = $tirsDeLoin;

        return $this;
    }

    /**
     * Gets the value of coupFrancs.
     *
     * @return mixed
     */
    public function getCoupFrancs()
    {
        return $this->coupFrancs;
    }

    /**
     * Sets the value of coupFrancs.
     *
     * @param mixed $coupFrancs the coup francs
     *
     * @return self
     */
    public function setCoupFrancs($coupFrancs)
    {
        $this->coupFrancs = $coupFrancs;

        return $this;
    }

    /**
     * Gets the value of gkPrisesDeBalle.
     *
     * @return mixed
     */
    public function getGkPrisesDeBalle()
    {
        return $this->gkPrisesDeBalle;
    }

    /**
     * Sets the value of gkPrisesDeBalle.
     *
     * @param mixed $gkPrisesDeBalle the gk prises de balle
     *
     * @return self
     */
    public function setGkPrisesDeBalle($gkPrisesDeBalle)
    {
        $this->gkPrisesDeBalle = $gkPrisesDeBalle;

        return $this;
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
     * Sets the value of gkUnContreUn.
     *
     * @param mixed $gkUnContreUn the gk un contre un
     *
     * @return self
     */
    public function setGkUnContreUn($gkUnContreUn)
    {
        $this->gkUnContreUn = $gkUnContreUn;

        return $this;
    }

    /**
     * Gets the value of gkReflexes.
     *
     * @return mixed
     */
    public function getGkReflexes()
    {
        return $this->gkReflexes;
    }

    /**
     * Sets the value of gkReflexes.
     *
     * @param mixed $gkReflexes the gk reflexes
     *
     * @return self
     */
    public function setGkReflexes($gkReflexes)
    {
        $this->gkReflexes = $gkReflexes;

        return $this;
    }

    /**
     * Gets the value of gkHabileteDansLesAirs.
     *
     * @return mixed
     */
    public function getGkHabileteDansLesAirs()
    {
        return $this->gkHabileteDansLesAirs;
    }

    /**
     * Sets the value of gkHabileteDansLesAirs.
     *
     * @param mixed $gkHabileteDansLesAirs the gk habilete dans les airs
     *
     * @return self
     */
    public function setGkHabileteDansLesAirs($gkHabileteDansLesAirs)
    {
        $this->gkHabileteDansLesAirs = $gkHabileteDansLesAirs;

        return $this;
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
     * Sets the value of gkDetente.
     *
     * @param mixed $gkDetente the gk detente
     *
     * @return self
     */
    public function setGkDetente($gkDetente)
    {
        $this->gkDetente = $gkDetente;

        return $this;
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
     * Sets the value of gkCommunication.
     *
     * @param mixed $gkCommunication the gk communication
     *
     * @return self
     */
    public function setGkCommunication($gkCommunication)
    {
        $this->gkCommunication = $gkCommunication;

        return $this;
    }

    /**
     * Gets the value of gkDegagementsAuPied.
     *
     * @return mixed
     */
    public function getGkDegagementsAuPied()
    {
        return $this->gkDegagementsAuPied;
    }

    /**
     * Sets the value of gkDegagementsAuPied.
     *
     * @param mixed $gkDegagementsAuPied the gk degagements au pied
     *
     * @return self
     */
    public function setGkDegagementsAuPied($gkDegagementsAuPied)
    {
        $this->gkDegagementsAuPied = $gkDegagementsAuPied;

        return $this;
    }

    /**
     * Gets the value of gkRelancesALaMain.
     *
     * @return mixed
     */
    public function getGkRelancesALaMain()
    {
        return $this->gkRelancesALaMain;
    }

    /**
     * Sets the value of gkRelancesALaMain.
     *
     * @param mixed $gkRelancesALaMain the gk relances a la main
     *
     * @return self
     */
    public function setGkRelancesALaMain($gkRelancesALaMain)
    {
        $this->gkRelancesALaMain = $gkRelancesALaMain;

        return $this;
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

    /**
     * Sets the value of salaire.
     *
     * @param mixed $salaire the salaire
     *
     * @return self
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Gets the value of matchJoues.
     *
     * @return mixed
     */
    public function getMatchJoues()
    {
        return $this->matchJoues;
    }

    /**
     * Sets the value of matchJoues.
     *
     * @param mixed $matchJoues the match joues
     *
     * @return self
     */
    public function setMatchJoues($matchJoues)
    {
        $this->matchJoues = $matchJoues;

        return $this;
    }

    /**
     * Gets the value of butsMarques.
     *
     * @return mixed
     */
    public function getButsMarques()
    {
        return $this->butsMarques;
    }

    /**
     * Sets the value of butsMarques.
     *
     * @param mixed $butsMarques the buts marques
     *
     * @return self
     */
    public function setButsMarques($butsMarques)
    {
        $this->butsMarques = $butsMarques;

        return $this;
    }

    /**
     * Gets the value of passesDecisives.
     *
     * @return mixed
     */
    public function getPassesDecisives()
    {
        return $this->passesDecisives;
    }

    /**
     * Sets the value of passesDecisives.
     *
     * @param mixed $passesDecisives the passes decisives
     *
     * @return self
     */
    public function setPassesDecisives($passesDecisives)
    {
        $this->passesDecisives = $passesDecisives;

        return $this;
    }

    /**
     * Gets the value of rendement.
     *
     * @return mixed
     */
    public function getRendement()
    {
        return $this->rendement;
    }

    /**
     * Sets the value of rendement.
     *
     * @param mixed $rendement the rendement
     *
     * @return self
     */
    public function setRendement($rendement)
    {
        $this->rendement = $rendement;

        return $this;
    }

    /**
     * Gets the value of note.
     *
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the value of note.
     *
     * @param mixed $note the note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets the value of cartons.
     *
     * @return mixed
     */
    public function getCartons()
    {
        return $this->cartons;
    }

    /**
     * Sets the value of cartons.
     *
     * @param mixed $cartons the cartons
     *
     * @return self
     */
    public function setCartons($cartons)
    {
        $this->cartons = $cartons;

        return $this;
    }
}