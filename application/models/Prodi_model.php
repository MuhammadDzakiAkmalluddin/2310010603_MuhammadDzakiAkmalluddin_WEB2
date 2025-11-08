<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('prodi')->result();
    }


    public function lihatData()
    {
        return $this->db->get('prodi')->result();
    }

    public function insert($data)
    {
        $this->db->insert('prodi', $data);
    }

    public function get_by_id($id_prodi)
    {
        return $this->db->get_where('prodi', array('id_prodi' => $id_prodi))->row();
    }

    public function update($id_prodi, $data)
    {
        $this->db->where('id_prodi', $id_prodi);
        $this->db->update('prodi', $data);
    }

    public function delete($id_prodi)
    {
        $this->db->where('id_prodi', $id_prodi);
        $this->db->delete('prodi');
    }
}
