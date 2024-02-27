<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('id_pegawai'))) {
            redirect('auth/loginPegawai', 'refresh');
        }
        $this->load->model('Kategori_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Pegawai';
        $data['kategori'] = $this->Kategori_model->get_kategori();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/side');
        $this->load->view('admin/layout/side-header');
        $this->load->view('admin/kategori/index');
        $this->load->view('admin/layout/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'kategori',
            'kategori',
            'required|is_unique[kategori.kategori]',
            array(
                'is_unique'     => 'Kategori Tidak Boleh Sama!'
            )
        );
        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'numeric|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('kategori');
        } else {
            $this->Kategori_model->tambah_kategori();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Sukses Menambah Data Kategori
            </div>');
            redirect('kategori');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('kategori', 'kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('kategori');
        } else {
            $this->Kategori_model->edit_kategori();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Sukses Mengedit Data Kategori
            </div>');
            redirect('kategori');
        }
    }

    public function get_kategori_by_id($id)
    {
        echo json_encode($this->Kategori_model->get_kategori_by_id($id));
    }

    public function hapus($id)
    {
        $this->Kategori_model->hapus_kategori($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Sukses Hapus Data Kategori
       </div>');
        redirect('kategori');
    }
}
