<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public final function index()
	{
		$this->show_view('index');
	}
  public final function about_us()
  {
    $this->show_view('about_us');
  }
  public final function contact_us()
  {
    $this->show_view('contact_us');
  }
  public final function faqs()
  {
    $this->show_view('faqs');
  }
  public final function search()
  {
    $this->show_view('search');
  }
  public final function api()
  {
  $this->show_view('api');
  }
  public final function log($type)
  {
    switch($type)
    {
      case 'in':
        if($_POST)
        {
        
        }
        else
        {
          $this->show_view('login');
        }
      break;
      case 'out':
        session_start();
        $_SESSION['user'] = null;
        session_destroy();
      break;
    }
  }
  private final function show_view($page_name)
  {
    $this->load->view('templates/header');
    $this->load->view($page_name);
    $this->load->view('templates/footer');
  }
}