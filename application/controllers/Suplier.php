<?php
class Suplier extends CI_Controller
{
    // make construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suplier_model', 'suplier');
        if (!$this->session->userdata('email')) {
            redirect('home');
        }
    }
    // membuat method index
    public function index()
    {
        // akses model suplier
        $this->load->model('suplier_model');
        $suplier = $this->suplier_model->getAll();
        $data['suplier'] = $suplier;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('suplier/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        // akses model suplier
        $this->load->model('suplier_model');
        $suplier = $this->suplier_model->getById($id);
        $data['suplier'] = $suplier;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('suplier/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('suplier/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        // akses ke model suplier
        $this->load->model('suplier_model', 'suplier'); // 1
        $_nama = $this->input->post('nama');
        $_kota = $this->input->post('kota');
        $_kontak = $this->input->post('kontak');
        $_alamat = $this->input->post('alamat');
        $_telpon = $this->input->post('telpon');

        $data_suplier['nama'] = $_nama; // 2
        $data_suplier['kota'] = $_kota;
        $data_suplier['kontak'] = $_kontak;
        $data_suplier['alamat'] = $_alamat;
        $data_suplier['telpon'] = $_telpon;

        if ((!empty($_idedit))) { //update
            $data_suplier['id'] = $_idedit;
            $this->suplier->update($data_suplier);
        } else {
            //  data baru
            $this->suplier->simpan($data_suplier);
        }
        redirect('suplier', 'refresh');
    }
    public function edit($id)
    {
        // akses model suplier
        $this->load->model('suplier_model', 'suplier');
        $obj_suplier = $this->suplier->getById($id);
        $data['obj_suplier'] = $obj_suplier;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('suplier/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function fungsi_edit()
    {
        $this->load->model('suplier_model', 'suplier');
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $kontak = $this->input->post('kontak');
        $alamat = $this->input->post('alamat');

        $data_suplier['nama'] = $nama;
        $data_suplier['kota'] = $kota;
        $data_suplier['kontak'] = $kontak;
        $data_suplier['alamat'] = $alamat;
        $data_suplier['id'] = $id;

        $this->suplier->update($data_suplier, $id);
        redirect('suplier', 'refresh');
    }
    public function delete($id)
    {
        $this->load->model('suplier_model', 'suplier');
        // Mengecek data suplier berdasarkan id
        $data_suplier['id'] = $id;
        $this->suplier->delete($data_suplier);
        redirect('suplier', 'refresh');
    }

    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }
    public function upload()
    {
        $_idsuplier = $this->input->post('idsuplier');
        $this->load->model('suplier_model', 'suplier');
        $suplier = $this->suplier->getById($_idsuplier);
        $data['suplier'] = $suplier;

        $config['upload_path'] = './uploads/photos';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $suplier->id;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
        }
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('suplier/detail', $data);
        $this->load->view('layouts/footer');
    }
}
