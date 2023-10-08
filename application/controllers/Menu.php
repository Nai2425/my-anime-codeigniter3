<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(E_ALL);
ini_set('display_errors', 1);
#[AllowDynamicProperties]
class Menu extends CI_Controller
{

    public function menuView()
    {
        $data['animes'] =  $this->menu_Model->getAnimes();

        $this->load->view('templates/header');
        $this->load->view('pages/menu', $data);
        $this->load->view('templates/footer');
    }
}
