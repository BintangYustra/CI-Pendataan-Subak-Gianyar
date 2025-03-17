<?php

class Pengajuan extends CI_Controller {
	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('pengajuan/index');
        $this->load->view('templates/footer');
	}
}

