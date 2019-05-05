<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login Page';
        $this->load->view('SBA/template/header',$data);
        $this->load->view('SBA/auth/login');
        $this->load->view('SBA/template/footer');
    }

    public function registration()
    {
        $data['title'] = 'Login Page';
        $this->load->view('SBA/template/header',$data);
        $this->load->view('SBA/auth/registration');
        $this->load->view('SBA/template/footer');
    }
}