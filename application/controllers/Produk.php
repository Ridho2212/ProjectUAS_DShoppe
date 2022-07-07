<?php
class Produk extends CI_Controller
{
    // make construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model', 'produk');
    }

    public function index()
    {
        $this->load->model('produk_model');
        $produk = $this->produk_model->getAll();
        $data['produk'] = $produk;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('produk/index', $data);
        $this->load->view('layouts/footer');
    }

    public function detail($id)
    {
        // akses model produk
        $this->load->model('produk_model');
        $produkd = $this->produk_model->getById($id);
        $data['produkd'] = $produkd;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('produk/detail', $data);
        $this->load->view('layouts/footer');
    }

    public function form()
    {

        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('produk/form');
        $this->load->view('layouts/footer');
    }

    public function save()
    {
        // akses ke model produk
        $this->load->model('produk_model', 'produk'); // 1
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_stok = $this->input->post('stok');
        $_harga_beli = $this->input->post('harga_beli');
        $_harga_jual = $this->input->post('harga_jual');
        $_jenis_id = $this->input->post('jenis_id');
        $_deskripsi = $this->input->post('deskripsi');
        $_foto = $this->input->post('foto');

        $data_produk['kode'] = $_kode; // 2
        $data_produk['nama'] = $_nama;
        $data_produk['stok'] = $_stok;
        $data_produk['harga_beli'] = $_harga_beli;
        $data_produk['harga_jual'] = $_harga_jual;
        $data_produk['jenis_id'] = $_jenis_id;
        $data_produk['deskripsi'] = $_deskripsi;
        $data_produk['foto'] = $_foto;

        if ((!empty($_idedit))) { //update
            $data_produk['id'] = $_idedit;
            $this->produk->update($data_produk);
        } else {
            //  data baru
            $this->produk->simpan($data_produk);
        }
        redirect('produk', 'refresh');
    }
    public function edit($id)
    {
        // akses model produk
        $this->load->model('produk_model', 'produk');
        $obj_produk = $this->produk->getById($id);
        $data['obj_produk'] = $obj_produk;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('produk/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function fungsi_edit()
    {
        $this->load->model('produk_model', 'produk');
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_stok = $this->input->post('stok');
        $_harga_beli = $this->input->post('harga_beli');
        $_harga_jual = $this->input->post('harga_jual');
        $_jenis_id = $this->input->post('jenis_id');
        $_deskripsi = $this->input->post('deskripsi');
        $_foto = $this->input->post('foto');
        $_id = $this->input->post('id');

        $data_produk['kode'] = $_kode;
        $data_produk['nama'] = $_nama;
        $data_produk['stok'] = $_stok;
        $data_produk['harga_beli'] = $_harga_beli;
        $data_produk['harga_jual'] = $_harga_jual;
        $data_produk['jenis_id'] = $_jenis_id;
        $data_produk['deskripsi'] = $_deskripsi;
        $data_produk['foto'] = $_foto;
        $data_produk['id'] = $_id;

        $this->produk->update($data_produk, $_id);
        redirect('produk', 'refresh');
    }

    public function delete($id)
    {
        $this->load->model('produk_model', 'produk');
        // Mengecek data produk berdasarkan id
        $data_produk['id'] = $id;
        $this->produk->delete($data_produk);
        redirect('produk', 'refresh');
    }
}
