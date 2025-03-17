<?php

class Pagination extends CI_Controller {
    public function pagination(){
        $this->load->library('pagination');

        $config['base_url'] = 'http://example.com/index.php/test/page/';
        $config['total_rows'] = 200;
        $config['per_page'] = 20;

        $this->pagination->initialize($config);

        echo $this->pagination->create_links();
    }
}
