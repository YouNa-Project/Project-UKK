<?php
defined('BASEPATH') or exit('No direct script access allowed');

class protect
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    public function protect()
    {
        if ($this->ci->session->userdata('id') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum login');
            redirect('auth/loginPegawai');
        }
    }
   
}

/* End of file protect.php */
