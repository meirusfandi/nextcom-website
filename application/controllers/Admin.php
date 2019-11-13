<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // main dashboard admin page
    public function index()
    {
        $data['page_title'] = 'Dashboard - Next Community';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/main/index', $data);
        $this->load->view('admin/footer');
    }

    // user section on admin page
    public function user() {
        $data['page_title'] = 'User Pages - Next Community';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/user/index', $data);
        $this->load->view('admin/footer');
    }

    public function add_user() {

    }

    public function edit_user() {

    }

    public function update_user() {

    }

    public function action_add_user() {

    }

    public function delete_user() {
        
    }
    
    // article section on admin page
    public function article() {

    }

    public function add_article() {

    }

    public function edit_article() {

    }

    public function update_article() {

    }

    public function action_add_article() {

    }

    public function delete_article() {
        
    }

    // user role section on admin page
    public function user_role() {

    }

    public function add_user_role() {

    }

    public function edit_user_role() {

    }

    public function update_user_role() {

    }

    public function action_add_user_role() {

    }

    public function delete_user_role() {

    }


    // category article section on admin page
    public function category_article() {

    }

    public function add_category_article() {

    }

    public function edit_category_article() {

    }

    public function update_category_article() {

    }

    public function action_add_category_article() {

    }

    public function delete_category_article() {

    }

    // settings section on admin page
    public function settings() {

    }

    public function update_settings() {

    }

}
