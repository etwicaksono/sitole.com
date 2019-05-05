<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        //$this->load->model('m_product');
    }


    public function index()
    {
        $data['title'] = 'Product Management';
        $data['barang'] = $this->db->get('barang')->result_array();
        $this->load->view('template/auth/header', $data);
        $this->load->view('product/product', $data);
        $this->load->view('template/auth/footer');
    }

    public function upload_product()
    {
        $this->form_validation->set_rules('nama_barang','Nama Barang','required|trim');
        $this->form_validation->set_rules('sub_kategori','Kategori Barang','required|trim');
        $this->form_validation->set_rules('harga_barang','Harga Barang','required|trim');
        $this->form_validation->set_rules('stok_barang','Stok Barang','required|trim');
        $this->form_validation->set_rules('deskripsi_barang','Deskripsi Barang','required|trim');
        //$this->form_validation->set_rules('foto_barang','Foto Barang','required');


        if ($this->form_validation->run() == false){
            $data['title'] = 'Upload Product';
        $this->load->view('template/auth/header', $data);
        $this->load->view('product/upload_product');
        $this->load->view('template/auth/footer');
        }else{
            $upload_image = $_FILES['foto_barang']['name'];
            $config['upload_path'] = './assets/img/';
            $this->load->library('upload',$config);

            if ($this->upload->do_upload('foto_barang')){
                $new_image = $this->upload->data('file_name');
                var_dump($new_image);
                die;
            }else{
                echo $this->upload->display_errors();
            }

            $data = [
                'id_user' => $this->input->post('id_user'),
                'nama_barang' => htmlspecialchars($this->input->post('nama_barang',true)),
                'harga_barang' => htmlspecialchars($this->input->post('harga_barang',true)),
                'kategori' => $this->input->post('kategori'),
                'sub_kategori' =>$this->input->post('sub_kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'stok_barang' => $this->input->post('stok_barang'),
                'gbr_barang' => $new_image
            ];

            //upload_barang($data);
            $this->db->insert('barang',$data);
            //$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Inser data success!</div>');
            redirect('product/product');

        }
    }

    public function edit_product()
    {
        $data['title'] = 'Edit Product';
        $this->load->view('template/auth/header', $data);
        $this->load->view('product/edit_product');
        $this->load->view('template/auth/footer');
    }

    public function tambah(){
        $data = [
            'id_user' => '2',
            'nama_barang' => 'tes tes',
            'harga_barang' => 20000,
            'kategori' => 1,
            'sub_kategori' => 3,
            'deskripsi' => 'tes deskripsi',
            'stok_barang' => 3,
            'gbr_barang' => 'gambar2.jpg'
        ];
        $this->db->insert('barang',$data);
        var_dump($data);

        // $this->form_validation->set_rules('nama_barang','Nama Barang','required|trim');
        // $this->form_validation->set_rules('sub_kategori','Kategori Barang','required');
        // $this->form_validation->set_rules('harga_barang','Harga Barang','required|trim');
        // $this->form_validation->set_rules('stok_barang','Stok Barang','required|trim');
        // $this->form_validation->set_rules('deskripsi_barang','Deskripsi Barang','required|trim');
        // //$this->form_validation->set_rules('foto_barang','Foto Barang','required');


        // if ($this->form_validation->run() == false){
        //     echo "embuh ora weruh";
        //     $cek = $_FILES['foto_barang']['name'];
        //     var_dump($cek);
        //     var_dump($this->input->post());
        // }else{
        //     $upload_image = $_FILES['foto_barang']['name'];
        //     $config['upload_path'] = './assets/img/';
        //     $this->load->library('upload',$config);

        //     if ($this->upload->do_upload('foto_barang')){
        //         $new_image = $this->upload->data('file_name');
        //         var_dump($new_image);
        //         die;
        //     }else{
        //         echo $this->upload->display_errors();
        //     }

        //     $data = [
        //         'id_user' => $this->input->post('id_user'),
        //         'nama_barang' => htmlspecialchars($this->input->post('nama_barang',true)),
        //         'harga_barang' => htmlspecialchars($this->input->post('harga_barang',true)),
        //         'kategori' => $this->input->post('kategori'),
        //         'sub_kategori' =>$this->input->post('sub_kategori'),
        //         'deskripsi' => $this->input->post('deskripsi'),
        //         'stok_barang' => $this->input->post('stok_barang'),
        //         'gbr_barang' => $new_image
        //     ];

            // //upload_barang($data);
            // $this->db->insert('barang',$data);
            // //$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Inser data success!</div>');
            // redirect('product/product');

        //}
    }
}