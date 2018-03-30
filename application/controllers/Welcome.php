<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
				


	public function __construct(){
		parent::__construct();
		$this->load->model('dao/joueur_adapter');
		$this->load->model('dao/infrastructure_adapter');
		$this->load->model('dao/curl_model');
		$this->load->model('metier/joueur_transfer_model');
		$this->load->helper('simple_html_dom_helper');
		

	}

	public function index()
	{	
		$j = new Joueur_adapter();

		$data['joueurs'] = $j->getAllJoueursFromJoueur();
	    $data['bestPlace'] = $this->bestPlace();
	   	$data['joueurschamps'] = $j->getAllJoueursFromJoueurWhereNotGK();
	    $data['gardiens'] = $j->getAllJoueursFromJoueurWhereGK();

		$this->generatePage($data);

	}

	public function debug($data){

		echo "<pre>";
		print_r($data);
		echo "</pre>";

	}

	public function generatePage($data){
		$this->load->view('tags/header');
		$this->load->view('tags/sidebar');
		$this->load->view('welcome_message', $data);
		$this->load->view('tags/footer');
	}

	public function synchroniser(){		
		
		$c = new Curl_model();	
		$c->login(URL_CONNEXION,"user=".LOGIN."&password=".PASSWORD."&remember=0");

		$page = $c->grab_page(PLAYERS);

		$t = explode(' ',$page);
	    $i=0;
	    
	    /*--------------------------*\
	    |	get the start of variable |
	    \*--------------------------*/
	    $found = false;
	    while ($found == false) {
	        if ($t[$i] == 'players_ar') {
	            $found = true;
	            $startLine = $i+2;
	        }else{
	            $i++;
	        }
	    }

	    /*--------------------------*\
	    |	get the end  of variable |
	    \*--------------------------*/	    
	    $found = false;	    
	    while ($found == false){
	        if (preg_match('.}];.', $t[$i])) {
	            $found = true;
	            $endLine = $i;
	        }else{
	            $i++;
	        }
	    }
	    
	    /*-----------------------------*\
	    |	fetch the result in an array |
	    \*-----------------------------*/
	    $players = null;
	    $i=0;
	    while ( $startLine <= $endLine ) {
	        $players[$i] = $t[$startLine];
	        $startLine++;
	        $i++;
	    }

	    /*------------------------------*\
	    |	concatenate array into string |
	    \*------------------------------*/
	    $stringPlayers=null;
	    $i=0;
	    foreach ($players as $row) {
	        if ($i == sizeof($players)-1) {            
	            $stringPlayers = $stringPlayers." ".substr($row, 0, strlen($row)-10);        
	        }else{
	            $stringPlayers = $stringPlayers." ".$row;    
	        }
	        
	        $i++;
	    }

	    /*-------------------*\
	    |	INSERT OR UPDATE  |
	    \*-------------------*/

	    $j = new Joueur_adapter();
	    $j->cleanJoueur();
	    $idInDb = $j->getAllIdTrophy();
	    $dayOfWeek = date('N', now());
	    $today = date('Y-m-d', now());	    
	    $lastSync = $j->getLastSyncDate();

	    foreach (json_decode($stringPlayers, true) as $row) {
	    	
	    	if(!in_array($row['id'], $idInDb)){
	    		//insert into player and entrainement
	    		$j->insertJoueurIntoJoueur($row);	    		

	    	}

	    	if (($dayOfWeek == 2)&& ($today != $lastSync)) {
	    		$j->insertJoueurIntoEntrainement($row);
	    	}
	    }


	    $data['joueurschamps'] = $j->getAllJoueursFromJoueurWhereNotGK();
	    $data['gardiens'] = $j->getAllJoueursFromJoueurWhereGK();


	    $data['bestPlace'] = $this->bestPlace();

		$this->generatePage($data);	

	}

	public function bestPlace(){
		$j = new Joueur_adapter();
		$joueurs = $j->getAllJoueursFromJoueur();

		$percentage = array();
		if($joueurs != null){
			foreach ($joueurs as $joueur) {			
					$maxDL = 220;
					$maxDC = 160;
					$maxMD = 320;
					$maxMC = 300;
					$maxMO = 340;
					$maxAI = 260;
					$maxA = 260;
					$maxGK = 180;

					$air = $joueur->getGkHabileteDansLesAirs();
					$activite = $joueur->getActivite();
					$centre = $joueur->getCentres();
					$detente = $joueur->getGkDetente();
					$endurance = $joueur->getEndurance();
					$finition = $joueur->getFinition();
					$marquage = $joueur->getMarquage();
					$passe = $joueur->getPasses();
					$pdb = $joueur->getGkPrisesDeBalle();
					$placement = $joueur->getPlacement();
					$puissance = $joueur->getPuissance();
					$reflexe = $joueur->getGkReflexes();
					$tacle = $joueur->getTacles();
					$technique = $joueur->getTechnique();
					$tete = $joueur->getTete();
					$tdl = $joueur->getTirsDeLoin();		
					$unvun = $joueur->getGkUnContreUn();
					$vitesse = $joueur->getVitesse();

					$dl = ((($marquage*2+$tacle*2+$vitesse*2)	+	($placement+$puissance+$tete+$centre+$technique)) /$maxDL)*100;
					$dc = ( (($marquage*2+$tacle*2)+($placement+$puissance+$tete+$vitesse)) /$maxDC)*100;
					$md = ( (($activite*2+$passe*2+$tacle*2+$placement*2+$marquage*2+$puissance*2)+($endurance+$vitesse+$centre+$technique) )/$maxMD)*100;
					$mc = ( (($passe*2+$activite*2)+($technique+$placement+$endurance+$puissance+$marquage+$tacle+$finition+$tdl+$tete+$centre+$vitesse) )/$maxMC)*100;
					$mo = ((($activite*2+$passe*2+$technique*2+$tete*2+$finition*2+$tdl*2)+($puissance+$vitesse+$endurance+$centre+$placement))/$maxMO)*100;
					$ai = ( (($vitesse*2+$centre*2)+($technique+$activite+$placement+$passe+$finition+$tdl+$tete+$puissance+$endurance) )/$maxAI)*100;
					$a = ( (($finition*2+$tdl*2+$tete*2)+($technique+$puissance+$passe+$placement+$activite+$endurance+$vitesse) )/$maxA)*100;
					$gk = ((($pdb*2+$reflexe*2)+($vitesse+$puissance+$detente+$air+$unvun))/$maxGK)*100;

					$percentage[$joueur->getNom()][$joueur->getPoste()] = array(
						"dl"=>number_format($dl,3),
						"dc"=>number_format($dc,3),
						"md"=>number_format($md,3),
						"mc"=>number_format($mc,3),
						"mo"=>number_format($mo,3),
						"ai"=>number_format($ai,3),
						"a"=>number_format($a,3),
						"gk"=>number_format($gk,3)
					);
			}

		}

		return $percentage;

	}

	public function transfer($data=null){
		$j = new Joueur_adapter();
		$data['joueurs'] = $j->getAllJoueursFromJoueur();

		$this->load->view('tags/header');
		$this->load->view('tags/sidebar');
		$this->load->view('tags/transfer',$data);
		$this->load->view('tags/footer');

	}

	public function transferjson(){

		//position
		$gk = $this->input->post('gk');
		$def = $this->input->post('de');
		$mdef = $this->input->post('dm');
		$mf = $this->input->post('mf');
		$om = $this->input->post('om');		
		$fw = $this->input->post('fw');

		//etranger
		$etranger= $this->input->post('for');

		//cote
		$le = $this->input->post('le');
		$ce = $this->input->post('ce');
		$ri = $this->input->post('ri');	

		//age
		$min = $this->input->post('minage');
		$max = $this->input->post('maxage');

		//recommandation
		$rec = $this->input->post('rec');

		$fields = array('gk'=>$gk, 'def'=>$def, 'mdef'=>$mdef, 'mf'=>$mf, 'om'=>$om, 'fw'=>$fw, 'le'=>$le, 'ce'=>$ce, 'ri'=>$ri, 'etranger'=>$etranger, 'min'=>$min, 'max'=>$max, 'rec'=>$rec);
		$query="search=";

		foreach ($fields as $key => $field) {
			if (isset($field) && $field <> "") {
				if($key == "max"){
					$query .= "amax/";
				}elseif ($key =="rec") {
					$query .= "rmin/";
				}elseif ($key == "min" && $field > 18) {
					$query .= "amin/";
				}

				$query .= $field. "/";
			}
		}

		$query .= "&club_id=3105292";
		$c = new Curl_model();	
		$c->login(URL_CONNEXION,"user=".LOGIN."&password=".PASSWORD."&remember=0");

		$json = $c->post_data(TRANSFER,$query);
		$json = substr($json, 8, strlen($json)-26);

		$liste = array();

		foreach (json_decode($json, true) as $row) {					
			$page = $c->post_data(TOOLTIP,"player_id=".$row["id"]);			

			$page = json_decode($page);
			$wage = $page->player->wage;			
			$liste[$row['id']] = new Joueur_transfer_model($wage, $row['bump'], $row['id'], $row['club_name'], $row['club_id'], $row['shortlisted'], $row['club_link'], $row['name'], $row['name_js'], $row['player_link'], $row['routine'], $row['nat'], $row['age'], $row['fp'], $row['fp_format'], $row['asi'], $row['asi_string'], $row['str'], $row['sta'], $row['pac'], $row['mar'], $row['tac'], $row['wor'], $row['cro'], $row['pos'], $row['pas'], $row['tec'], $row['hea'], $row['fin'], $row['lon'], $row['set'], $row['han'], $row['one'], $row['ari'], $row['ref'], $row['jum'], $row['com'], $row['kic'], $row['thr'], $row['rec'], $row['time'], $row['time_string'], $row['txt'], $row['bid'], $row['next_bid'], $row['bid_string'], $row['bidder_id'], $row['user_is_buyer'], $row['bidder_name'], $row['bidder_link'], $row['pimp'], $row['flag'], $row['country'], $row['scout_button'], $row['pro']);
		}		
		
		$data['liste'] = $liste;
		$this->transfer($data);
	}
	
	public function entrainement(){
		$j = new Joueur_adapter();
		$joueurschamps = $j->getAllJoueursFromJoueurWhereNotGK();
		$gardiens = $j->getAllJoueursFromJoueurWhereGK();
		$liste = null;
		
		
		foreach ($joueurschamps as $key => $value) {
			$liste[$key] = $j->getTwoLastEntrainementByIdTrophyJoueur($key);			
		}		

		$data['joueurschamps'] = $liste;		
		$liste = null;	

		foreach ($gardiens as $key => $value) {
			$liste[$key] = $j->getTwoLastEntrainementByIdTrophyJoueur($key);

		}
		$data['gardiens'] = $liste;		
		
		$this->load->view('tags/header');
		$this->load->view('tags/sidebar');
		$this->load->view('tags/entrainement',$data);
		$this->load->view('tags/footer');

	}
	
	public function equipe(){
		$c = new Curl_model();
		$c->login(URL_CONNEXION,"user=".LOGIN."&password=".PASSWORD."&remember=0");
		
		$ja = new Joueur_adapter();
		$ids = $ja->getAllIdTrophy();		
		
		$gk = array();
		$dl = array();
		$dc = array();
		$dr = array();
		$dml = array();
		$dmc = array();
		$dmr = array();
		$ml = array();
		$mc = array();
		$mr = array();
		$oml = array();
		$omc = array();
		$omr = array();
		$fc = array();


		foreach ($ids as $id) {
			$joueur = json_decode($c->post_data(TOOLTIP, "player_id=".$id));
			

			$postes = $joueur->player->favposition;			
			$name = $joueur->player->name;
			$positions = explode(",", $postes);
			$jm = new Joueur_model();
			$ja = new Joueur_adapter();


			$skills = $ja->getSkillsByIdJoueur($id);

			if ($postes == "gk") {

				$pdb = $skills["gk_pdb"];
				$reflexe = $skills["gk_ref"];
				$vitesse = $skills["vitesse"];
				$puissance = $skills["puissance"];
				$detente = $skills["gk_det"];
				$air = $skills["gk_air"];
				$unvun = $skills["gk_uvu"];

				$calculGk = number_format($jm->calculGk($pdb,$reflexe,$vitesse,$puissance,$detente,$air,$unvun), 3);
			}else{

				//$puissance  = $joueur->player->skills[0]->value;
				$puissance = $skills["puissance"];
				$passe  = $skills["passes"];
				$endurance  = $skills["endurance"];
				$centre  = $skills["centres"];
				$vitesse  = $skills["vitesse"];
				$technique  = $skills["technique"];
				$marquage  = $skills["marquage"];
				$tete  = $skills["tete"];
				$tacle  = $skills["tacles"];
				$finition  = $skills["finition"];
				$activite  = $skills["activite"];
				$tdl = $skills["tirs_de_loin"];
				$placement  = $skills["placement"];
				$cpa  = $skills["coup_franc"];

				/*$xpath = new DOMXPath(@DOMDocument::loadHTML($placement));
				$alt = $xpath->evaluate("string(//img/@alt)");
				$placement = $alt;*/

				$calculDl = number_format($jm->calculDl($marquage, $tacle, $vitesse, $placement, $puissance, $tete, $centre, $technique), 3);
				$calculDc = number_format($jm->calculDc($marquage, $tacle, $placement, $puissance, $tete, $vitesse), 3);
				$calculMd = number_format($jm->calculMd($activite, $passe, $tacle, $placement, $marquage, $puissance, $endurance, $vitesse, $centre, $technique), 3);
				$calculMc = number_format($jm->calculMc($passe, $activite, $technique, $placement, $endurance, $puissance, $marquage, $tacle, $finition, $tdl, $tete, $centre, $vitesse), 3);
				$calculMo = number_format($jm->calculMo($activite, $passe, $technique, $tete, $finition, $tdl, $puissance, $vitesse, $endurance, $centre, $placement), 3);
				$calculAi = number_format($jm->calculAi($vitesse, $centre, $technique, $activite, $placement, $passe, $finition, $tdl, $tete, $puissance, $endurance), 3);
				$calculA = number_format($jm->calculA($finition, $tdl, $tete, $technique, $puissance, $passe, $placement, $activite, $endurance, $vitesse), 3);


			} // end else		

			foreach ($positions as $position) {
				if ($position == "gk") {
					array_push($gk, array($name=>$calculGk));
				}elseif ($position == "dl") {
					array_push($dl, array($name=>$calculDl));
				}elseif ($position == "dc") {
					array_push($dc, array($name=>$calculDc));
				}elseif ($position == "dr") {
					array_push($dr, array($name=>$calculDl));
				}elseif ($position == "dml") {
					array_push($dml, array($name=>$calculMd));
				}elseif ($position == "dmc") {
					array_push($dmc, array($name=>$calculMd));
				}elseif ($position == "dmr") {
					array_push($dmr, array($name=>$calculMd));
				}elseif ($position == "ml") {
					array_push($ml, array($name=>$calculMc));
				}elseif ($position == "mc") {
					array_push($mc, array($name=>$calculMc));
				}elseif ($position == "mr") {
					array_push($mr, array($name=>$calculMc));
				}elseif ($position == "oml") {
					array_push($oml, array($name=>$calculAi));
				}elseif ($position == "omc") {
					array_push($omc, array($name=>$calculMo));
				}elseif ($position == "omr") {
					array_push($omr, array($name=>$calculAi));
				}elseif ($position == "fc") {
					array_push($fc, array($name=>$calculA));
				}else{
					$this->debug($position);
				}
			}// end foreach			
		}// end foreach	
		


		$postes = array(
			"gardiens"=>$gk,
			"defenseurs"=> array(
				"gauche"=>$dl,
				"centre"=>$dc,
				"droite"=>$dr
				),
			"milieuxdef"=>array(
				"gauche"=>$dml,
				"centre"=>$dmc,
				"droite"=>$dmr
				),
			"milieux" => array(
				"gauche"=>$ml,
				"centre"=>$mc,
				"droite"=>$mr
				),
			"milieuxoff" => array(
				"gauche"=>$oml,
				"centre"=>$omc,
				"droite"=>$omr
				),
			"attaquants"=> $fc
			);


		$data['postes'] = $postes;
		

		$this->load->view('tags/header');
		$this->load->view('tags/sidebar');
		$this->load->view('tags/equipe',$data);
		$this->load->view('tags/footer');
	}

	public function stadium(){
		$c = new Curl_model();	
		$c->login(URL_CONNEXION,"user=".LOGIN."&password=".PASSWORD."&remember=0");

		$page = $c->grab_page('http://trophymanager.com/statistics/league/be/3/9/clubs/attendance/');	
		$html = str_get_html($page);

		// home attendance
		$data['attendance'] = $html->find('td', 57);
		$ia = new Infrastructure_adapter();		
		$infraAtts = $ia->getAllInfraPerAttendance();
		$aff = $data['attendance']->plaintext;
		$aff = str_replace(',', '', $aff);


		$infras = array(
			'resto' => array(
				'1' => $aff * $infraAtts[8]->getEffectUn() -$infraAtts[8]->getMaintenanceUn(),
				'2' => $aff * $infraAtts[8]->getEffectDeux() -$infraAtts[8]->getMaintenanceDeux(),
				'3' => $aff * $infraAtts[8]->getEffectTrois() -$infraAtts[8]->getMaintenanceTrois(),
				'4' => $aff * $infraAtts[8]->getEffectQuatre() -$infraAtts[8]->getMaintenanceQuatre(),
				'5' => $aff * $infraAtts[8]->getEffectCinq() -$infraAtts[8]->getMaintenanceCinq(),
				'6' => $aff * $infraAtts[8]->getEffectSix() -$infraAtts[8]->getMaintenanceSix(),
				'7' => $aff * $infraAtts[8]->getEffectSept() -$infraAtts[8]->getMaintenanceSept(),
				'8' => $aff * $infraAtts[8]->getEffectHuit() -$infraAtts[8]->getMaintenanceHuit(),
				'9' => $aff * $infraAtts[8]->getEffectNeuf() -$infraAtts[8]->getMaintenanceNeuf(),
				'10' => $aff * $infraAtts[8]->getEffectDix() -$infraAtts[8]->getMaintenanceDix()
			),

			'saucisses' => array(
				'1' => $aff * $infraAtts[9]->getEffectUn() -$infraAtts[9]->getMaintenanceUn(),
				'2' => $aff * $infraAtts[9]->getEffectDeux() -$infraAtts[9]->getMaintenanceDeux(),
				'3' => $aff * $infraAtts[9]->getEffectTrois() -$infraAtts[9]->getMaintenanceTrois(),
				'4' => $aff * $infraAtts[9]->getEffectQuatre() -$infraAtts[9]->getMaintenanceQuatre(),
				'5' => $aff * $infraAtts[9]->getEffectCinq() -$infraAtts[9]->getMaintenanceCinq(),
				'6' => $aff * $infraAtts[9]->getEffectSix() -$infraAtts[9]->getMaintenanceSix(),
				'7' => $aff * $infraAtts[9]->getEffectSept() -$infraAtts[9]->getMaintenanceSept(),
				'8' => $aff * $infraAtts[9]->getEffectHuit() -$infraAtts[9]->getMaintenanceHuit(),
				'9' => $aff * $infraAtts[9]->getEffectNeuf() -$infraAtts[9]->getMaintenanceNeuf(),
				'10' => $aff * $infraAtts[9]->getEffectDix() -$infraAtts[9]->getMaintenanceDix()				
				),
			'fastfood' => array(
				'1' => $aff * $infraAtts[2]->getEffectUn() -$infraAtts[2]->getMaintenanceUn(),
				'2' => $aff * $infraAtts[2]->getEffectDeux() -$infraAtts[2]->getMaintenanceDeux(),
				'3' => $aff * $infraAtts[2]->getEffectTrois() -$infraAtts[2]->getMaintenanceTrois(),
				'4' => $aff * $infraAtts[2]->getEffectQuatre() -$infraAtts[2]->getMaintenanceQuatre(),
				'5' => $aff * $infraAtts[2]->getEffectCinq() -$infraAtts[2]->getMaintenanceCinq(),
				'6' => $aff * $infraAtts[2]->getEffectSix() -$infraAtts[2]->getMaintenanceSix(),
				'7' => $aff * $infraAtts[2]->getEffectSept() -$infraAtts[2]->getMaintenanceSept(),
				'8' => $aff * $infraAtts[2]->getEffectHuit() -$infraAtts[2]->getMaintenanceHuit(),
				'9' => $aff * $infraAtts[2]->getEffectNeuf() -$infraAtts[2]->getMaintenanceNeuf(),
				'10' => $aff * $infraAtts[2]->getEffectDix() -$infraAtts[2]->getMaintenanceDix()				
				),
			'derives' => array(
				'1' => $aff * $infraAtts[4]->getEffectUn() -$infraAtts[4]->getMaintenanceUn(),
				'2' => $aff * $infraAtts[4]->getEffectDeux() -$infraAtts[4]->getMaintenanceDeux(),
				'3' => $aff * $infraAtts[4]->getEffectTrois() -$infraAtts[4]->getMaintenanceTrois(),
				'4' => $aff * $infraAtts[4]->getEffectQuatre() -$infraAtts[4]->getMaintenanceQuatre(),
				'5' => $aff * $infraAtts[4]->getEffectCinq() -$infraAtts[4]->getMaintenanceCinq(),
				'6' => $aff * $infraAtts[4]->getEffectSix() -$infraAtts[4]->getMaintenanceSix(),
				'7' => $aff * $infraAtts[4]->getEffectSept() -$infraAtts[4]->getMaintenanceSept(),
				'8' => $aff * $infraAtts[4]->getEffectHuit() -$infraAtts[4]->getMaintenanceHuit(),
				'9' => $aff * $infraAtts[4]->getEffectNeuf() -$infraAtts[4]->getMaintenanceNeuf(),
				'10' => $aff * $infraAtts[4]->getEffectDix() -$infraAtts[4]->getMaintenanceDix()
				)

		);		

		$data['infraAtts'] = $infras;

		$this->load->view('tags/header');
		$this->load->view('tags/sidebar');
		$this->load->view('tags/infrastructure',$data);
		$this->load->view('tags/footer');

	}



	
}
