<?php

class Petani_Model extends CI_model{
    public function getAllPetani()
    {
        return $query = $this->db->get('subak') -> result_array();
    }
}

?>