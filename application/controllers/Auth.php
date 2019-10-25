<?php 


class Auth extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
        $this->load->library('form_validation');
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

    public function legalitas()
    {
        $t['title'] = 'Bankum :: Legalitas';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/legalitas');
        $this->load->view('auth/template/footer');
    }

    public function masuk()
    {
        if($this->input->cookie('blog_admin'))
        {
            redirect('blog');
        } else {
            $t['title'] = 'Bankum :: Masuk';
            $this->load->view('auth/template/header', $t);
            $this->load->view('auth/index/masuk');
            $this->load->view('auth/template/footer');
        }
    }

    public function proses_masuk()
    {
        $config = [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'Kata Sandi',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE)
        {
            $t['title'] = 'Validation Error!';
            $this->load->view('auth/template/header', $t);
            $this->load->view('auth/index/masuk');
            $this->load->view('auth/template/footer');
        } else {
            $username = md5($this->input->post('username'));
            $password = md5($this->input->post('password'));

            $cek = $this->auth->validasi_login($username, $password);

            if($cek->num_rows()>0)
            {
               foreach($cek->result() as $row)
               {
                   $userid = $row->userid;
                   $cookie = [
                    'name' => 'blog_admin',
                    'value' => $userid,
                    'expire' => '86400',
                    'secure' => TRUE
                    ];
                    $this->input->set_cookie($cookie);
                    redirect('blog');
               } 
            } else {
                $t['title'] = 'Gagal Masuk ! Silakan Coba Lagi Nanti';
                $this->load->view('auth/template/header', $t);
                $this->load->view('auth/index/masuk');
                $this->load->view('auth/template/footer');
            }
        }
    }

    public function tentang_kami()
    {
        $t['title'] = 'Bankum :: Tentang Kami';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/tentang_kami');
        $this->load->view('auth/template/footer');
    }

    public function paralegal()
    {
        $t['title'] = 'Bankum :: Paralegal';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/paralegal');
        $this->load->view('auth/template/footer');
    }

}
