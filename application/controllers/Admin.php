<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('Admin_models');

		// cek session yang login, 
		// jika session status tidak sama dengan session telah_login, berarti pengguna belum login
		// maka halaman akan di alihkan kembali ke halaman login.
		if($this->session->userdata('status')!="telah_login"){
			redirect(base_url().'auth?alert=belum_login');
        }
    
        $comment_table = "comment_table";
        $message_table = "message_table";
        $notification_table = "notification_table";
        $user_role_table = "user_role_table";
        $category_article = "category_article_table";
        $pages_table = "pages_table";
        $settings_table = "settings_table";
    }

    // main dashboard admin page
    public function index()
    {
        $data['page'] = 'dashboard';
        $user_table = "user";
        // function to get user profile by id user
        $where = array(
			'id_user' => $this->session->userdata('user_id')
		);
        $profile = $this->Admin_models->get_data($user_table, $where)->row();
        
        $data['page_title'] = 'Dashboard - Next Community';
        $data['profile'] = $profile;

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/main/index', $data);
        $this->load->view('admin/footer');
    }

    // user section on admin page
    public function user() 
    {
        $data['page'] = 'user';
        $user_table = "user";
        // function to get user profile by id user
        $where = array(
			'id_user' => $this->session->userdata('user_id')
		);
        $profile = $this->Admin_models->get_data($user_table, $where)->row();
        
        $data['profile'] = $profile;
        $data['page_title'] = 'User Pages - Next Community';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/user/index', $data);
        $this->load->view('admin/footer');
    }

    public function add_user() 
    {

    }

    public function edit_user() 
    {

    }

    public function update_user() 
    {

    }

    public function action_add_user() 
    {

    }

    public function delete_user() 
    {
        
    }
    
    // article section on admin page
    public function article() 
    {
        $data['page'] = 'article';
        $article_table = "article_table";
        $user_table = "user";
        // function to get user profile by id user
        $where = array(
			'id_user' => $this->session->userdata('user_id')
		);
        $profile = $this->Admin_models->get_data($user_table, $where)->row();
        
        $data['profile'] = $profile;
        $data['page_title'] = 'User Pages - Next Community';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/article/index', $data);
        $this->load->view('admin/footer');

    }

    public function add_article() 
    {

    }

    public function edit_article() 
    {

    }

    public function update_article() 
    {

    }

    public function action_add_article() 
    {

    }

    public function delete_article() 
    {
        
    }

    // user role section on admin page
    public function user_role() 
    {
        $data['page'] = 'user_role';
        $user_table = "user";
        // function to get user profile by id user
        $where = array(
			'id_user' => $this->session->userdata('user_id')
		);
        $profile = $this->Admin_models->get_data($user_table, $where)->row();
        
        $data['profile'] = $profile;
        $data['page_title'] = 'User Pages - Next Community';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/user_role/index', $data);
        $this->load->view('admin/footer');
    }

    public function add_user_role() 
    {

    }

    public function edit_user_role() 
    {

    }

    public function update_user_role() 
    {

    }

    public function action_add_user_role() 
    {

    }

    public function delete_user_role() 
    {

    }


    // category article section on admin page
    public function category_article() 
    {
        $data['page'] = 'category_article';
        $user_table = "user";
        // function to get user profile by id user
        $where = array(
			'id_user' => $this->session->userdata('user_id')
		);
        $profile = $this->Admin_models->get_data($user_table, $where)->row();
        
        $data['profile'] = $profile;
        $data['page_title'] = 'User Pages - Next Community';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/category_article/index', $data);
        $this->load->view('admin/footer');
    }

    public function add_category_article() 
    {

    }

    public function edit_category_article() 
    {

    }

    public function update_category_article() 
    {

    }

    public function action_add_category_article() 
    {

    }

    public function delete_category_article() 
    {

    }

    // settings section on admin page
    public function settings() 
    {
        $data['page'] = 'settings';
        $user_table = "user";
        // function to get user profile by id user
        $where = array(
			'id_user' => $this->session->userdata('user_id')
		);
        $profile = $this->Admin_models->get_data($user_table, $where)->row();
        
        $data['profile'] = $profile;
        $data['page_title'] = 'User Pages - Next Community';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/settings/index', $data);
        $this->load->view('admin/footer');
    }

    public function update_settings() 
    {

    }

}
