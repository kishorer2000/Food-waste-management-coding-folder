<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Display</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body { 
     background: url(<?php echo base_url();?>image/7.jpg) no-repeat  center center fixed; 
    
      background-size: cover;
}

     

#sidebar ul li {
  color: white;
  list-style: none;
  padding: 20px 20px;

}
#sidebar ul li a{
  color: white;}
  table{
   margin-left: auto;
  margin-right: auto;
  margin-top: 10%;
}
h1
{
  text-align: center;
}
#two
{
  background-color: white;
  width:350px;
  border-radius: 12px;
}
a{
  text-decoration: none;
}
.col-12{
  background-color: black;
  padding: 10px;
  
}
.side{
  background-color: black;
  height: 550px;
}
</style>

</head>
<body>
  <div class="col-lg-12 col-md-12 col-12 button">
<button type="button" class="btn btn-warning" style="margin-left: 1100px"><a href="<?php echo site_url('home');?>">Log Out</a></button>
</div>
  
   <div class="row">
    <div class="col-lg-3 col-md-3 col-3 side">
    <div id="sidebar">

    <div class="togglemenu">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul>
      
      <li><a href="<?php echo site_url('Viewregisterdetail'); ?>" class="w3-bar-item w3-button pt-4">View Register Details</a></li>
     <li> <a href="<?php echo site_url('Viewfooddetail'); ?>" class="w3-bar-item w3-button">View Food Details</a></li>
    </ul>
  </div>
</div>

<div class="col-lg-4 col-md-4 col-4 text-center center-block d-block mx-auto">

  <h1 id="two" class="text-center center-block d-block mx-auto mt-3"> ADMIN PANNEL </h1>
</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>












