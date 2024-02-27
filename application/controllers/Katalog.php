<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('katalog_model');
    }

    public function getProfilUsaha()
    {
        $getProfil = $this->db->query("SELECT * FROM profil_usaha");
        foreach ($getProfil->result_array() as $profil) {
            $arr['nama_usaha'] = $profil['nama_usaha'];
            $arr['alamat'] = $profil['alamat'];
            $arr['nomor_telepon'] = $profil['nomor_telepon'];
        }
        return $arr;
    }

    public function index()
    {
        $profil = $this->getProfilUsaha();
        $data['menu'] = $this->katalog_model->getAllMakanan();
        $data['nama_usaha'] = $profil['nama_usaha'];
        $data['alamat'] = $profil['alamat'];
        $data['nomor_telepon'] = $profil['nomor_telepon'];

        $this->load->view('home/layout/header', $data);
        $this->load->view('home/katalog/index');
        $this->load->view('home/layout/footer');
    }

    public function detail($id)
    {
        $profil = $this->getProfilUsaha();
        $data['menu'] = $this->katalog_model->getMakananById($id);
        $data['gambar_menu'] = $this->katalog_model->getGambarById($id);
        $data['nama_usaha'] = $profil['nama_usaha'];
        $data['alamat'] = $profil['alamat'];
        $data['nomor_telepon'] = $profil['nomor_telepon'];

        $this->load->view('home/layout/header', $data);
        $this->load->view('home/katalog/detail');
        $this->load->view('home/layout/footer');
    }
}
