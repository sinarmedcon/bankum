<?php 


class Auth extends CI_Controller{
    public function index()
    {
        $t['title'] = 'Selamat Datang di Bankum';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/main');
        $this->load->view('auth/template/footer');
    }
}