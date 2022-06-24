<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Food Waste Management</title>
</head>
<style>
  body { 
     background: url(<?php echo base_url();?>image/18.jpg) no-repeat  center center fixed; 
     
      background-size: cover;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  width:320px;
  border-radius: 20px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
}

li a:hover{
  background-color: white;
  color:black;
  border-radius: 20px;
}
.text-center{
  text-shadow: 2px 2px 5px black,
               2px 2px 10px black,
               2px 2px 15px black,
               2px 2px 20px black;

} 
.header{
  text-align: center;
  color: white;
}

</style>
<body>
  <div>
<ul style="float:right;">

 
   <li style="float:right"><a class="active" href="<?php echo site_url('adminlogin'); ?>">Admin</a></li>
  <li style="float:right"><a class="active" href="<?php echo site_url('login'); ?>">Login</a></li>
  <li style="float:right"><a class="active" href="<?php echo site_url('Register'); ?>">Register</a></li>
</ul>
</ul>
</div><br><br><br><br>
<div class="col-lg-12 col-md-12 col-12">
  <h1 class="col-lg-12 col-md-12 col-12 header text-center center-block d-block mx-auto">FOOD WASTE MANAGEMENT SYSTEM</h1>
</div>
</body>
</html>

