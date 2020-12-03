<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah_model extends CI_Model
{
    public function getIndustriWilayah()
    {
        $query = "SELECT `industri`.*, `kecamatan`.`nama_kecamatan`
                FROM `industri` JOIN `kecamatan`
                ON `industri`.`kecamatan_id` = `kecamatan`.`kecamatan_id` 
                ";
        return $this->db->query($query)->result_array();
    }
}
