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
            echo "<script>
            alert('Pesanan Berhasil Diproses');
            window.location.href = '".base_url('welcome')."';
            </script>";
        } else {
            echo "<script>
            alert('Pesanan Gagal Diproses!');
            window.location.href = '".base_url('welcome')."';
            </script>";
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

    public function updateDataMember() {
        
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $newPassword = $this->input->post('newPassword');
        $newPassword1 = $this->input->post('newPassword1');
        $password = $this->input->post('password');
        $verifPassword = $this->input->post('verifPassword');

        if ($password == $verifPassword) {

            if ($newPassword == "" AND $newPassword == "") {
                $data = array(
                    'nama' => $nama,
                    'username' => $username
                );
            } else {
                if ($newPassword != $newPassword1) {
                    echo "<script>
                    alert('Password baru tidak sama!');
                    window.location.href = '".base_url('dashboard/updateDataDiri')."';
                    </script>";
                } else {
                    $data = array(
                        'nama' => $nama,
                        'username' => $username,
                        'password' => $newPassword1,
                    );
                }
            }

            $where = array(
                'id_member' => $this->session->userdata('id_member')
            );
    
            $this->model_member->update_data($where, $data, 'tb_member');

            echo "<script>
                    alert('Berhasil Merubah Data!');
                    window.location.href = '".base_url('dashboard/updateDataDiri')."';
                    </script>";
        } else {
            echo "<script>
                    alert('Password salah atau kosong!');
                    window.location.href = '".base_url('dashboard/updateDataDiri')."';
                    </script>";
        }



    }

    public function faq()
    {
        $this->load->view('templates/header');
        $this->load->view('faq');
        $this->load->view('templates/footer');
    }
}
