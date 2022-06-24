 <?php 
    class Email extends CI_Controller { 
 
public function index()

   {  
$loginemailsave=$this->session->userdata('loginemailsave');
$logr=explode('@', $loginemailsave);

$logincategory=$this->session->userdata('logincategory');

$loginquantity=$this->session->userdata('loginquantity');

$loginothers=$this->session->userdata('loginothers');
$message = '<html>
                         <head>
                        </head>
                         <center>
                         <body style="margin-top:50px;color:darkgreen">
                         <div style="background-color:#c8f3c8;height: 500px;width: 300px;border:2px solid darkgreen;box-shadow:1px 1px 10px 10px gray">

                             <h3>New Food Has Been Added By ' . strtoupper($logr[0]) . '  </h3> <br><br>
                             <h3> Category &nbsp;&nbsp;'.($logincategory).'</h3> <br><br>
                             <h3> Quantity &nbsp;&nbsp; '. ($loginquantity).'</h3> <br><br>
                              <h3> Others &nbsp;&nbsp; '. ($loginothers).'</h3> <br><br>

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

        // "<pre>";
        // print_r($config);die;
        $to_email = 'kishore2000.kr@gmail.com';
        // rahulm031097@gmail.com
        // $to_mail = explode(',', $to_email);
        $this->load->library('encryption');
        $this->email->initialize($config);
        // $message = '<html>
        //                 <head>
        //                 </head>
        //                 <center>
        //                 <body style="margin-top:50px;color:darkgreen">
        //                 <div style="background-color:#c8f3c8;height: 500px;width: 300px;border:2px solid darkgreen;box-shadow:1px 1px 10px 10px gray">

        //                     <h1>' . strtoupper($name) . ' Mail Testing </h1>
        //                     <h3>HI Hello</h3>
        //                     <img width="auto" src="image/one.jpg" width="auto" height="auto">
        //                 </div>
        //                 </body>
        //                 </center>
        //                 </html>';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('kishore2000mca@gmail.com','Kishore'); // change it to yours

        $this->email->to('kishore2000.kr@gmail.com');// change it to yours
       
        // $this->email->cc('nainarmy412@gmail.com,');
        $this->email->subject('New Food Alert');
        $this->email->message($message);
       $dia= $this->email->send();
    
       if($dia==true)
       {
        redirect('home');
       }
       else
       {
        echo "not done";
       }

}
}
 ?> 







