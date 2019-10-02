<?php 


class Auth extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
    }

    public function index()
    {
        $t['title'] = 'Selamat Datang di Bankum';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/main');
        $this->load->view('auth/template/footer');
    }

    public function blog()
    {
        $t['title'] = 'Bankum :: Blog';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/blog');
        $this->load->view('auth/template/footer');
    }

    public function gabung()
    {
        $t['title'] = 'Bankum :: Gabung';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/gabung');
        $this->load->view('auth/template/footer');
    }
}
