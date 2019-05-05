<?php
defined('BASEPATH') or exit('No direct script access allowed');

class L_Auth extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Page';
        $this->load->view('LTE/template/L_header',$data);
        $this->load->view('LTE/dashboard');
        $this->load->view('LTE/template/L_footer');
    }

    public function registration()
    {
        // $this->form_validation->set_rules('name','Name','required|trim');
        // $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
        //     'is_unique' => 'This email has already registered!']);
        // $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
        //     'matches' => 'Password dont match!',
        //     'min_length' => 'Password is too short!'
        // ]);
        //  $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

        // if ($this->form_validation->run() == false){
        // $data['title'] = 'Registration Page';
        // $this->load->view('templates/auth_header',$data);
        // $this->load->view('auth/registration');
        // $this->load->view('templates/auth_footer'); 
        // }else{
        //     $data = [
        //         'name' => htmlspecialchars($this->input->post('name',true)),
        //         'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
        //         'email' => htmlspecialchars($this->input->post('email',true)),
        //         'image' => 'default.jpg',
        //         'role_id' => 2,
        //         'is_active' => 1,
        //         'date_created' => time()
        //     ];

        //     $this->db->insert('user',$data);
        //     $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please login!</div>');
        //     redirect('auth');
        // }

        $data['title'] = 'Registration Page';
        $this->load->view('LTE/template/auth/header',$data);
        $this->load->view('auth/registration');
        $this->load->view('LTE/template/auth/footer');
    }

    public function login(){
        $data['title'] = 'Login Page';
        $this->load->view('LTE/template/auth/header',$data);
        $this->load->view('auth/registration');
        $this->load->view('LTE/template/auth/footer');
    }
}