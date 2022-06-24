<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('register');
	}

	// public function validation()
	// {
	// $this->form_validation->set_rules('email','email','required');
	// if($this->form_validation->run())
	// {
	// $email=$this->input->post('email');
	// }
	// else
	// {
	// $this->index();
	// }

	public function reg()
	{
// echo "<pre>";
// print_r($_POST);
// die;
		if($this->input->post('submit'))
	{
	$name=$this->input->post('name');
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$contactnumber=$this->input->post('contactnumber');
	$address=$this->input->post('address');
	$signer=$this->input->post('signer');

$this->load->library('session');
$this->session->set_userdata('saveemail',$email);
$post_array=$this->session->userdata('saveemail');

$this->load->model('Register_model');
$abc=$this->Register_model->insert($name,$email,$password,$contactnumber,$address,$signer);

if($abc==true)
{
	echo "not registered";
 }
else{ 
	?>	
<script type="text/javascript">
	alert("Rsgistered Successfully");
	location.assign("<?php echo site_url('login'); ?>");
</script>
<?php
//redirect('login');
} 
}



	}
	}
?>

