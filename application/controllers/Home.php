<?php
class Home extends CI_Controller
{
    // make construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model', 'produk');
        // if (!$this->session->userdata('email')) {
        //     redirect('auth');
        // }
    }

    public function index()
    {
        $produk = $this -> produk ->getAll();
        $data['produk'] = $produk;
        $this->load->view('home/index', $data);
    }

    public function produk()
    {
        $this->load->view('produk/landing');
    }

    public function suplier()
    {
        $this->load->view('suplier/landing');
    }
    // buat fungsi untu redirect ke halaman admin
    public function admin()
    {
        redirect('admin');
    }
}