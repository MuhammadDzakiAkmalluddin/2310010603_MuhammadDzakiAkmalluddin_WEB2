<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }

    public function index()
    {
        $data['prodi'] = $this->Prodi_model->get_all();
        $this->load->view('prodi_view', $data);
    }

    public function tambah()
    {
        $this->load->view('prodi_tambah');
    }

    public function simpan()
    {
        $data = array(
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        );
        $this->Prodi_model->insert($data);
        redirect('prodi');
    }

    public function edit($id_prodi)
    {
        $data['prodi'] = $this->Prodi_model->get_by_id($id_prodi);
        $this->load->view('prodi_edit', $data);
    }

    public function update()
    {
        $id_prodi = $this->input->post('id_prodi');
        $data = array(
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        );
        $this->Prodi_model->update($id_prodi, $data);
        redirect('prodi');
    }

    public function hapus($id_prodi)
    {
        $this->Prodi_model->delete($id_prodi);
        redirect('prodi');
    }
}
