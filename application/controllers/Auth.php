<?php

class Auth extends CI_Controller
{
    public function index()
    {
        show_404();
    }

    public function login()
    {
        $this->load->model('auth_model');
        $this->load->library('form_validation');


        $rules = $this->auth_model->rules();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() === FALSE) {
            return $this->style_admin->load('style_admin', 'admin/login_admin');
        }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->auth_model->login($username, $password)) {
            redirect('admin');
        } else {
            $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
        }

        $this->style_admin->load('style_admin', 'admin/login_admin');
    }


    public function logout()
    {
        $this->load->model('auth_model');
        $this->auth_model->logout();
        redirect(site_url('auth/login'));
    }
}