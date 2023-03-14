<?php

class Model_Kategori extends CI_Model{
    public function data_sepatu(){
        return $this->db->get_where("tb_barang", array('kategori' => 'sepatu'));
    }
    public function data_sandal(){
        return $this->db->get_where("tb_barang", array('kategori' => 'sandal'));
    }
    public function data_kaos_kaki(){
        return $this->db->get_where("tb_barang", array('kategori' => 'kaos_kaki'));
    }
    public function data_elektronik(){
        return $this->db->get_where("tb_barang", array('kategori' => 'elektronik'));
    }
    public function data_pakaian_pria(){
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian pria'));
    }
    public function data_pakaian_wanita(){
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian wanita'));
    }
    public function data_pakaian_anak_anak(){
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian anak_anak'));
    }
    public function data_peralatan_olahraga(){
        return $this->db->get_where("tb_barang", array('kategori' => 'peralatan olahraga'));
    }
}