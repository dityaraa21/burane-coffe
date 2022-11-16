<?php

class Model_menu extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_menu');
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function detail_menu($id_menu)
    {
        $result = $this->db->where('id_menu', $id_menu)->get('tb_menu');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function edit_menu($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
