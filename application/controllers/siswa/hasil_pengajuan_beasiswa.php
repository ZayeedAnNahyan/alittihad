<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hasil_pengajuan_beasiswa
 *
 * @author ZAYEED AN NAHYAN
 */
class hasil_pengajuan_beasiswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(['siswa/M_hasil_pengajuanbeasiswa' => 'siswa/M_hasil_pengajuanbeasiswa', 'M_User' => 'M_User']);
        $this->result = $this->M_User->siswa();
    }

    function index() {
        $data['title'] = 'Hasil Pengajuan Beasiswa';
        $data['content'] = $this->load->view('siswa/V_hasil_pengajuanbeasiswa', $data, true);
        $this->load->view('template', $data);
    }
}
