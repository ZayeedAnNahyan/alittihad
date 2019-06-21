<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pengajuan_beasiswa
 *
 * @author ZAYEED AN NAHYAN
 */
class pengajuan_beasiswa extends CI_Controller{
   public function __construct() {
        parent::__construct();
        $this->load->model(['siswa/M_pengajuan_beasiswa' => 'siswa/M_pengajuan_beasiswa', 'M_User' => 'M_User']);
        $this->result = $this->M_User->siswa();
    }

    function index() {
        $data['title'] = 'Pengajuan Beasiswa';
        $data['content'] = $this->load->view('siswa/V_pengajuan_beasiswa', $data, true);
        $this->load->view('template', $data);
    }
}
