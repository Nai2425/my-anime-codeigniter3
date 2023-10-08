<?php

class menu_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //retriving data from table
    public function getAnimes()
    {

        $this->db->select('*');
        $this->db->from('animes');
        $query = $this->db->get();
        return $query->result();
    }
}
