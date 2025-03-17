<?php
    class Petani extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this -> load -> model ('Petani_Model');

        }

        public function index(){
            $this -> load -> model('Petani_Model');
            $data['judul'] = 'Data Petani';
            $data['pendataan'] = $this->Petani_Model-> getAllPetani();
            $this -> load -> view ('templates/header', $data);
            $this -> load -> view ('Petani/index', $data);
            $this -> load -> view ('templates/footer');

        }        

    }
?>