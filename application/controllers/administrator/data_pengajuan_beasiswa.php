<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of data_pengajuan_beasiswa
 *
 * @author ZAYEED AN NAHYAN
 */
class data_pengajuan_beasiswa extends CI_Controller {
     public function __construct() {
        parent::__construct();
        $this->load->model(['administrator/M_data_pengajuan' => 'administrator/M_data_pengajuan', 'M_User' => 'M_User']);
        $this->result = $this->M_User->admin();
    }

    function index() {
        $data['title'] = 'Data Pengajuan Beasiswa';
        $data['content'] = $this->load->view('administrator/V_data_pengajuan', $data, true);
        $this->load->view('template', $data);
    }
}
