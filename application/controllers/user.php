<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }
	public final function index()
	{
    $data['users'] = $this->user_model->get_all();
    show_layout_view($this, 'users', 'index', $data);
	}
  public final function create()
  {
    if($_POST)
    {
      $uid = $this->user_model->create();
      if($this->db->trans_status())
      {
        redirect('user/read/' . $uid);
      }
      else
      {
        //
      }
    }
    else
    {
      $data['ngos'] = $this->user_model->get_organizations_by_ngos();
      $this->show_view('create', $data);
    }
  }
  public final function read($id)
  {
    $data['users'] = $this->user_model->read($id);
    $this->show_view('read', $data);
  }
  public final function update($id)
  {
    if($_POST)
    {
      $this->user_model->update(); 
    }
    else
    {
      $this->show_view('update');
    }
  }
  public final function delete()
  {
    if($_POST)
    {
      $this->user_model->delete();
    }
  }
  private final function show_view($page_name, $data)
  {
    $this->load->view('templates/header', $data);
    $this->load->view('users/' . $page_name, $data);
    $this->load->view('templates/footer', $data);
  }
}