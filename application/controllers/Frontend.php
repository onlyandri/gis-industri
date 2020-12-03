<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Tampilan Depan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->db->get('user')->num_rows();
        $data['industri'] = $this->db->get('industri')->num_rows();
        $data['kecamatan'] = $this->db->get('kecamatan')->num_rows();
        $data['jenis'] = $this->db->get('jenis')->num_rows();

        $data['setKecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['setJenis'] = $this->db->get('jenis')->result_array();

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/navbar', $data);
        $this->load->view('frontend/index', $data);
        $this->load->view('frontend/footer');
    }
}
