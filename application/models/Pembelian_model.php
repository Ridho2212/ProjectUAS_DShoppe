<?php
class Pembelian_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('pembelian');
        return $query->result();
    }

    // menampilkan produk bedasarkan id
    public function getById($id)
    {
        $query = $this->db->get_where('pembelian', ['id' => $id]);
        return $query->row();
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO pembelian (tanggal,jumlah,harga,produk_id,suplier_id) VALUES (?,?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('pembelian', $data);

        // $sql = "UPDATE pembelian SET tanggal=?,jumlah=?,harga=?,produk_id=?,suplier_id=? where id=?";
        // $this->db->query($sql, $data);
    }
        

    public function delete($data)
    {
        // hapus data dosen
        $sql = "DELETE FROM pembelian WHERE id=?";
        $this->db->query($sql, $data);
    }
}