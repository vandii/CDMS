<?php

class register extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
}
function index() {
$this->load->helper('form');
	$this->load->view('header');
//Including validation library

$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dname', 'Username');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email');

//Validating Mobile no. Field
$this->form_validation->set_rules('dmobile', 'password');

//Validating Address Field
$this->form_validation->set_rules('daddress', 'ID');
//$this->form_validation->set_rules('type','Type')

print $this->form_validation->run();

if ($this->form_validation->run() == FALSE) {
$this->load->view('insert_view');
} else {
echo " in";
//Setting values for tabel columns

$data = array(
$username => $this->input->post('dname'),
$email => $this->input->post('demail'),
$password => $this->input->post('dmobile'),
$id => $this->input->post('daddress')

);

echo $data;

//Transfering data to Model
$this->insert_model->form_insert($username, $email, $password,$id);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('insert_view', $data);
$this->load->view('footer');
}
}

}

?>