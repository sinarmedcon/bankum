<?php 


class Auth extends CI_Controller{

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

    public function admLogEnter()
    {
        
    }

    public function legalitas()
    {
        $t['title'] = 'Bankum :: Legalitas';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/legalitas');
        $this->load->view('auth/template/footer');
    }

    public function masuk()
    {
        $t['title'] = 'Bankum :: Masuk';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/masuk');
        $this->load->view('auth/template/footer');
    }
}
