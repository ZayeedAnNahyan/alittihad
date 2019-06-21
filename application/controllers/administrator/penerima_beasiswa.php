<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of penerima_beasiswa
 *
 * @author ZAYEED AN NAHYAN
 */
class penerima_beasiswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(['administrator/M_penerima_beasiswa' => 'administrator/M_penerima_beasiswa', 'M_User' => 'M_User']);
        $this->result = $this->M_User->admin();
    }

    function index() {
        $data['title'] = 'Beasiswa Diterima';
        $data['content'] = $this->load->view('administrator/V_penerima_beasiswa', $data, true);
        $this->load->view('template', $data);
    }
}
