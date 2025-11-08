<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    // Menampilkan semua data
    public function getAll()
    {
        return $this->db->get('mahasiswa')->result();
    }

    // Metode result()
    public function getResult()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    // Metode row()
    public function getRow()
    {
        $query = $this->db->get_where('mahasiswa', array('id_mahasiswa' => 1));
        return $query->row();
    }

    // Metode result_array()
    public function getResultArray()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    // Metode row_array()
    public function getRowArray()
    {
        $query = $this->db->get_where('mahasiswa', array('id_mahasiswa' => 1));
        return $query->row_array();
    }

    public function simpan($data) {
        return $this->db->insert('mahasiswa', $data);
    }

    public function getById($id) {
        return $this->db->get_where('mahasiswa', ['id_mahasiswa' => $id])->row();
    }

    public function perbaharui($id, $data) {
        return $this->db->update('mahasiswa', $data, ['id_mahasiswa' => $id]);
    }

    public function hapus($id) {
        return $this->db->delete('mahasiswa', ['id_mahasiswa' => $id]);
    }

    //fungsi mengambil data mahasiswa
    public function lihatData()
{
    $this->db->select('mahasiswa.*, prodi.nama_prodi');
    $this->db->from('mahasiswa');
    $this->db->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi', 'left');
    $query = $this->db->get();
    return $query->result();
}

}
