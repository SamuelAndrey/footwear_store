<?php

class model_member extends CI_Model {
    public function getDataMember($id_member) {
        $this->db->where('id_member', $id_member);
        $result = $this->db->get('tb_member');
        
        if ($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}