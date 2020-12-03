<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // keamanan website : folder helper fungsi disperindag
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->db->get('user')->num_rows();
        $data['industri'] = $this->db->get('industri')->num_rows();
        $data['kecamatan'] = $this->db->get('kecamatan')->num_rows();

        $data['setKecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['setJenis'] = $this->db->get('jenis')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }



    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Berhasil Ditambahkan!</div>');
            redirect('admin/role');
        }
    }

    public function editRole()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $data = ['role' => $this->input->post('role')];

            $this->db->where('id', $_POST['id']);
            $this->db->update('user_role', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Berhasil Di Update!</div>');
            redirect('admin/role');
        }
    }

    public function hapusRole($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        if ($id == "") {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('user_role');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Role berhasil dihapus!</div>'
            );

            redirect('admin/role');
        }
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        // akses member disembunyikan pada menu role
        $this->db->where('id !=', 1);

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {

        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses telah diubah</div>');
    }


    // PETUGAS
    public function petugas()
    {
        $data['title'] = 'Daftar Petugas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/petugas', $data);
        $this->load->view('templates/footer');
    }

    public function editPetugas()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Daftar Petugas';
        $data['petugas'] = $this->db->get_where('user')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('desa', 'Desa', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/petugas', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_user' => $this->input->post('id_user'),
                'name' => $this->input->post('name'),
                'desa' => $this->input->post('desa'),
                'kecamatan' => $this->input->post('kecamatan')
            ];

            $this->db->where('id_user', $data['id_user']);
            $this->db->update('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Petugas Berhasil Di Edit !</div>');
            redirect('admin/petugas');
        }
    }


    public function hapusPetugas($id_user)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->db->get('user')->result_array();
        if ($id_user == "") {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/petugas', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->where('id_user', $id_user);
            $this->db->delete('user');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Petugas berhasil dihapus!</div>'
            );
            redirect('admin/petugas');
        }
    }



    // WILAYAH
    public function wilayah()
    {
        $data['title'] = 'Wilayah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['wilayah'] = $this->db->get('kecamatan')->result_array();

        $this->form_validation->set_rules('nama_kecamatan', 'NamaKecamatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/wilayah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kecamatan' => $this->input->post('nama_kecamatan'),
                'kode_kecamatan' => $this->input->post('kode_kecamatan'),
                'kode_pos' => $this->input->post('kode_pos')
            ];
            $this->db->insert('kecamatan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data kecamatan berhasil di input</div>');
            redirect('admin/wilayah');
        }
    }

    public function editWilayah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Wilayah';
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        $this->form_validation->set_rules('nama_kecamatan', 'Nama_Kecamatan', 'required');
        $this->form_validation->set_rules('kode_kecamatan', 'Kama_Kecamatan', 'required');
        $this->form_validation->set_rules('kode_pos', 'Kode_Pos', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/wilayah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kecamatan_id' => $this->input->post('kecamatan_id'),
                'nama_kecamatan' => $this->input->post('nama_kecamatan'),
                'kode_kecamatan' => $this->input->post('kode_kecamatan'),
                'kode_pos' => $this->input->post('kode_pos')
            ];

            $this->db->where('kecamatan_id', $data['kecamatan_id']);
            $this->db->update('kecamatan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kecamatan Berhasil Di Edit !</div>');
            redirect('admin/wilayah');
        }
    }

    public function hapusWilayah($kecamatan_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        if ($kecamatan_id == "") {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/wilayah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->where('kecamatan_id', $kecamatan_id);
            $this->db->delete('kecamatan');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Kecamatan berhasil dihapus!</div>'
            );

            redirect('admin/wilayah');
        }
    }
}
