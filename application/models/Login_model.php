<?php
class Login_model extends CI_model
{
public function validatelogin($email,$password,$signer){

$query=$this->db->where(['email'=>$email,'password'=>$password,'signer'=>$signer]);
	$account=$this->db->get('item')->row();
	// redirect('');
	if($account!=NULL){

return $account; 
}
return NULL;
}
}
?>