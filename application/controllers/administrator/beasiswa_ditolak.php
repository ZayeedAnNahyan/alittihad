<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of beasiswa_ditolak
 *
 * @author ZAYEED AN NAHYAN
 */
class beasiswa_ditolak extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(['administrator/M_beasiswa_ditolak' => 'administrator/M_beasiswa_ditolak', 'M_User' => 'M_User']);
        $this->result = $this->M_User->admin();
    }

    function index() {
        $data['title'] = 'Beasiswa Ditolak';
        $data['content'] = $this->load->view('administrator/V_beasiswa_ditolak', $data, true);
        $this->load->view('template', $data);
    }
}
