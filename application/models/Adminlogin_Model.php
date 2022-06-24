<?php
class Adminlogin_Model extends CI_model
{
	public function validatelogin($email,$password){

	$query=$this->db->where(['email'=>$email,'password'=>$password]);
		$account=$this->db->get('admin')->row();
		// redirect('');
		if($account!=NULL){

	return $account; 
	}
	return NULL;
}
}
?>