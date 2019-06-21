<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_manajemen
 *
 * @author ZAYEED AN NAHYAN
 */
class user_manajemen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['administrator/M_usermanajemen' => 'M_usermanajemen', 'M_User' => 'M_User']);
        $this->result = $this->M_User->admin();
    }

    function index() {
        $data['title'] = 'User Manajemen';
        $data['value'] = $this->M_usermanajemen->Read();
        $data['content'] = $this->load->view('administrator/V_usermanajemen', $data, true);
        $this->load->view('template', $data);
    }

    function tambah() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('nisn'),
            'level' => $this->input->post('level'),
        );
        $this->M_usermanajemen->tambah($data);
    }

    function hapus($id) {
        $this->M_usermanajemen->hapus($id);
    }

    function edit($id) {
        $data['user'] = $this->M_usermanajemen->edit($id);
        $data['content'] =$this->load->view('administrator/V_edit', $data);
        $this->load->view('template', $data);
    }

}
