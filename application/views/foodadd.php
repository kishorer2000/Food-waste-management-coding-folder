<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Food Add</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { 
     background: url(<?php echo base_url();?>image/5.jpg) no-repeat  center center fixed; 
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
      background-size: cover;
}
#one{
 margin: auto;
  width: 35%;
  border: 3px solid black;
  padding: 10px;
   margin-top: 100px;
   text-align: center;
   background-color: #ffffff75;
   border-radius: 12px;
}
input{
  border-radius: 12px;
}
.btn a{
  text-decoration: none;
  color:black;
}
.button{
  background-color: black;
  border-radius: 12px;
}

</style>
</head>
<!--   <?php
$loginmail=$this->session->userdata('loginmail');
?> -->
<body>
<!--   <input type="text" value="<?php echo $post_array; ?>"> --> 
       <div class="col-lg-12 col-md-12 col-12 button p-2">
<button type="button" class="btn btn-warning" style="margin-left: 1100px"><a href="<?php echo site_url('home');?>">Log Out</a></button>
</div>

  <div id="one">
<form action="<?php echo site_url('Foodadd/add'); ?>" method="POST">
  <select name="category" value="Category">
  <option value=""  >Enter Category</option>
  <option value="Veg"  >Veg</option>
  <option value="Non-Veg"  >Non Veg</option>
</select> <br><br>
<!--   <?php
$loginmail=$this->session->userdata('loginmail');
?> -->
<p class="mt-5"> <b>Enter Quantity</b></p> <input type="text" name="quantity" placeholder="enter quantity" required  class="p-2 text-center center-block d-block mx-auto"><br><br>
<p><b> Other Food </b></p> <input type="text" name="others" placeholder="Enter if any other food items provide" required  class="p-2 text-center center-block d-block mx-auto"><br><br>
<input type="hidden" name="foreignkey" value="<?php echo $uid->id; ?>">
<input type="submit" name="submit" class="btn btn-primary">
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
	<title>Food Add</title>
</head>
<style>
	  body { 
     background: url(<?php echo base_url();?>image/5.jpg) no-repeat  center center fixed; 
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
   margin-top: 200px;
   text-align: center;
   background-color: white;
}
</style>


<body>
	<div id="one">
<form action="<?php echo site_url('Foodadd/add'); ?>" method="POST">
  <select name="category">
	<option value=""  >-- Select --</option>
	<option value="Veg"  >Veg</option>
	<option value="Non-Veg"  >Non Veg</option>
</select> <br><br>
<h4>Enter Quantity </h4> <input type="text" name="quantity" placeholder="enter quantity" required><br><br>
<h4> Other Food </h4> <input type="text" name="others" placeholder="Enter if any other food items provide" required><br><br>
<input type="hidden" name="foreignkey" value="<?php echo $uid->id; ?>" >
<input type="submit" name="submit">
	</div>
</body>
</html> -->