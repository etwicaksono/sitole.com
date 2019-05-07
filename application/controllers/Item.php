<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        
    }
    
    public function upload_barang(){
        if (isset($_SESSION['username'])){
            $cek = $this->db->get_where('user',['id_user' => $this->session->get_userdata()['id_user']])->row_array();
            if ($_SESSION['username'] == $cek['username']){
                $data['title'] = 'Dashboard Page';
                $this->form_validation->set_rules('nama_barang','Nama Barang','required|trim');
                $this->form_validation->set_rules('harga_barang','Harga Barang','required|trim');
                $this->form_validation->set_rules('deskripsi','Deskripsi Barang','required|trim');
                $this->form_validation->set_rules('stok_barang','Stok Barang','required|trim');
                $this->form_validation->set_rules('foto','Foto Barang','required|trim');
        
        
                if ($this->form_validation->run() == false){
                    $data['title'] = 'Upload Barang';
                    $this->load->view('SBA/template/header',$data);
                    $this->load->view('SBA/item/upload_barang');
                    $this->load->view('SBA/template/footer');
                }else{
                    $data = [
                        'id_user' => $this->session->get_userdata('id_user'),
                        'nama_barang' => htmlspecialchars($this->input->post('nama_barang',true)),
                        'harga_barang' => htmlspecialchars($this->input->post('harga_barang',true)),
                        'kategori' => htmlspecialchars($this->input->post('kategori')),
                        'sub_kategori' => htmlspecialchars($this->input->post('sub_kategori')),
                        'deskripsi' => htmlspecialchars($this->input->post('deskripsi',true)),
                        'gbr_barang' => _FILES['foto']['name']
                    ];
        
                    $this->db->insert('barang',$data);
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Input barang berhasil!</div>');
                    redirect('item/upload_barang');
                }
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data login anda rusak! Silahkan login ulang!</div>');
                header('Location:'.base_url());
            }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Anda harus login untuk bisa mendapat hak akses!</div>');
            header('Location:'.base_url());
        }




       

       
    }


}