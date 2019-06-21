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
        $this->load->model(['ppdb/M_dasboard' => 'ppdb/M_dasboard', 'M_User' => 'M_User']);
        $this->result = $this->M_User->ppdb();
    }

    function index() {
        $data['title'] = 'Dashboard PPDB';
        $data['content'] = $this->load->view('ppdb/V_dasboard', $data, true);
        $this->load->view('template', $data);
    }

}
