<?php
class insert_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($username, $email, $password,$id){
// Inserting in Table(students) of Database(college)

		
		$data = array(
			'username'   => $username,
			'email'      => $email,
			'password'   => $this->hash_password($password),
			'id' => $id,
		);
		
		return $this->db->insert('users', $data);
		

}
}
?>