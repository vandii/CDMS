<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class prof extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
  	$this->load->view('header');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('id', 'Id');
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    // $this->form_validation->view('prof_view');
    $this->load->view('footer');

  }
  

}


?>