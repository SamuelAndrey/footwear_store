<?php

class Kategori extends CI_Controller{
    public function sepatu(){
        $data['sepatu'] = $this->model_kategori->data_sepatu()->result();
        $this->load->view('templates/header');

        $this->load->view('sepatu', $data);
        $this->load->view('templates/footer');
    }

    public function sandal(){
        $data['sandal'] = $this->model_kategori->data_sandal()->result();
        $this->load->view('templates/header');

        $this->load->view('sandal', $data);
        $this->load->view('templates/footer');
    }

    public function kaos_kaki(){
        $data['kaos_kaki'] = $this->model_kategori->data_kaos_kaki()->result();
        $this->load->view('templates/header');
 
        $this->load->view('kaos_kaki', $data);
        $this->load->view('templates/footer');
    }
}