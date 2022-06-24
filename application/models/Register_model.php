<?php
class Register_model extends CI_model
{
	public function insert($name,$email,$password,$contactnumber,$address,$signer){
$data=array(
			'name'=>$name,
			'email'=>$email,
			'password'=>$password,
			'contactnumber'=>$contactnumber,
			'address'=>$address,
			'signer'=>$signer,
		);
$sql_query=$this->db->insert('item',$data);
if($sql_query)
{
echo "<script>alert(Registered);</script>";
}
else{
	echo "not registered";
}
}
}
?>