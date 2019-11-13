<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['page_title'] = 'Dashboard - Next Community';
        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('user/main/index', $data);
        $this->load->view('user/footer');
    }
}
