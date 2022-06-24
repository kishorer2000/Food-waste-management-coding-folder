<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
      body { 
     background: url(<?php echo base_url();?>image/16.jpg) no-repeat  center center fixed; 
    
      background-size: cover;
}
#one{
 margin: auto;
  width: 35%;
  border: 3px solid black;
  padding: 10px;
  line-height: 5pt;
   margin-top: 50px;
   text-align: center;
   background-color: #ffffff75;
   border-radius: 12px;
}
input{
  border-radius: 12px;
}
.col-12{
  color:white;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  width:250px;
  border-bottom: 3px solid red;

}

</style>    
</head>

<body>
  <div class="col-lg-12 col-md-12 col-12 text-center center-block d-block mx-auto mt-5">
    <h1>ADMIN</h1>
  </div>
    <div id="one">
    <form action="<?php echo site_url('Adminlogin/log'); ?>" method="POST">
<p class="mt-3"><b>Enter Email</b></p><input type="email" name="email" placeholder="Enter Email" class="text-center center-block d-block mx-auto mt-2 pt-2"  required><br><br>
<p class="mt-3"><b>Enter Password</b></p><input type="password" name="password" placeholder="Enter Password" required class="text-center center-block d-block mx-auto mt-2 pt-2"><br><br>
<input type="submit" name="submit" value="login" class="btn btn-primary mt-3">
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>





<!-- 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
  border: 3px solid green;
  padding: 10px;
  line-height: 5pt;
   margin-top: 200px;
   text-align: center;
   background-color: #F0E68C;
}

</style>	

<body>
	<div id="one">
	<form action="<?php echo site_url('Adminlogin/log'); ?>" method="POST">
<h4>Enter Email</h4><input type="email" name="email" placeholder="Enter Email" required><br><br>
<h4>Enter Password</h4><input type="password" name="password" placeholder="Enter Password" required><br><br>
<input type="submit" name="submit" value="login">
</div>
</body>
</html> -->