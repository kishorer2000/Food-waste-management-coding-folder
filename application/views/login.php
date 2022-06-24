<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body { 
     background: url(<?php echo base_url();?>image/10.jpg) no-repeat  center center fixed; 
  
      background-size: cover;
      font-family:  Verdana, Geneva, Tahoma, sans-serif;;
}
#one{
 margin: auto;
  width: 35%;
  border: 3px solid black;
  line-height: 5pt;
  padding: 10px;
   margin-top: 0px;
   text-align: center;
   background-color: #ffffff5e;
   border-radius: 12px;
}
input{
  border-radius: 12px;
}
select{
  border-radius: 12px;
}
.col-12{
  background-color: black;
  width:300px;
  color:white;
  border-radius: 12px;
  margin-top: 30px;
}

</style>

<body>

  <div class="col-lg-12 col-md-12 col-12 text-center center-block d-block mx-auto">
    <h1 class="text-center center-block d-block mx-auto">LOGIN</h1>
  </div>
<div id="one" >
<form action="<?php echo site_url('Login/log'); ?>" method="POST">
<select name="signer" class=" p-2 text-center center-block d-block mx-auto">
  <option value="0"  >Food Provider</option>
  <option value="1"  >Trust</option>
</select><br><br>

<p class="mt-5"><b>Enter Email</b></p> <input type="email" name="email" placeholder="enter correct email" class="text-center center-block d-block mx-auto p-2" required><br><br>

<p class="mt-4"><b>Enter Password</b></p> <input type="password" name="password" placeholder="enter registered password" class="p-2 text-center center-block d-block mx-auto" required> <br><br>

<input type="submit" name="submit" value="login" class="btn btn-success mt-4 text-center center-block d-block mx-auto" >
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery 1.7.1"></script>
<script src="jquery.validate.1.9"></script>
<script>

</script>
</body>
</html>
















<!-- 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
  line-height: 5pt;
  padding: 10px;
   margin-top: 200px;
   text-align: center;
   background-color: #F0E68C;
}


</style>

<body>
<div id="one" >
<form action="<?php echo site_url('Login/log'); ?>" method="POST">
<select name="signer">
	<option value="0"  >Food Provider</option>
	<option value="1"  >Trust</option>
</select><br><br>

<h4>Enter Email</h4> <input type="email" name="email" placeholder="enter correct email"><br><br>

<h4>Enter Password</h4> <input type="password" name="password" placeholder="enter registered password"> <br><br>

<input type="submit" name="submit" value="login">
</div>
</body>
</html>
 -->