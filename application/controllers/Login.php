<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul']      = 'Login Administrator';
            $data['sub_judul']  = 'Login Administrator';
            $this->load->view('template/v_header', $data);
            $this->load->view('v_login', $data);
        } else {
            // Jika validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $admin = $this->db->get_where('tb_admin', ['username' => $username])->row_array();
        $dokter = $this->db->get_where('tb_dokter', ['username' => $username])->row_array();


        if ($admin) {
            //Jika admin ada
            if ($password == $admin['password']) {
                //masukkan session
                $data = [
                    'id' => $admin['id_admin'],
                    'username' => $admin['username'],
                    'role' => "admin"
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Maaf password salah. Periksa kembali !</div>');
                redirect('login');
            }
        } else if ($dokter) {
            //Jika dokter ada
            if ($password == $dokter['password']) {
                //masukkan session
                $data = [
                    'id' => $dokter['id_dokter'],
                    'username' => $dokter['username'],
                    'role' => "dokter"
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Maaf password salah. Periksa kembali !</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Maaf username salah. Periksa kembali !</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Anda Berhasil Logout !</div>');
        redirect('awal');
    }

    public function edit($id_admin)
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['id_admin' => $id_admin])->row_array();
        $data['judul'] = 'Edit Data Admin';
        $data['sub_judul'] = 'Edit Data Admin';

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim');
        $this->form_validation->set_rules('password2', 'New Password', 'trim');
        $this->form_validation->set_rules('password3', 'Confirm New Password', 'trim|matches[password2]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/v_header', $data);
            $this->load->view('template/v_sidebar');
            $this->load->view('admin/v_editadmin', $data);
            $this->load->view('template/v_footer');
        } else {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);
            $password2 = $this->input->post('password2', true);
            $password3 = $this->input->post('password3', true);

            $input = [
                'username' => $username,
            ];

            // If the password fields are not empty, perform password validation and update
            if (!empty($password) || !empty($password2) || !empty($password3)) {
                // Check if the new password is the same as the old password
                if ($password == $password2 || $password == $password3) {
                    $this->session->set_flashdata('error', 'New Password must not be the same as the old password');
                    redirect('admin/edit/' . $id_admin);
                }

                // If the new passwords do not match
                if ($password2 != $password3) {
                    $this->session->set_flashdata('error', 'New Password and Confirm New Password do not match');
                    redirect('admin/edit/' . $id_admin);
                }

                // If the new password is empty
                if (empty($password2) || empty($password3)) {
                    $this->session->set_flashdata('error', 'New Password fields must not be empty');
                    redirect('admin/edit/' . $id_admin);
                }

                // Update the password in the input array
                $input['password'] = $password2;
            }


            $this->db->where('id_admin', $id_admin);
            $this->db->update('tb_admin', $input);
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data Admin Berhasil di Edit</div>');
            redirect('login');
        }
    }
}
