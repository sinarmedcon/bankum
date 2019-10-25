<?php

class Blog extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model', 'blog');
    }

    public function index()
    {
        if($this->input->cookie('blog_admin'))
        {
            $cookie = $this->input->cookie('blog_admin');
            $get = $this->blog->data_blogger($cookie);

            foreach($get->result() as $row)
            {
                $nama = $row->nama;
                $photo = $row->photo;

                $t = [
                    'nama' => $nama,
                    'photo' => $photo,
                    'cookie' => $cookie,
                    'title' => 'Bankum :: Blogger'
                ];
                $this->load->view('blog/template/header', $t);
                $this->load->view('blog/index/main');
                $this->load->view('blog/template/footer');
            }
        } else {
            redirect('auth/masuk');
        }
    }

    public function jadwal()
    {
        if($this->input->cookie('blog_admin'))
        {
            $cookie = $this->input->cookie('blog_admin');
            $get = $this->blog->data_blogger($cookie);

            foreach($get->result() as $row)
            {
                $nama = $row->nama;
                $photo = $row->photo;

                $t = [
                    'nama' => $nama,
                    'photo' => $photo,
                    'cookie' => $cookie,
                    'title' => 'Bankum :: Jadwal'
                ];
                $this->load->view('blog/template/header', $t);
                $this->load->view('blog/index/jadwal');
                $this->load->view('blog/template/footer');
            }
        } else {
            redirect('auth/masuk');
        }
    }

    public function tulis()
    {
        if($this->input->cookie('blog_admin'))
        {
            $cookie = $this->input->cookie('blog_admin');
            $get = $this->blog->data_blogger($cookie);

            foreach($get->result() as $row)
            {
                $nama = $row->nama;
                $photo = $row->photo;

                $t = [
                    'nama' => $nama,
                    'photo' => $photo,
                    'cookie' => $cookie,
                    'title' => 'Bankum :: Tulis Artikel'
                ];
                $this->load->view('blog/template/header', $t);
                $this->load->view('blog/index/tulis');
                $this->load->view('blog/template/footer');
            }
        } else {
            redirect('auth/masuk');
        }
    }
}