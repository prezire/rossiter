<?php
  class Person_Model extends CI_Model 
  {
    public $id;
    public $full_name;
    public $organization_id;
    public function __construct()
    {
      $this->load->database();
    }
    public function get_all()
    {
      $query = $this->db->get('persons');
      return $query->result_array();
    }
  }