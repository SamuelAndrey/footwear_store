<?php

class Model_Kategori extends CI_Model{
    public function data_sepatu(){
        return $this->db->get_where("tb_barang", array('kategori' => 'sepatu'));
    }
    public function data_sandal(){
        return $this->db->get_where("tb_barang", array('kategori' => 'sandal'));
    }
    public function data_kaos_kaki(){
        return $this->db->get_where("tb_barang", array('kategori' => 'kaos kaki'));
    }
}