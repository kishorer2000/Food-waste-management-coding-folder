<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

  body { 
     background: url(<?php echo base_url();?>image/14.jpg) no-repeat  center center fixed; 
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
      background-size: cover;
}
#one{
 margin: auto;
  width: 35%;
  height: auto;
  line-height: 3pt;
  border: 5px solid black;
  padding: 0px;
   margin-top: 40px;
   text-align: center;
   background-color: #ffffff75;
   border-radius: 12px;
}
input{
  border-radius: 12px;
}
select{
  border-radius: 12px;
}
.col-12{
  color:white;
  border-bottom: 3px dotted black;
  width:300px;
  font-family: sans-serif;
  background-color: black;
  border-radius: 12px;
}
</style>
</head>
<body>
    <div class="col-lg-12 col-md-12 col-12 text-center center-block d-block mx-auto">
    <h1 class="text-center center-block d-block mx-auto mt-3">REGISTER</h1>
  </div>
    <div id="one" class="pt-5">
<form action="<?php echo site_url('Register/reg'); ?>"  method="POST">

<p class="pt-3"><b>Enter Name</b></p> <input type="text" name="name" onkeypress="return allowOnlyLetters(event,this);" palceholder="PLease Enter Your Name" class="p-2 text-center center-block d-block mx-auto" id="job1"><br><br>
<p class="pt-3"><b>Enter Email</b></p> <input type="email" name="email" palceholder="PLease Enter Your Email" class="p-2 text-center center-block d-block mx-auto" id="job2"><br><br>
<p class="pt-3"><b>Enter Password</b></p><input type="password" name="password" palceholder="PLease Enter Your Password"  class="p-2 text-center center-block d-block mx-auto" id="job3"><br><br>
<p class="pt-3"><b>Enter Contact Number</b></p> <input type="number" name="contactnumber" palceholder="PLease Enter Your Contact Number" class="p-2 text-center center-block d-block mx-auto"  id="job4"><br><br>
<p class="pt-3"><b>Enter Address</b></p><input type="text" name="address" palceholder="PLease Enter Your Address" class="p-2 text-center center-block d-block mx-auto" required><br><br>
  <select name="signer" class="p-2 mt-3" id="job5">
    <option value="0">Food Provider</option>
    <option value="1">Trust</option>
</select> <br><br>
<!-- <button type="button" name="submit" class="btn btn-danger">Register</button>
 --><input type="submit" name="submit" value="register" class="btn btn-danger mt-5 mb-3" onclick="return validate()">
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery 1.7.1"></script>
<script src="jquery.validate.1.9"></script>
<script language="Javascript" type="text/javascript">    
    
function allowOnlyLetters(e, t)   
{    
   if (window.event)    
   {    
      var charCode = window.event.keyCode;    
   }    
   else if (e)   
   {    
      var charCode = e.which;    
   }    
   else { return true; }    
   if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))    
       return true;    
   else  
   {    
      alert("Please enter only alphabets");    
      return false;    
   }           
}      
</script>  
<script>
function validate()
{
  var un=$("#job1").val()
  var emd=$("#job2").val()
  var mbn=$("#job3").val()
  var cit=$("#job4").val()
  var pwd=$("#job5").val()

    if(un== "")
    {
       alert("please enter your Name");
        return false;
      }
    else if (emd== ""){
      alert("please enter your Email");
      return false;

    }else if (mbn== ""){
    alert("please enter your Password");
    return false;

    } else if (cit== ""){
      alert("Please enter your Contact Number");  
      return false;
    } else if (pwd == "")
    {
      alert("Please enter your Address");
      return false;   
    }
  
    //   else{
    //   $.ajax({
    //     url: '<%: Url.Action("Emailcheck")%>',
    //     type:'POST',
    //     data:{email:emd},
    //     success:function(data) {
    //       if(data==0) {
    //          alert('Email Is Already Exists');
    //       }else{
           
    //         alert('Email available');
    //       }

    //      }
    //   });
    // }
  }
  
</script>


</body>
</html>







<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
</head>
<style>

  body { 
     background: url(<?php echo base_url();?>image/8.jpg) no-repeat  center center fixed; 
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
      background-size: cover;
}
#one{
 margin: auto;
  width: 35%;
  height: auto;
  line-height: 3pt;
  border: 3px solid green;
  padding: 10px;
   margin-top: 160px;
   text-align: center;
   background-color: #F0E68C;
}

</style>

<body>
    <div id="one">
<form action="<?php echo site_url('Register/reg'); ?>"  method="POST">

<h4>Enter Name</h4> <input type="text" name="name" palceholder="PLease Enter Your Name"
id="job1"><br><br>
<h4>Enter Email</h4> <input type="email" name="email" palceholder="PLease Enter Your Email"  id="job2"><br><br>
<h4>Enter Password</h4><input type="password" name="password" palceholder="PLease Enter Your Password"  id="job3"><br><br>
<h4>Enter Contact Number</h4> <input type="text" name="contactnumber" palceholder="PLease Enter Your Contact Number"  id="job4"><br><br>
<h4>Enter Address</h4><input type="text" name="address" palceholder="PLease Enter Your Address" id="job5"><br><br>
  <select name="signer">
    <option value="0">Food Provider</option>
    <option value="1">Trust</option>
</select> <br><br>
<input type="submit" name="submit" value="register" onclick="return validate()">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery 1.7.1"></script>
<script src="jquery.validate.1.9"></script>
<script>
function validate()
{
  var un=$("#job1").val()
  var emd=$("#job2").val()
  var mbn=$("#job3").val()
  var cit=$("#job4").val()
  var pwd=$("#job5").val()

    if(un== "")
    {
       alert("please enter your Name");
        return false;
      }
    else if (emd== ""){
      alert("please enter your Email");
      return false;

    }else if (mbn== ""){
    alert("please enter your Password");
    return false;

    } else if (cit== ""){
      alert("Please enter your Contact Number");  
      return false;
    } else if (pwd == "")
    {
      alert("Please enter your Address");
      return false;   
    }
  
    //   else{
    //   $.ajax({
    //     url: '<%: Url.Action("Emailcheck")%>',
    //     type:'POST',
    //     data:{email:emd},
    //     success:function(data) {
    //       if(data==0) {
    //          alert('Email Is Already Exists');
    //       }else{
           
    //         alert('Email available');
    //       }

    //      }
    //   });
    // }
  }
  
</script>
</body>
</html>


 -->


