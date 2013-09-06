<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Admin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->view('header');
      $this->load->view('admin_view', $data);
      $this->load->view('footer');
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }
  function add_donor(){
  	$data['title']	= "Add Donor";	
  	$this->load->view("header", $data);
	$this->load->view("add_donor", $data);
	$this->load->view("footer");
  }
  public function process_add_donor(){
  	$this->load->model('admin_m');
	$data["message"] = $this->admin_m->add_donor($_POST, $_FILES);
 	
	//add another?
	$data['title']	= "Add Donor";	
  	$this->load->view("header", $data);
	$this->load->view("add_donor", $data);
	$this->load->view("footer");
  }
  
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('admin', 'refresh');
  }


}

?>
