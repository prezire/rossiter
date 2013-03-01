<?php
  class Organization_Model extends CI_Model 
  {
    public function __construct()
    {
      $this->load->database();
    }
    public function get_all()
    {
      $query = $this->db->get('organizations');
      return $query->result_array();
    }
  }