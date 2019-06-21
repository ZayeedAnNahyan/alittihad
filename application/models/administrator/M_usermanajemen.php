<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_usermanajemen
 *
 * @author ZAYEED AN NAHYAN
 */
class M_usermanajemen extends CI_Model {

    function Read() {
        $exec = $this->db->select('*')
                ->from('login')
                ->where('status', 1)
                ->get()
                ->result();
        return $exec;
    }

    function tambah($data) {
        $this->db->trans_begin();
        $this->db->insert('login', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script> alert("User Gagal Ditambahkan"); window.location.href="' . base_url('administrator/user_manajemen/index') . '" </script>';
        } else {
            $this->db->trans_commit();
            echo '<script> alert("User Berhasil Ditambahkan"); window.location.href="' . base_url('administrator/user_manajemen/index') . '" </script>';
        }
    }

    function hapus($id) {
        $this->db->set('status',2);
        $this->db->where('id', $id);
        $this->db->update('login');
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script> alert("User Gagal Dihapus"); window.location.href="' . base_url('administrator/user_manajemen/index') . '" </script>';
        } else {
            $this->db->trans_commit();
            echo '<script> alert("User Berhasil Dihapus"); window.location.href="' . base_url('administrator/user_manajemen/index') . '" </script>';
        }
    }

    function edit($id) {
        $exec = $this->db->select('*')
                ->from('login')
                ->where('id', $id)
                ->get()
                ->result();
        return $exec;
    }

}
