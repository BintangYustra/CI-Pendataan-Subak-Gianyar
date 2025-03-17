<?php

class Regulasi extends CI_Controller {
	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('regulasi/index');
        $this->load->view('templates/footer');
	}
}

