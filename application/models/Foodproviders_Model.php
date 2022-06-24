<?php
class Foodproviders_Model extends CI_model
{
 public function getregisterdetail($uid){
 	$ret=$this->db
 	              ->where('id',$uid)
 	              ->get('item');
 	                return $ret->row();                
 }

public function getdetails($uuid)
{
   $hey=$this->db 
            -> select('category,quantity,others')
           -> where('id',$uuid )
           -> get('fooditem');
            return $hey->row(); 
}

}
?>
