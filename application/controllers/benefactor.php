<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Benefactor extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('benefactor_model');
  }
	public final function index()
	{
		$this->show_view('index');
	}
  public final function create()
  {
    if($_POST)
    {
      
    }
    else
    {
      $this->show_view('create');
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
  private final function show_view($page_name)
  {
    $this->load->view('templates/header');
    $this->load->view('benefactors/' . $page_name);
    $this->load->view('templates/footer');
  }
}