<?php
class Foodadds_model extends CI_model
{
 public function getregisterdssetail($post_array){

$query=$this->db
				->where('email',$post_array)  
                 ->get('item');
                 // echo"<pre>";
                 // print_r($query);die;

return $query->row();      
	}
}
?>