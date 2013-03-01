<?php
  require_once APPPATH . 'models/person_model.php';
  require_once APPPATH . 'models/organization_model.php';
  require_once APPPATH . 'models/ngo_model.php';
  class User_Model extends Person_Model 
  {
    public $username;
    public $password;
    public $email;
    public $person_id;
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
        'full_name' => $i->post('full_name'),
        'organization_id' => $i->post('organization_id')
      );
      $this->db->insert('persons', $a);
      $pid = $this->db->insert_id();
      //
      $a = array
      (
        'username' => $i->post('username'),
        'password' => $i->post('password'),
        'email' => $i->post('email'),
        'person_id' => $pid
      );
      $this->db->insert('users', $a);
      $uid = $this->db->insert_id();
      $this->db->trans_complete();
      return $uid;
    }
    public final function read($user_id)
    {
      $this->db->select('*');
      $this->db->from('persons');
      $this->db->join('users', 'persons.id = users.person_id');
      $this->db->join('organizations', 'persons.organization_id = organizations.id');
      $this->db->where('users.id', $user_id);
      $query = $this->db->get();
      return $query->result_array();
    }
    public final function get_all()
    {
      $this->db->select('*');
      $this->db->from('persons');
      $this->db->join('users', 'persons.id = users.person_id');
      $this->db->join('organizations', 'persons.organization_id = organizations.id');
      $query = $this->db->get();
      return $query->result_array();
    }
    public final function get_all_ngos()
    {
      $n = new Ngo_Model();
      return $n->get_all();
    }
    public final function get_organizations_by_ngos()
    {
      $this->db->select('*');
      $this->db->from('organizations');
      $this->db->join('ngos', 'organizations.id = ngos.organization_id');
      $query = $this->db->get();
      return $query->result_array();
    }
  }