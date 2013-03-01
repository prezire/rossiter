<?php
  require_once APPPATH . 'models/organization_model.php';
  class Ngo_Model extends Organization_Model 
  {
    public function __construct()
    {
      parent::__construct();
    }
    public final function create()
    {
      $i = $this->input;
      $this->db->trans_start();
      $a = array
      (
        'name' => $i->post('name'),
        'description' => $i->post('description'),
        'email' => $i->post('email'), 
        'landline' => $i->post('landline'),
        'fax' => $i->post('fax'),
        'address' => $i->post('address'),
        'industry' => $i->post('industry')
      );
      $this->db->insert('organizations', $a);
      $oid = $this->db->insert_id();
      //
      $a = array
      (
        'organization_id' => $oid,
        'government_registration_id' => $i->post('government_registration_id')
      );
      $this->db->insert('ngos', $a);
      $this->db->trans_complete();
    }
    public final function get_all()
    {
      $this->db->select('*');
      $this->db->from('organizations');
      $this->db->join('ngos', 'organizations.id = ngos.organization_id');
      $query = $this->db->get();
      return $query->result_array();
    }
  }