<?php

class DataSubak extends CI_Controller {
	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('datasubak/index');
        $this->load->view('templates/footer');
	}
}

