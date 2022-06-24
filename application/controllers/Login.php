<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login');
	}
	public function log()
	{
// print_r($_POST);
if($this->input->post('submit'))
	{
		
	$signer=$this->input->post('signer');
	if($signer==0)
		{
	$email=$this->input->post('email');
	$password=$this->input->post('password');

 	$this->load->library('session');
$this->session->set_userdata('loginemailsave',$email);
$loginemailsave=$this->session->userdata('loginemailsave');

	$this->load->model('Login_model');
	
$user=$this->Login_model->validatelogin($email,$password,$signer);

if($user==true)
{ ?>
	<script type="text/javascript">
	alert("Login Successfully");
	location.assign("<?php echo site_url('Foodadd'); ?>");
</script>
	<!-- redirect('Foodadd'); -->
	<?php
	}
	else
	{
		$this->load->view('login');
	}
}
 	
 	if($signer==1)
 		{
 			// echo"dddddddddddddddddd";
 	$email=$this->input->post('email');
 	$password=$this->input->post('password');

 	$this->load->library('session');
$this->session->set_userdata('savedtrustemail',$email);
$trustemail=$this->session->userdata('savedtrustemail');

 	$this->load->model('Login_model');
 $user=$this->Login_model->validatelogin($email,$password,$signer);

 if($user==true)
 {?>
	<script type="text/javascript">
	alert("Login Successfully");
	location.assign("<?php echo site_url('Display'); ?>");
</script>
 	<!-- redirect('Display'); -->
 	<?php
 }
else
 	{
 		$this->load->view('login');
 }
 }
}
}
}
?>