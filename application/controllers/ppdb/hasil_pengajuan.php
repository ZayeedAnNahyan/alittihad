<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hasil_pengajuan
 *
 * @author ZAYEED AN NAHYAN
 */
class hasil_pengajuan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['ppdb/M_hasil_pengajuan' => 'ppdb/M_hasil_pengajuan', 'M_User' => 'M_User']);
        $this->result = $this->M_User->ppdb();
    }

    function index() {
        $data['title'] = 'Hasil Pengajuan';
        $data['content'] = $this->load->view('ppdb/V_hasil_pengajuan', $data, true);
        $this->load->view('template', $data);
    }

}
