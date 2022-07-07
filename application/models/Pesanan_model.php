<?php
class Pesanan_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('pesanan');
        return $query->result();
    }

    // menampilkan produk bedasarkan id
    public function getById($id)
    {
        $query = $this->db->get_where('pesanan', ['id' => $id]);
        return $query->row();
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO pesanan (tanggal,jumlah,users_id,produk_id) VALUES (?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('pesanan', $data);
        // $sql = "UPDATE pesanan SET tanggal=?,jumlah=?,users_id=?,produk_id=? where id=?";
        // $this->db->query($sql, $data);
    }

    public function delete($data)
    {
        // hapus data dosen
        $sql = "DELETE FROM pesanan WHERE id=?";
        $this->db->query($sql, $data);
    }
}