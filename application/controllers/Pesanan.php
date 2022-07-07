<?php
class Pesanan extends CI_Controller
{
    // make construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pesanan_model', 'pesanan');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        // load model pesanan
        $this->load->model('pesanan_model');
        $pesanan = $this->pesanan_model->getAll();
        $data['pesanan'] = $pesanan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pesanan/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        // load model pesanan
        $this->load->model('pesanan_model');
        $pesanand = $this->pesanan_model->getById($id);
        $data['pesanand'] = $pesanand;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pesanan/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        $this->load->model('produk_model');
        // ambil nilai column produk_id dari klik
        $produk_id = $this->input->post('id');

        // ambil data berdasar id
        $produk = $this->produk_model->getById($produk_id);
        // $data['produk'] = $produk;
        $data = [
            'produk' => $produk,
            'harga' => $produk->harga_jual
        ];
        


        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pesanan/form', $data);
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('pesanan_model', 'pesanan'); // 1
        $_tanggal = $this->input->post('tanggal');
        $_jumlah = $this->input->post('jumlah');
        $_users_id = $this->input->post('users_id');
        $_produk_id = $this->input->post('produk_id');

        // $data_pesanan['tanggal'] = $_tanggal; // 2
        // $data_pesanan['jumlah'] = $_jumlah;
        // $data_pesanan['users_id'] = $_users_id;
        // $data_pesanan['produk_id'] = $_produk_id;

        $data_pesanan = [
            'tanggal' => $_tanggal,
            'jumlah' => $_jumlah,
            'users_id' => $_users_id,
            'produk_id' => $_produk_id
        ];

        if ((!empty($_idedit))) { //update
            $data_pesanan['id'] = $_idedit;
            $this->pesanan->update($data_pesanan);
        } else {
            //  data baru
            $this->pesanan->simpan($data_pesanan);
        }
        redirect('pesanan', 'refresh');
    }
    public function edit($id)
    {
        // akses model pesanan
        $this->load->model('pesanan_model', 'pesanan');
        $obj_pesanan = $this->pesanan->getById($id);
        $data['obj_pesanan'] = $obj_pesanan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pesanan/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function fungsi_edit()
    {
        $this->load->model('pesanan_model', 'pesanan');
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $users_id = $this->input->post('users_id');

        $data_pesanan['tanggal'] = $tanggal;
        $data_pesanan['jumlah'] = $jumlah;
        $data_pesanan['users_id'] = $users_id;
        $data_pesanan['id'] = $id;

        $this->pesanan->update($data_pesanan, $id);
        redirect('pesanan', 'refresh');
    }

    public function delete($id)
    {
        $this->load->model('pesanan_model', 'pesanan');
        // Mengecek data pesanan berdasarkan id
        $data_pesanan['id'] = $id;
        $this->pesanan->delete($data_pesanan);
        redirect('pesanan', 'refresh');
    }
    public function upload()
    {
        $_idpesanan = $this->input->post('idpesanan');
        $this->load->model('pesanan_model', 'pesanan');
        $pesanan = $this->pesanan->getById($_idpesanan);
        $data['pesanan'] = $pesanan;

        $config['upload_path'] = './uploads/photos';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $pesanan->id;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
        }
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pesanan/detail', $data);
        $this->load->view('layouts/footer');
    }
}
