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

    public function elektronik(){
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');

        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_pria(){
        $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_wanita(){
        $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_anak_anak(){
        $data['pakaian_anak_anak'] = $this->model_kategori->data_pakaian_anak_anak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_anak_anak', $data);
        $this->load->view('templates/footer');
    }

    public function peralatan_olahraga(){
        $data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan_olahraga', $data);
        $this->load->view('templates/footer');
    }
}