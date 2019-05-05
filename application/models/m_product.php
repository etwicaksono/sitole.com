<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Controller
{
    
    public function upload_barang($data){
        $this->db->insert('barang',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Inser data success!</div>');
        redirect('product/product');
    }
}