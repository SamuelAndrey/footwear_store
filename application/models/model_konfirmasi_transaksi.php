<?php

class model_konfirmasi_transaksi extends CI_Model {
    public function tampil_data() {
        $this->db->order_by('id', 'desc');
        $result = $this->db->get('tb_invoice');
        if ($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice){
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
        if ($result->num_rows() > 0){
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice){
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
        if ($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
    }

    public function update($id_invoice) {
        $data = array(
            'status_konfirmasi' => '1'
        );
        
        $this->db->where('id', $id_invoice);
        $this->db->update('tb_invoice', $data);
    }

    public function reject($id_invoice) {
        $data = array(
            'status_konfirmasi' => '2'
        );
        
        $this->db->where('id', $id_invoice);
        $this->db->update('tb_invoice', $data);
    }
}