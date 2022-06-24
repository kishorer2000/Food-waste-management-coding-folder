<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foodproviders extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()

{
	// $uid=$_GET['foreignkey'];
	// // echo $uid;
	// // die;
	// $this->load->model('Foodproviders_Model');
	
	// // echo "<pre>";
	// // print_r($uid);
	// // die;
	// $get=$this->Foodproviders_Model->getregisterdetail($uid);
	// print_r($get);
	// die;
	// $this->load->view('foodproviders',['ud'=>$get]);

$uid=$_GET['foreignkey'];
// print_r($uid);
// die;
$uuid=$_GET['id'];
// print_r($uuid);
// die;


$this->load->model('Foodproviders_Model');
$udetail=$this->Foodproviders_Model->getregisterdetail($uid);
$getdetails=$this->Foodproviders_Model->getdetails($uuid);
// echo"<pre>";
// print_r($getdetails);
// echo stdClass Object['category'];
// die;

// $b=explode('=>',$getdetails);
// print_r($b);
// // $a=array($getdetails);
// die;
// $this->session->set_userdata('usdd',$getdetails);
// $usdd=$this->session->userdata('$getdetails');
// print_r($usdd);die;
$this->load->view('foodproviders',['ud'=>$udetail,'ged'=>$getdetails]);


// get detils of foods details for email

// print_r($usdd);
// $tr=explode('@',$userprovidedeatil);



// $uid=$_GET['foreignkey'];
// $getdetails=$this->Foodproviders_Model->getdetails($uid);
// $this->load->view('foodproviders',['ged'=>$getdetails]);
}
}
?>

