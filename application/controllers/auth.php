<?php

class Auth extends CI_Controller{

        public function loginMember()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username wajib diisi!'
        ]) ;
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password wajib diisi!'
        ]);
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        }
        else
        {
            $auth = $this->model_auth->cek_login_member();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah!
                </div>');

                redirect('auth/loginMember');
            } else{
                $this->session->set_userdata('nama', $auth->nama);
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('id_member', $auth->id_member);
                redirect('welcome');
            }
            
        }
    }

    public function loginAdmin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username wajib diisi!'
        ]) ;
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password wajib diisi!'
        ]);
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates_admin/headerLogin');
            $this->load->view('admin/form_login_admin');
            $this->load->view('templates_admin/footerLogin');
        }
        else
        {
            $auth = $this->model_auth->cek_login();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah!
                </div>');
                redirect('auth/loginAdmin');
            } else{
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch($auth->role_id){
                    case 1 : redirect('admin/dashboard_admin');
                    break;

                    case 2 : redirect('auth/loginAdmin');
                    break;

                    default: break;
                }
            }
            
        }
    }

    public function logout ()
    {
        $this->session->sess_destroy();
        redirect('auth/loginMember');
    }

    public function logoutAdmin ()
    {
        $this->session->sess_destroy();
        redirect('auth/loginAdmin');
    }
}