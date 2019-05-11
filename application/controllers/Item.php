<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function upload_barang(){
        if (isset($_SESSION['username'])){//check session['username']
            $cek = $this->db->get_where('user',['id_user' => $this->session->get_userdata()['id_user']])->row_array();
            if ($_SESSION['username'] == $cek['username']){//username validation
                $data['title'] = 'Dashboard Page';
                $this->form_validation->set_rules('nama_barang','Nama Barang','required|trim',['required' => 'Nama Barang harus diisi!']);
                $this->form_validation->set_rules('harga_barang','Harga Barang','required|trim',['required' => 'Harga Barang harus diisi!']);
                $this->form_validation->set_rules('deskripsi','Deskripsi Barang','required|trim',['required' => 'Deskripsi Barang harus diisi!']);
                $this->form_validation->set_rules('stok_barang','Stok Barang','required|trim',['required' => 'Stok Barang harus diisi!']);
                $this->form_validation->set_rules('foto','Foto Barang','required',['required' => '</br>Foto barang harus ada!']);
                if (isset($_POST['nama_barang'])){$_POST['foto'] = $_FILES['foto']['name'];}

        
                if ($this->form_validation->run() == false){//form verify
                    $this->session->set_flashdata('message_form','<div class="alert alert-danger" role="alert"> Ada yang salah di form</div>');
                    $data['title'] = 'Upload Barang';
                    $this->load->view('SBA/template/header',$data);
                    $this->load->view('SBA/item/upload_barang');
                    $this->load->view('SBA/template/footer');
                }//end-if form verify
                else{
                    //define file extension
                    $upload_images =  $_FILES['foto']['name'];
                    $ekstensiGambar = explode('.',$upload_images);
                        $ekstensiGambar = strtolower(end($ekstensiGambar));
                        $upload_images = uniqid();
                        $upload_images .= '.';
                        $upload_images .= $ekstensiGambar;
                    //set upload-file-configuration
                    $config['upload_path'] = './assets/img/product/';
                    $config['allowed_types'] = 'jpg|png|gif|jpeg|webp';
                    $config['file_ext_tolower'] = 'true';
                    $config['file_name'] = $upload_images;
                    $config['max_size'] = '2048';
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('foto')){//check upload
                        $this->session->set_flashdata('message_upload','<div class="alert alert-success" role="alert"> Upload berhasil!</div>');
                    }//end-if check upload
                    else{
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('message_upload','<div class="alert alert-danger" role="alert">'.$error.'</div>');
                    }//end-else check upload

                    $data = [
                        'id_user' => $this->session->get_userdata()['id_user'],
                        'nama_barang' => htmlspecialchars($this->input->post('nama_barang',true)),
                        'harga_barang' => htmlspecialchars($this->input->post('harga_barang',true)),
                        'kategori' => htmlspecialchars($this->input->post('kategori')),
                        'sub_kategori' => htmlspecialchars($this->input->post('sub_kategori')),
                        'deskripsi' => htmlspecialchars($this->input->post('deskripsi',true)),
                        'stok_barang' => $this->input->post('stok_barang'),
                        'gbr_barang' => $upload_images

                    ];
                    //$this->db->insert('barang',$data);
                    if ( $this->db->insert('barang',$data)){
                        $this->session->set_flashdata('message_insert','<div class="alert alert-success" role="alert">Input barang berhasil!</div>');
                        redirect('item/upload_barang');
                    }else{
                        $this->session->set_flashdata('message_insert','<div class="alert alert-danger" role="alert">Input barang gagal!</div>');
                    redirect('item/upload_barang');
                    }
                }//end-else form verify
            }//end-if of username validation
            else{
                $this->session->set_flashdata('message_relogin','<div class="alert alert-danger" role="alert">Data login anda rusak! Silahkan login ulang!</div>');
                header('Location:'.base_url());
            }//end-elsse of username validation
        }//end-if of check session['username']
        else{
            $this->session->set_flashdata('message_login','<div class="alert alert-danger" role="alert">Anda harus login untuk bisa mendapat hak akses!</div>');
            header('Location:'.base_url());
        }//end-else of check username
    }//end of upload_barang
}