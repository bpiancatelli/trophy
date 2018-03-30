<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Joueur_adapter extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('metier/joueur_model');
		$this->load->model('metier/entrainement_model');
	}

	public function getLastSyncDate(){
		$this->db->select('date_synchro');
		$this->db->from('trophy_entrainement');
		$this->db->order_by('date_synchro','desc');
		$this->db->limit(1);
		$query = $this->db->get();

		$date = null;
		if ($query->num_rows() == 1) {
			$row = $query->row_array();
			$date = $row['date_synchro'];
		}
		return $date;
	}


	public function getDataJoueurByIdTrophyJoueur($idTrophyJoueur){
		$this->db->select('nom,poste, experience, age');
		$this->db->from('trophy_joueur');
		$this->db->where('id_trophy_joueur',$idTrophyJoueur);
		$query = $this->db->get();

		$data = null;
		if ($query->num_rows() == 1) {
			$row = $query->row_array();
			$data[$row['nom']] = array(
					'poste'=>$row['poste'],
					'experience'=>$row['experience'],
					'age'=>$row['age'],
				);
		}

		return $data;
	}

	public function cleanJoueur(){
		try {
			$this->db->truncate('trophy_joueur'); 
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function getAllIdTrophy(){
		$this->db->select('id_trophy_joueur');
		$this->db->from('trophy_joueur');
		$this->db->group_by('id_trophy_joueur');
		$query = $this->db->get();

		$liste = array();
		
		if ($query->num_rows() > 0) {
			$i=0;
			foreach ($query->result_array() as $row) {
				$liste[$i] = $row['id_trophy_joueur'];
				$i++;
			}
			
		}

		
		return $liste;
	}

	public function getAllJoueursFromJoueur(){
		$this->db->select('*');
		$this->db->from('trophy_joueur');
		//$this->db->where('poste !=','GK');
		$this->db->order_by('poste');
		$query = $this->db->get();
		$liste = null;
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$liste[$row['id_trophy_joueur']] = new Joueur_model(
					$row['id_joueur'],
					$row['id_trophy_joueur'],
					$row['id_club'],
					$row['numero_maillot'],
					$row['ban'],
					$row['ban_points'],
					$row['blessure'],
					$row['nom'],
					$row['experience'],
					$row['retraite'],
					$row['age'],
					$row['poste'],
					$row['asi'],
					$row['pays'],
					$row['puissance'],
					$row['endurance'],
					$row['vitesse'],
					$row['marquage'],
					$row['tacles'],
					$row['activite'],
					$row['placement'],
					$row['passes'],
					$row['centres'],
					$row['technique'],
					$row['tete'],
					$row['finition'],
					$row['tirs_de_loin'],
					$row['coup_francs'],
					$row['gk_prises_de_balle'],
					$row['gk_un_contre_un'],
					$row['gk_reflexes'],
					$row['gk_habilete_dans_les_airs'],
					$row['gk_detente'],
					$row['gk_communication'],
					$row['gk_degagements_au_pied'],
					$row['gk_relances_a_la_main'],
					$row['salaire'],
					$row['match_joues'],
					$row['buts_marques'],
					$row['passes_decisives'],
					$row['rendement'],
					$row['note'],
					$row['cartons']
				);

			}
		}

		return $liste;
	}

	public function getTwoLastEntrainementByIdTrophyJoueur($idTrophyJoueur){
		$this->db->select('*');
		$this->db->from('trophy_entrainement');
		$this->db->where('id_trophy_joueur',$idTrophyJoueur);

		$this->db->order_by('date_synchro','desc');
		$this->db->limit(2);
		$query = $this->db->get();

		$liste = null;
	

		if($query->num_rows() > 0){
			$i=0;
			$gk = $query->row_array();
			if($gk['gk_degagements_au_pied'] == 0){
				//joueurs de champs
				$skills = array('asi','puissance','endurance','vitesse','marquage','tacles','activite','placement','passes','centres','technique','tete','finition','tirs_de_loin','coup_francs','salaire');
				foreach ($skills as $line) {
					$liste[$line] = array();
				}				
				foreach ($query->result_array() as $row) {	
					foreach ($skills as $skill) {						
						array($skill=> array_push($liste[$skill], $row[$skill]));		
					}	
				}

			}else{
				//gardiens
				$skillsGK = array('asi','puissance','endurance','vitesse','gk_prises_de_balle','gk_un_contre_un','gk_reflexes','gk_habilete_dans_les_airs','gk_detente','gk_communication','gk_degagements_au_pied','gk_relances_a_la_main');
				foreach ($skillsGK as $line) {
					$liste[$line] = array();
				}
				foreach ($query->result_array() as $row) {	
					foreach ($skillsGK as $skillGK) {						
						array($skillGK=> array_push($liste[$skillGK], $row[$skillGK]));		
					}	
				}
			}			
		}else{
			// player recently bought
			$skills = array('asi','puissance','endurance','vitesse','marquage','tacles','activite','placement','passes','centres','technique','tete','finition','tirs_de_loin','coup_francs','salaire');
			foreach ($skills as $line) {
				$liste[$line] = array();
			}	
			foreach ($skills as $skill) {						
				array($skill=> array_push($liste[$skill], 0));		
			}	

		}

		return $liste;
	}

	public function getAllJoueursFromJoueurWhereNotGK(){
		$this->db->select('*');
		$this->db->from('trophy_joueur');
		$this->db->where('poste !=','GK');
		$this->db->order_by('poste');
		$query = $this->db->get();
		$liste = null;
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$liste[$row['id_trophy_joueur']] = array(
					'nom' => $row['nom'],
					'poste' => $row['poste'],
					'experience' => $row['experience'],
					'age' => $row['age'],					
					'asi' => $row['asi'],
					'puissance' => $row['puissance'],
					'endurance' => $row['endurance'],
					'vitesse' => $row['vitesse'],
					'marquage' => $row['marquage'],
					'tacles' => $row['tacles'],
					'activite' => $row['activite'],
					'placement' => $row['placement'],
					'passes' => $row['passes'],
					'centres' => $row['centres'],
					'technique' => $row['technique'],
					'tete' => $row['tete'],
					'finition' => $row['finition'],
					'tirs_de_loin' => $row['tirs_de_loin'],
					'coup_franc' => $row['coup_francs']

				);

			}
		}

		return $liste;
	}

	public function getSkillsByIdJoueur($id){
		$this->db->select('*');
		$this->db->from('trophy_joueur');
		$this->db->where('id_trophy_joueur',$id);
		$query = $this->db->get();

		$liste = null;
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$liste = array(
					'nom' => $row['nom'],
					'poste' => $row['poste'],
					'experience' => $row['experience'],
					'age' => $row['age'],					
					'asi' => $row['asi'],
					'puissance' => $row['puissance'],
					'endurance' => $row['endurance'],
					'vitesse' => $row['vitesse'],
					'marquage' => $row['marquage'],
					'tacles' => $row['tacles'],
					'activite' => $row['activite'],
					'placement' => $row['placement'],
					'passes' => $row['passes'],
					'centres' => $row['centres'],
					'technique' => $row['technique'],
					'tete' => $row['tete'],
					'finition' => $row['finition'],
					'tirs_de_loin' => $row['tirs_de_loin'],
					'coup_franc' => $row['coup_francs'],
					'gk_pdb'=> $row['gk_prises_de_balle'],
					'gk_uvu'=>$row['gk_un_contre_un'],
					'gk_ref'=>$row['gk_reflexes'],
					'gk_air'=>$row['gk_habilete_dans_les_airs'],
					'gk_det'=>$row['gk_detente'],
					'gk_comm'=>$row['gk_communication'],
					'gk_pied'=>$row['gk_degagements_au_pied'],
					'gk_relances'=>$row['gk_relances_a_la_main']
				);

			}
		}

		return $liste;
	}

	public function getAllJoueursFromJoueurWhereGK(){
		$this->db->select('*');
		$this->db->from('trophy_joueur');
		$this->db->where('poste','GK');
		$this->db->order_by('poste');
		$query = $this->db->get();
		$liste = null;
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$liste[$row['id_trophy_joueur']] = array(
					'nom' => $row['nom'],
					'poste' => $row['poste'],
					'experience' => $row['experience'],
					'age' => $row['age'],
					'asi' => $row['asi'],
					'puissance' => $row['puissance'],
					'endurance' => $row['endurance'],
					'vitesse' => $row['vitesse'],
					'pdb' => $row['gk_prises_de_balle'],
					'1v1' => $row['gk_un_contre_un'],
					'reflexes' => $row['gk_reflexes'],
					'air' => $row['gk_habilete_dans_les_airs'],
					'detente' => $row['gk_detente'],
					'communication' => $row['gk_communication'],
					'pied' => $row['gk_degagements_au_pied'],
					'main' => $row['gk_relances_a_la_main'],
				);

			}
		}

		return $liste;
	}


	public function insertJoueurIntoJoueur($joueur){
		$inj = false;
		if ($joueur['inj'] != null) {
			$inj = true;
		}
		try {
			$this->db->insert('trophy_joueur',array(
					'id_trophy_joueur'=>$joueur['id'],
					'id_club'=>$joueur['club'],
					'numero_maillot'=>$joueur['no'],
					'ban'=>$joueur['ban'],
					'ban_points'=>$joueur['ban_points'],
					'blessure'=>$inj,
					'nom'=>$joueur['name'],
					'experience'=>$joueur['routine'],
					'retraite'=>$joueur['retire'],
					'age'=>$joueur['age'],
					'poste'=>$joueur['fp'],
					'asi'=>$joueur['asi'],
					'pays'=>$joueur['country'],
					'puissance'=>$joueur['str'],
					'endurance'=>$joueur['sta'],
					'vitesse'=>$joueur['pac'],
					'marquage'=>$joueur['mar'],
					'tacles'=>$joueur['tac'],
					'activite'=>$joueur['wor'],
					'placement'=>$joueur['pos'],
					'passes'=>$joueur['pas'],
					'centres'=>$joueur['cro'],
					'technique'=>$joueur['tec'],
					'tete'=>$joueur['hea'],
					'finition'=>$joueur['fin'],
					'tirs_de_loin'=>$joueur['lon'],
					'coup_francs'=>$joueur['set'],
					'gk_prises_de_balle'=>$joueur['han'],
					'gk_un_contre_un'=>$joueur['one'],
					'gk_reflexes'=>$joueur['ref'],
					'gk_habilete_dans_les_airs'=>$joueur['ari'],
					'gk_detente'=>$joueur['jum'],
					'gk_communication'=>$joueur['com'],
					'gk_degagements_au_pied'=>$joueur['kic'],
					'gk_relances_a_la_main'=>$joueur['thr'],
					'salaire'=>$joueur['wage'],
					'match_joues'=>$joueur['gp'],
					'buts_marques'=>$joueur['goals'],
					'passes_decisives'=>$joueur['assists'],
					'rendement'=>$joueur['productivity'],
					'note'=>$joueur['rat'],
					'cartons'=>$joueur['cards']
				)
			);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function insertJoueurIntoEntrainement($joueur){

		$date = date('Y-m-d',now());

		try {
			$this->db->insert('trophy_entrainement',array(
					'id_trophy_joueur'=>$joueur['id'],					
					'asi'=>$joueur['asi'],
					'date_synchro'=>$date,
					'puissance'=>$joueur['str'],
					'endurance'=>$joueur['sta'],
					'vitesse'=>$joueur['pac'],
					'marquage'=>$joueur['mar'],
					'tacles'=>$joueur['tac'],
					'activite'=>$joueur['wor'],
					'placement'=>$joueur['pos'],
					'passes'=>$joueur['pas'],
					'centres'=>$joueur['cro'],
					'technique'=>$joueur['tec'],
					'tete'=>$joueur['hea'],
					'finition'=>$joueur['fin'],
					'tirs_de_loin'=>$joueur['lon'],
					'coup_francs'=>$joueur['set'],
					'gk_prises_de_balle'=>$joueur['han'],
					'gk_un_contre_un'=>$joueur['one'],
					'gk_reflexes'=>$joueur['ref'],
					'gk_habilete_dans_les_airs'=>$joueur['ari'],
					'gk_detente'=>$joueur['jum'],
					'gk_communication'=>$joueur['com'],
					'gk_degagements_au_pied'=>$joueur['kic'],
					'gk_relances_a_la_main'=>$joueur['thr'],
					'salaire'=>$joueur['wage']
				)
			);
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}

	public function updateJoueurIntoJoueur($joueur){
		$data = array(                
				'id_club'=>$joueur['club'],
				'numero_maillot'=>$joueur['no'],
				'ban'=>$joueur['ban'],
				'ban_points'=>$joueur['ban_points'],
				'blessure'=>$joueur['inj'],
				'nom'=>$joueur['name'],
				'experience'=>$joueur['routine'],
				'retraite'=>$joueur['retire'],
				'age'=>$joueur['age'],
				'poste'=>$joueur['fp'],
				'asi'=>$joueur['asi'],
				'pays'=>$joueur['country'],
				'puissance'=>$joueur['str'],
				'endurance'=>$joueur['sta'],
				'vitesse'=>$joueur['pac'],
				'marquage'=>$joueur['mar'],
				'tacles'=>$joueur['tac'],
				'activite'=>$joueur['wor'],
				'placement'=>$joueur['pos'],
				'passes'=>$joueur['pas'],
				'centres'=>$joueur['cro'],
				'technique'=>$joueur['tec'],
				'tete'=>$joueur['hea'],
				'finition'=>$joueur['fin'],
				'tirs_de_loin'=>$joueur['lon'],
				'coup_francs'=>$joueur['set'],
				'gk_prises_de_balle'=>$joueur['han'],
				'gk_un_contre_un'=>$joueur['one'],
				'gk_reflexes'=>$joueur['ref'],
				'gk_habilete_dans_les_airs'=>$joueur['ari'],
				'gk_detente'=>$joueur['jum'],
				'gk_communication'=>$joueur['com'],
				'gk_degagements_au_pied'=>$joueur['kic'],
				'gk_relances_a_la_main'=>$joueur['thr'],
				'salaire'=>$joueur['wage'],
				'match_joues'=>$joueur['gp'],
				'buts_marques'=>$joueur['goals'],
				'passes_decisives'=>$joueur['assists'],
				'rendement'=>$joueur['productivity'],
				'note'=>$joueur['rat'],
				'cartons'=>$joueur['cards']
            );

		$this->db->where('id_trophy_joueur', $joueur['id']);
		$this->db->update('trophy_joueur', $data); 

	}
	

}