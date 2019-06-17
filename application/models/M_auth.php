<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_auth
 *
 * @author ZAYEED AN NAHYAN
 */
class M_auth extends CI_Model {

    function proses($data) {
        $exec = $this->db->select('*')
                ->from('login')
                ->where('login.nama', $data['username'])
                ->where('login.password', $data['password'])
                ->get()
                ->result();
        return $exec;
    }

}
