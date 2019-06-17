<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dasboard
 *
 * @author ZAYEED AN NAHYAN
 */
class dasboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['siswa/M_dasboard' => 'administrator/M_dasboard', 'M_User' => 'M_User']);
        $this->result = $this->M_User->siswa();
    }

    function index() {

        $data['title'] = 'Dashboard Siswa';
        $data['content'] = $this->load->view('siswa/V_dasboard', $data, true);
        $this->load->view('template', $data);
    }

}
