<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infrastructure_adapter extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('metier/infrastructure_model');
    }


    public function getAllInfraPerAttendance(){
        $query = $this->db->get_where('trophy_stadium',array('valeur'=>'par spectateur'));

        $liste = array();
        if($query->num_rows() >0){
        	foreach ($query->result() as $row) {
        		$im = new Infrastructure_model();
        		$liste[$row->id_trophy_stadium] = $im->hydrate($row);

        	}
        }

        return $liste;

    }

}
 
?>