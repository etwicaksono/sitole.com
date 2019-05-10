<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test_box extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function tes_upload_barang(){
        
        //===========uji coba upload barang===========================
        // $this->load->view('tes');
        // if (isset($_FILES['gambar'])){
        //     $image = $_FILES['gambar']['name'];
        // if ($image){
        //     $config['allowed_types'] = 'gif|jpg|jpeg|png';
        //     $config['max_size'] = '2048';
        //     $config['upload_path'] = './assets/img/';
        //             $this->load->library('upload',$config);
        //             $this->upload->initialize($config);
        //             if ($this->upload->do_upload('gambar')){
        //                 echo "file berhasil diupload!";
        //             }else{
        //                 echo $this->upload->display_errors();
        //             }
        // }
        // }
        //======================akhir uji coba upload===========================

        $upload_images =  $_FILES['foto']['name'];
                    $config['upload_path'] = './assets/img/product/';
                    $config['allowed_types'] = 'jpg|png|gif|jpeg|webp';
                    $config['max_size'] = '2048';
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('foto');

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
                    if ($this->db->insert('barang',$data) == false){
                        echo $this->db->display_error();
                    }

                    var_dump($data);
                    var_dump($_FILES['foto']);

    }

    public function insert_manual(){
        $this->load->view('tes');
        if (isset($_FILES['gambar'])){
            $upload_images =  $_FILES['gambar']['name'];
                    $config['upload_path'] = './assets/img/product/';
                    $config['allowed_types'] = 'jpg|png|gif|jpeg|webp';
                    $config['max_size'] = '2048';
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('gambar');
                    
        $data = [
            'id_user' => 7,
            'nama_barang' => 'uji coba barang 1128',
            'harga_barang' => 12000,
            'kategori' => 1,
            'sub_kategori' => 2,
            'deskripsi' => 'ini uji coba deskripsi',
            'stok_barang' => 11,
            'gbr_barang' => $upload_images
        ];

        if($this->db->insert('barang',$data)){
            echo "insert berhasil";
        }else{
            echo $this->db->display_error();
        }
        }
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

                if ($this->form_validation->run() == false){//cek validasi form
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Ada yang salah di form</div>');
                    $data['title'] = 'Upload Barang';
                    $this->load->view('SBA/template/header',$data);
                    $this->load->view('SBA/item/upload_barang');
                    $this->load->view('SBA/template/footer');
                }else{
                    $upload_images =  $_FILES['foto']['name'];
                    $config['upload_path'] = './assets/img/product/';
                    $config['allowed_types'] = 'jpg|png|gif|jpeg|webp';
                    $config['max_size'] = '2048';
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('foto');

                    $data = [
                        'id_user' => 7,
                        'nama_barang' => 'uji coba barang 1128',
                        'harga_barang' => 12000,
                        'kategori' => 1,
                        'sub_kategori' => 2,
                        'deskripsi' => 'ini uji coba deskripsi',
                        'stok_barang' => 11,
                        'gbr_barang' => $upload_images
                    ];
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