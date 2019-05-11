<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (isset($_SESSION['username'])){
            $cek = $this->db->get_where('user',['id_user' => $_SESSION['id_user']])->row_array();
            if ($_SESSION['username'] == $cek['username']){
                //main scope
                $this->form_validation->set_rules('nama_asli','Nama Lengkap','required|trim',['required' => 'Nama tidak boleh kosong!']);
                $this->form_validation->set_rules('no_hp','Nomor HP','required|trim',['required' => 'Nomor handphone tidak boleh kosong!']);
                $this->form_validation->set_rules('password3','Password','required|trim|min_length[3]|matches[password4]',[
                    'required' => 'Password tidak boleh kosong!',
                    'matches' => 'Password tidak sama!',
                    'min_length' => 'Password terlalu pendek!']);
                $this->form_validation->set_rules('password4','Password','required|trim|matches[password3]',[
                    'required' => 'Password tidak boleh kosong!',
                    'matches' => 'Password tidak sama!',
                    'min_length' => 'Password terlalu pendek!']);

                //validasi password
                $old_pass = $this->input->post('password1');
                $db_pass = $this->input->post('password2');
                if ($this->form_validation->run() == false || password_verify($old_pass,$db_pass) == false){//form verify
                    if (isset($_oldpass) && !password_verify($old_pass,$_SESSION['password'])){$this->session->set_flashdata('message_pass','<div class="alert alert-danger" role="alert">Password lama anda salah!</div>');}
                    $data['title'] = 'User Setting';
                    $this->load->view('SBA/template/header',$data);
                    $this->load->view('SBA/auth/data_user');
                    $this->load->view('SBA/template/footer');
                }//end of form verify
                else{
                    //upload and insert scope
                    if (isset($_FILES['foto'])){//check uploaded file
                        
                        $images = $_FILES['foto']['name'];
                        $ekstensiGambar = explode('.',$images);
                        $ekstensiGambar = strtolower(end($ekstensiGambar));
                        $images = uniqid();
                        $images .= '.';
                        $images .= $ekstensiGambar;
                        //set upload-file-config
                        $new_name = uniqid().'.'.
                        $config['upload_path'] = './assets/img/profile/';
                        $config['allowed_types'] = 'jpg|png|jpeg|gif|webp';
                        $config['file_ext_tolower'] = 'true';
                        $config['file_name'] = $images;
                        $config['max_size'] = '2048';
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        
                        //generate array to inserted in database
                        $data = [
                            'nama_asli' => htmlspecialchars($this->input->post('nama_asli',true)),
                            'username' => htmlspecialchars($this->input->post('username',true)),
                            'email' => htmlspecialchars($this->input->post('email',true)),
                            'alamat' => htmlspecialchars($this->input->post('alamat')),
                            'password' => password_hash($this->input->post('password3'),PASSWORD_DEFAULT),
                            'no_hp' => htmlspecialchars($this->input->post('no_hp',true)),
                            'foto' => $images
                        ];
                        //upload file, insert data to database and check the result
                        if ($this->upload->do_upload('foto')){//check upload result
                            $old_image = $_SESSION['foto'];
                            if ($old_image != 'default.jpg'){//check foto's name
                                unlink(FCPATH . 'assets/img/profile/' . $old_image);
                            }else{
                                echo "file gagal dihapus!";
                            }
                            if ($this->db->set('foto',$data['foto'])){//check foto's inserting result
                                $this->session->set_flashdata('message_upload','<div class="alert alert-success" role="alert"> Upload foto berhasil!</div>');
                            }else{
                                echo "foto gagal diganti!!";
                            }
                            //set data and column
                            $this->db->set('nama_asli',$data['nama_asli']);
                            $this->db->set('username',$data['username']);
                            $this->db->set('email',$data['email']);
                            $this->db->set('alamat',$data['alamat']);
                            $this->db->set('password',$data['password']);
                            $this->db->set('no_hp',$data['no_hp']);
                            $this->db->where('email',$data['email']);
                                if($this->db->update('user')){//check insert database result
                                    $this->session->set_flashdata('message_edit','<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
                                    $this->session->set_userdata($data);
                                    redirect('user');
                                }else{
                                    $this->session->set_flashdata('message_edit','<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
                                }//end-else of check insert database result
                        }else{
                            $error = $this->upload->display_errors();
                            $this->session->set_flashdata('message_upload','<div class="alert alert-danger" role="alert">'.$error.'</div>');
                        }//end-else of check upload result

                    }//end-if of check uploaded file
                    else{

                    }//end-else of check uploaded file
                }//end-else of form verify
            }//end-if username validation
            else{
                redirect('auth/logout');
            }//end-else of username validation

        }//end-if of check session['username']
        else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Anda harus login untuk bisa mendapat hak akses!</div>');
            redirect('auth');
        }//end-else of check session['username']
        
    }//end of data_user()


}//end of CI_Controller
?>