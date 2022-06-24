<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foodadd extends CI_Controller {

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
		
		$post_array=$this->session->userdata('saveemail');
		// echo $post_array;


		$this->load->model('Foodadds_model');
		$udetail=$this->Foodadds_model->getregisterdssetail($post_array);
		// echo "<pre>";
		// print_r($udetail);
		// die;
$this->load->view('foodadd',['uid'=>$udetail]);
	}

	public function add()
	{
		
// echo "<pre>";
// print_r($_POST);
// die;
		if($this->input->post('submit'))
	{
	$category=$this->input->post('category');
	$quantity=$this->input->post('quantity');
	$others=$this->input->post('others');
	$foreignkey=$this->input->post('foreignkey');


	$this->load->library('session');

	// Session For Category;
$this->session->set_userdata('logincategory',$category);
$logincategory=$this->session->userdata('logincategory');

//  Session For quantity;
$this->session->set_userdata('loginquantity',$quantity);
$loginquantity=$this->session->userdata('loginquantity');

// Session For others
$this->session->set_userdata('loginothers',$others);
$loginothers=$this->session->userdata('loginothers');
	
$this->load->model('Foodadd_model');
$aaa=$this->Foodadd_model->insert($category,$quantity,$others,$foreignkey);
// redirect('Email');
if($aaa=true)
{ ?>
<script type="text/javascript">
	alert("Food Added Successfully");
	location.assign("<?php echo site_url('Email'); ?>");
</script>
<?php
}
else{
	redirect('foodadd');
}	



	}
	
	}
}
