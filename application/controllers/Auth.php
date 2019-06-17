<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author ZAYEED AN NAHYAN
 */
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_auth');
    }

    function Login() {
        if ($this->session->userdata('nama') == '') {
            $this->load->view('V_login');
        } else {
            if ($this->session->userdata('lvl') == 1) {
                redirect('administrator/dasboard/index', 'refresh');
            } elseif ($this->session->userdata('lvl') == 2) {
                redirect('siswa/dasboard/index', 'refresh');
            } elseif ($this->session->userdata('lvl') == 3) {
                redirect('ppdb/dasboard/index', 'refresh');
            }
        }
    }

    function proses() {
        $data = ['username' => $this->input->post('Username'), 'password' => $this->input->post('Password')];
        $exec = $this->M_auth->proses($data);
        if ($exec == TRUE) {
            $session = ['id' => $exec[0]->id, 'nama' => $exec[0]->nama, 'lvl' => $exec[0]->level];
            $this->session->set_userdata($session);
            if ($session['lvl'] == 1) {
                redirect('administrator/dasboard/index', 'refresh');
            } elseif ($session['lvl'] == 2) {
                redirect('siswa/dasboard/index', 'refresh');
            } elseif ($session['lvl'] == 3) {
                redirect('ppdb/dasboard/index', 'refresh');
            }
        } else {
            echo '<script>alert("maaf, username atau password anda salah, mohon periksa kembali");window.location.href="' . base_url('Auth/login/') . '"</script>';
        }
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('Auth/Login');
    }

}
