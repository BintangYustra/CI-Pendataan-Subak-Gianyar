<?php

public function CountRow(){
    $this->db->select('pendataan');
    $this->db->from('subak');
    $id = $this->db->get()->num_rows();
    return $id;
}
