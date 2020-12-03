<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koordinat extends CI_Controller
{

public function __construct()
{
    parent::__construct();
        // load model
        $data['subMenu'] = $this->menu->getSubMenu();
}


}
