<?php

class Tentang extends CI_Controller {
	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('tentang/index');
        $this->load->view('templates/footer');
	}
}

