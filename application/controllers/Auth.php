<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email Tidak Boleh Kosong!',
            'valid_email' => 'Email yang Dimasukkan Salah!',
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'NextCom - Masuk';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('messages', '<div class="alert alert-danger" role="alert">
                    Password Salah. Silakan Coba Lagi.
                  </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('messages', '<div class="alert alert-danger" role="alert">
                Akun Anda Belum Teraktivasi. Silakan Melkaukan Aktivasi Melalui Email Anda.
              </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('messages', '<div class="alert alert-danger" role="alert">
            Email Anda Belum Terdaftar! Silakan Daftar Terlebih Dahulu.
          </div>');
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal', 'required|trim', [
            'required' => 'Tanggal Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email Tidak Boleh Kosong!',
            'valid_email' => 'Email yang Dimasukkan Salah!',
            'is_unique' => 'Email Sudah Terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'required' => 'Password Tidak Boleh Kosong!',
            'min_length' => 'Password Terlalu Pendek!',
            'matches' => 'Password Tidak Cocok!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Password Tidak Boleh Kosong!',
            'matches' => 'Password Tidak Cocok!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'NextCom - Daftar';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => 2,
                'active' => 1
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('messages', '<div class="alert alert-success" role="alert">
            Selamat! Akun Anda Sudah Terdaftar, Silakan Login.
          </div>');
            redirect('auth');
        }
    }
}
