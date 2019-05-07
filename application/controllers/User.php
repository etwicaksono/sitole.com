<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function data_user()
    {

        $this->form_validation->set_rules('nama_asli','Nama Lengkap','required|trim');
        $this->form_validation->set_rules('username','Username','required|trim|is_unique[user.username]',[
            'is_unique' => 'Username ini sudah ada!']);
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email ini sudah didaftarkan!']);
            $this->form_validation->set_rules('no_hp','Nomor HP','required|trim|is_unique[user.no_hp]',[
                'is_unique' => 'Nomor ini sudah didaftarkan!']);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
            'matches' => 'Password dont match!',
            'min_length' => 'Password is too short!'
        ]);
         $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

        if ($this->form_validation->run() == false){
            $data['title'] = 'Registration Page';
            $this->load->view('SBA/template/header',$data);
            $this->load->view('SBA/auth/data_user');
            $this->load->view('SBA/template/footer');
        }else{
            $data = [
                'nama_asli' => htmlspecialchars($this->input->post('nama_asli',true)),
                'username' => htmlspecialchars($this->input->post('username',true)),
                'email' => htmlspecialchars($this->input->post('email',true)),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
                'no_hp' => htmlspecialchars($this->input->post('no_hp',true)),
                'foto' => 'default.jpg'
            ];

            $this->db->insert('user',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please login!</div>');
            redirect('auth');
        }
    }


}
?>
