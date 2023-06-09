<?php

class model_laporan extends CI_Model {
    public function getRequest() {
        $this->db->where('status_konfirmasi', '2');
        $this->db->or_where('status_konfirmasi', '0');
        
        $result = $this->db->get('tb_invoice');
        if ($result->num_rows() > 0){
            return $result->num_rows();
        } else {
            return 0;
        }
    }

    public function getIncome() {
        $month_now = date('m');
        $this->db->where('MONTH(batas_bayar)', $month_now);
        $this->db->where('status_konfirmasi', '1');
        $result = $this->db->get('tb_invoice');
        
        if ($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
    }
}