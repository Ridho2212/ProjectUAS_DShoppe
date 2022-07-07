<?php
class Produk_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('produk');
        return $query->result();
    }

    // menampilkan produk bedasarkan id
    public function getById($id)
    {
        $query = $this->db->get_where('produk', ['id' => $id]);
        return $query->row();
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO produk (kode,nama,stok,harga_beli,harga_jual,jenis_id,deskripsi,foto) VALUES (?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('produk', $data);

        // $sql = "UPDATE produk SET kode=?,nama=?,stok=?,harga_beli=?,harga_jual=?,jenis_id=?,deskripsi=? where kode=?";
        // $this->db->query($sql, $data);
    }

    public function delete($data)
    {
        // hapus data dosen
        $sql = "DELETE FROM produk WHERE id=?";
        $this->db->query($sql, $data);
    }
}
