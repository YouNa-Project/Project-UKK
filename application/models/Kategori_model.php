<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function get_kategori()
    {
        $query = $this->db->query("SELECT * FROM kategori");
        return $query->result_array();
    }

    public function get_kategori_kosong_by_date($array)
    {
        $query =  $this->db->query("SELECT * FROM kategori WHERE id_kategori NOT IN ( '" . implode("', '", $array) . "' )");
        return $query->result_array();
    }

    public function tambah_kategori()
    {
        $data = [
            'id_kategori' => htmlspecialchars($this->input->post('id_kategori', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
        ];
        $this->db->insert('kategori', $data);
    }

    public function edit_kategori()
    {
        $data = [
            "kategori" => $this->input->post('kategori', true)
        ];
        $this->db->where('id_kategori', $this->input->post('id_kategori'));
        $this->db->update('kategori', $data);
    }

    public function hapus_kategori($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

    public function get_kategori_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM kategori WHERE id_kategori = $id");
        return $query->row();
    }
}
