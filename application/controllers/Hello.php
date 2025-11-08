<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{
    // Method default
    public function index()
    {
        echo "Hello, Nama saya Muhammad Dzaki Akmalluddin";
    }

    // Method untuk memanggil model
    public function hello_2310010603()
    {
        // Memuat model
        $this->load->model('hello_model');

        // Memanggil function hello_nim() dari model
        $data = $this-> hello_model->hello_nim();

        // Menampilkan hasil dari model
        echo $data;
    }
}
