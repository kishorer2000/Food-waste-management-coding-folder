<?php
class Foodadd_model extends CI_model
{
	public function insert($category,$quantity,$others,$foreignkey){
$data=array(
			'category'=>$category,
			'quantity'=>$quantity,
			'others'=>$others,
			'foreignkey'=>$foreignkey
		);
$sql_query=$this->db->insert('fooditem',$data);
}
}
?>