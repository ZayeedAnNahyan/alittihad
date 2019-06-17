<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_user
 *
 * @author ZAYEED AN NAHYAN
 */
class M_user extends CI_Model {

    function admin() {
        $exec = $this->db->select('*')
                ->from('login')
                ->where('login.nama', $this->session->userdata('nama'))
                ->where('login.level', 1)
                ->get()
                ->result();
        if ($exec == true) {
            return $exec;
        } else {
            $this->session->sess_destroy();
            redirect('Auth/login');
        }
    }

    function siswa() {
        $exec = $this->db->select('*')
                ->from('login')
                ->where('login.nama', $this->session->userdata('nama'))
                ->where('login.level', 2)
                ->get()
                ->result();
        if ($exec == true) {
            return $exec;
        } else {
            $this->session->sess_destroy();
            redirect('Auth/login');
        }
    }

    function ppdb() {
        $exec = $this->db->select('*')
                ->from('login')
                ->where('login.nama', $this->session->userdata('nama'))
                ->where('login.level', 3)
                ->get()
                ->result();
        if ($exec == true) {
            return $exec;
        } else {
            $this->session->sess_destroy();
            redirect('Auth/login');
        }
    }

}
