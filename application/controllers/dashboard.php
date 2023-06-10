<?php

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if(!$this->session->userdata('id_member')){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"<span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('auth/login');
        }
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
                'id'      => $barang->id_brg,
                'qty'     => 1,
                'price'   => $barang->harga,
                'name'    => $barang->nama_brg,
                'gambar'  => $barang->gambar,
        );
        
        $this->cart->insert($data);
        redirect('dashboard/detail_keranjang');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');

        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');

        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');

            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }

    public function detail($id_brg){
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');

        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }

    public function updateDataDiri(){
        $id_member = $this->session->userdata('id_member');
        $data['member'] = $this->model_member->getDataMember($id_member);
        $this->load->view('templates/header');
        $this->load->view('update_data_diri', $data);
        $this->load->view('templates/footer');
    }

    public function updateMember() {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'username' => $username,
            'password' => $password,
        );

        $where = array(
            'id_member' => $this->session->userdata('id_member')
        );

        $this->model_member->update_data($where, $data, 'tb_member');
        redirect('admin/data_barang/index');

    }
}
