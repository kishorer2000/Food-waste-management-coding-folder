<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loggeremailsend extends CI_Controller {

public function index()
   {


$post_array=$this->session->userdata['savedtrustemail'];
$array1=array($post_array); 


 $to_email = 'kishore2000mca@gmail.com';
 $array2 = explode(',', $to_email);


$clean1 = array_diff($array1, $array2); 
$clean2 = array_diff($array2, $array1); 
$final_output = array_merge($clean1, $clean2);

$trustemail=$this->session->userdata('savedtrustemail');
$tr=explode('@',$trustemail);

            
$cate=$this->session->userdata('cate');
//print_r($cate);die;
$quant=$this->session->userdata('quant');
$oth=$this->session->userdata('oth');

// print_r($final_output );die;  

$message = '<html>
                         <head>
                        </head>
                         <center>
                         <body style="margin-top:50px;color:darkgreen">
                         <div style="background-color:#c8f3c8;height: 500px;width: 300px;border:2px solid darkgreen;box-shadow:1px 1px 10px 10px gray">

                             <h1>' . strtoupper($tr[0]) . ' Taken THe Food </h1> <br><br>
                            <h3> Category &nbsp;&nbsp;'.($cate).'</h3> <br><br>
                             <h3> Quantity &nbsp;&nbsp; '. ($quant).'</h3> <br><br>
                              <h3> Others &nbsp;&nbsp; '. ($oth).'</h3> <br><br>

                             <img width="auto" src="image/one.jpg" width="auto" height="auto">
                         </div>
                         </body>
                         </center>
                         </html>';
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'kishore2000mca@gmail.com', // change it to yours
            'smtp_pass' => 'Ki09042000@', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
       
        $this->load->library('encryption');
        $this->email->initialize($config);

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('kishore2000mca@gmail.com','Kishore'); // change it to yours

        $this->email->to($final_output);// change it to yours
       
        // $this->email->cc('nainarmy412@gmail.com,');
        $this->email->subject('Food Picked');
        $this->email->message($message);

       $dia= $this->email->send();
    
       if($dia==true)
       {
        redirect('display');    
          }
       else
       {
        // echo "display";
        redirect('display');
       }

}
}
 ?> 


