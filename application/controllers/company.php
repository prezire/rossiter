<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {

	public function index()
	{
		$this->load->view('companies/index');
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
    $this->load->view('companies/' . $page_name);
    $this->load->view('templates/footer');
  }
}