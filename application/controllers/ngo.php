<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ngo extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ngo_model');
  }
	public final function index()
	{
    $data['ngos'] = $this->ngo_model->get_all();
		$this->show_view('index', $data);
	}
  public final function create()
  {
    if($_POST)
    {
      $this->ngo_model->create();
    }
    else
    {
      $this->show_view('create', null);
    }
  }
  public final function read($id)
  {
    if($_POST)
    {
      
    }
    else
    {
      $this->show_view('read');
    }
  }
  public final function update($id)
  {
    if($_POST)
    {
      
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
      
    }
  }
  private final function show_view($page_name, $data)
  {
    $this->load->view('templates/header', $data);
    $this->load->view('ngos/' . $page_name, $data);
    $this->load->view('templates/footer', $data);
  }
}