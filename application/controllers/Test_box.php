<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test_box extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        //var_dump($_SESSION);
        $old_image = $_SESSION['foto'];
                            if ($old_image != 'default.jpg'){//check foto's name
                                unlink(FCPATH . 'assets/img/profile/' . $old_image);
                            }
    }
    

}