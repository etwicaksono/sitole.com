<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tester extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $_POST['foto'] = $_FILES['foto']['name'];
        var_dump($_POST);
        var_dump($_FILES);
    }
    

}