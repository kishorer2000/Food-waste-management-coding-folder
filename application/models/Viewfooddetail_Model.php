<?php
class Viewfooddetail_Model extends CI_Model {
 
 function getdetails()
 {
  $query=$this->db->get('fooditem');
                return $query->result();   
 }
}
?>