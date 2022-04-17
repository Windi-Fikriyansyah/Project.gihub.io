<?php
class Home_model extends CI_Model{

    
    
public function tampil_data(){
        return $this->db->get('tb_nowplay')->result_array();
    }
}