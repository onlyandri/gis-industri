<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Industri_model extends CI_Model
{
    public function read($id)
    {
        $this->db->where('industri_id', $id); //mengambil data koordinat jembatan berdasarkan id_koordinatjembatan
        $query = $this->db->get('koordinat');
        return $query;
    }
}
