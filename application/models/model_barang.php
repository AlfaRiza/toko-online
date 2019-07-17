<?php

class model_barang extends CI_Model
{
    function tampilData()
    {
        return $this->db->get('tb_barang');
    }
}
