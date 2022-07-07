<?php
class Pembelian extends CI_Controller
{
    // make construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembelian_model', 'pembelian');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        // load model
        $this->load->model('pembelian_model');
        $pembelian = $this->pembelian_model->getAll();
        $data['pembelian'] = $pembelian;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pembelian/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        // akses model pembelian
        $this->load->model('pembelian_model');
        $pembeliand = $this->pembelian_model->getById($id);
        $data['pembeliand'] = $pembeliand;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pembelian/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pembelian/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('pembelian_model', 'pembelian'); // 1
        $_tanggal = $this->input->post('tanggal');
        $_jumlah = $this->input->post('jumlah');
        $_harga = $this->input->post('harga');
        $_produk_id = $this->input->post('produk_id');
        $_suplier_id = $this->input->post('suplier_id');

        $data_pembelian['tanggal'] = $_tanggal;
        $data_pembelian['jumlah'] = $_jumlah;
        $data_pembelian['harga'] = $_harga;
        $data_pembelian['produk_id'] = $_produk_id;
        $data_pembelian['suplier_id'] = $_suplier_id;

        if ((!empty($_idedit))) { //update
            $data_pembelian['id'] = $_idedit;
            $this->pembelian->update($data_pembelian);
        } else {
            //  data baru
            $this->pembelian->simpan($data_pembelian);
        }
        redirect('pembelian', 'refresh');
    }
    public function edit($id)
    {
        // akses model pembelian
        $this->load->model('pembelian_model', 'pembelian');
        $obj_pembelian = $this->pembelian->getById($id);
        $data['obj_pembelian'] = $obj_pembelian;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pembelian/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function fungsi_edit(){
        $this->load->model('pembelian_model', 'pembelian');
        $_id = $this->input->post('id');
        $_tanggal = $this->input->post('tanggal');
        $_jumlah = $this->input->post('jumlah');
        $_harga = $this->input->post('harga');
        $_produk_id = $this->input->post('produk_id');
        $_suplier_id = $this->input->post('suplier_id');

        $data_pembelian['tanggal'] = $_tanggal;
        $data_pembelian['jumlah'] = $_jumlah;
        $data_pembelian['harga'] = $_harga;
        $data_pembelian['produk_id'] = $_produk_id;
        $data_pembelian['suplier_id'] = $_suplier_id;
        $data_pembelian['id'] = $_id;

        $this->pembelian->update($data_pembelian, $_id);
        redirect('pembelian', 'refresh');
    }
    public function delete($id)
    {
        $this->load->model('pembelian_model', 'pembelian');
        // Mengecek data pembelian berdasarkan id
        $data_pembelian['id'] = $id;
        $this->pembelian->delete($data_pembelian);
        redirect('pembelian', 'refresh');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->userdata('username')){
    //         redirect('/login');
    //     }
    // }
}