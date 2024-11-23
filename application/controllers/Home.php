<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('awal');
        }
    }

    public function index()
    {
        $data['ciri']       = $this->db->get('tb_ciri')->result_array();
        $data['judul']      = 'Administrator';
        $data['sub_judul']  = 'Administrator';
        $this->load->view('template/v_header', $data);
        $this->load->view('template/v_sidebar');
        $this->load->view('v_home', $data);
        $this->load->view('template/v_footer');
    }
}
