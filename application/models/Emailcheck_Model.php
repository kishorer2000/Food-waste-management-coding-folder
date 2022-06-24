<?php
class Emailcheck_Model extends CI_model
{
	public function emailcheck($email)
{

$query=$this->db
				->where('email',$email)  
                 ->get('item');
            if($query==0)
            {
            	echo "0";
            }
            else
            {
            	echo "1";
            }

return $query->result();      
	}
}
?>