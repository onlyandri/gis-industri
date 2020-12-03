<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // keamanan website : folder helper fungsi disperindag
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function editprofile()
    {

        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editprofile', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // check gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile anda berhasil diubah! </div>');
            redirect('user');
        }
    }


    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[4]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[4]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah! </div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru harus berbeda dengan password lama! </div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);


                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diganti! </div>');
                    redirect('user/changepassword');
                }
            }
        }
    }


    public function Industri()
    {
        $data['title'] = 'Input Data Industri';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['setKecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['setJenis'] = $this->db->get('jenis')->result_array();
        $data['Industri'] = $this->db->get('industri')->result_array();

        // $this->load->model('Wilayah_model', 'nama_kecamatan');
        // $data['inputindustri'] = $this->nama_kecamatan->getIndustriWilayah();
        $this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/Industri', $data);
            $this->load->view('templates/footer');
        } else {
            $config['upload_path'] = './img-industri';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $this->load->library('upload', $config);
            $this->upload->do_upload('images');
            $new_image = $this->upload->data('file_name');
            $data = [
                'id_user' => $this->input->post('id_user'),
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'tlp' => $this->input->post('tlp'),
                'kecamatan' => $this->input->post('kecamatan'),
                'desa' => $this->input->post('desa'),
                'dukuh' => $this->input->post('dukuh'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'jalan' => $this->input->post('jalan'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'jenis' => $this->input->post('jenis'),
                'merk' => $this->input->post('merk'),
                'pemasaran' => $this->input->post('pemasaran'),
                'pendapatan' => $this->input->post('pendapatan'),
                'images' => $new_image
            ];
            $this->db->insert('industri', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Industri berhasil di input</div>');
            redirect('user/Industri');
        }
    }

    public function editIndustri()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['Industri'] = $this->db->get('industri')->result_array();

        $this->form_validation->set_rules('nama_pemilik', 'NamaPemilik', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/Industri', $data);
            $this->load->view('templates/footer');
        } else {
            $config['upload_path'] = './img-industri';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $this->load->library('upload', $config);
            $this->upload->do_upload('images');
            $new_image = $this->upload->data('file_name');
            $data = [
                'industri_id' => $this->input->post('industri_id'),
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'tlp' => $this->input->post('tlp'),
                'kecamatan' => $this->input->post('kecamatan'),
                'desa' => $this->input->post('desa'),
                'dukuh' => $this->input->post('dukuh'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'jalan' => $this->input->post('jalan'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'jenis' => $this->input->post('jenis'),
                'merk' => $this->input->post('merk'),
                'pemasaran' => $this->input->post('pemasaran'),
                'pendapatan' => $this->input->post('pendapatan'),
                'images' => $new_image
            ];
            $this->db->where('industri_id', $data['industri_id']);
            $this->db->update('industri', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Indutri Berhasil Di Edit !</div>');
            redirect('user/Industri');
        }
    }

    public function hapusIndustri($industri_id, $images)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['Industri'] = $this->db->get('industri')->result_array();
        if ($industri_id == "") {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/Industri', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->where('industri_id', $industri_id);
            $this->db->delete('industri');
            unlink(FCPATH . 'img-industri/' . $images);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Industri berhasil dihapus!</div>'
            );

            redirect('user/Industri');
        }
    }
}
