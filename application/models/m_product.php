<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    function data($field,$number,$offset){
		return $query = $this->db->get($field,$number,$offset)->result();		
	}
 
	function jumlah_data($field){
		return $this->db->get($field)->num_rows();
	}
}