<?php

class Home extends CI_Controller{
    public function index($nama = '')
    {
        $data['judul'] = 'Beranda';
        $this -> load -> view ('templates/header', $data);
        $this -> load -> view ('welcome_message');
        $this -> load -> view ('templates/footer');
    }
}