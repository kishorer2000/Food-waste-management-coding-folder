<?php
class Viewregisterdetail_Model extends CI_Model {
 
 function getdetails()
 {
  $query=$this->db->get('item');
                return $query->result();   
 }
}
?>