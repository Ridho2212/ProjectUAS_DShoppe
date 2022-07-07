<?php
class Suplier_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('suplier');
        return $query->result();
    }

    // menampilkan produk bedasarkan id
    public function getById($id)
    {
        $query = $this->db->get_where('suplier', ['id' => $id]);
        return $query->row();
    }
    // buat fungsi simpan
    public function simpan($data)
    {
        $this->db->insert('suplier', $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }

    // public function simpan($data)
    // {
    //     $sql = "INSERT INTO suplier (nama,kontak,alamat,telpon) VALUES (?,?,?,?)";
    //     $this->db->query($sql, $data);
    //     $insert_id = $this->db->insert_id();
    //     return $this->getById($insert_id);
    // }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('suplier', $data);
            //     $sql = "UPDATE suplier SET nama=?,kontak=?,alamat=?,telpon=? where id=?";
    //     $this->db->query($sql, $data);
    }


    public function delete($data)
    {
        // hapus data dosen
        $sql = "DELETE FROM suplier WHERE id=?";
        $this->db->query($sql, $data);
    }
}