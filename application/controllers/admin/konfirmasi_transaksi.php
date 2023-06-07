<?php

class konfirmasi_transaksi extends CI_Controller {
	public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"<span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['invoice'] = $this->model_konfirmasi_transaksi->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/konfirmasi_transaksi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice){
        $data['invoice'] = $this->model_konfirmasi_transaksi->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_konfirmasi_transaksi->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_transaksi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function konfirmasi($id_invoice) {
        $data['invoice'] = $this->model_konfirmasi_transaksi->update($id_invoice);
        redirect('admin/konfirmasi_transaksi/index');
    }

    public function tolak($id_invoice) {
        $data['invoice'] = $this->model_konfirmasi_transaksi->reject($id_invoice);
        redirect('admin/konfirmasi_transaksi/index');
    }
}