<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body { 
     background: url(<?php echo base_url();?>image/9.jpg) no-repeat  center center fixed;
      background-size: cover;
}
#sidebar
{
  position: fixed;
  width: 300px;
  height: 100%;
  background-color: black;
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
  width:500px;
  border-radius: 12px;
}
#one{
 margin: auto;
  width: 50%;
  padding: 12px;
   margin-top: 0px;
   text-align: center;
   border-radius: 12px;

}
.href{
  text-decoration: none;
  padding: 10px;
}
.href:hover{
  border-bottom:3px solid white;
}
.btn a{
  text-decoration: none; 
  color:black;
}
.col-12{
  background-color: black;
}
</style>

</head>
<body>
  <div class="col-lg-12 col-md-12 col-12 p-2">
<button type="button" class="btn btn-warning" style="margin-left: 1100px">
    <a href="<?php echo site_url('home');?>">Log Out</a></button>
  </div>
    <div id="sidebar">
    <div class="togglemenu">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul>
      
      <li><a class="href" href="<?php echo site_url('Viewregisterdetail'); ?>" class="w3-bar-item w3-button">View Register Details</a></li>
     <li> <a class="href" href="<?php echo site_url('Viewfooddetail'); ?>" class="w3-bar-item w3-button">View Food Details</a></li>
    </ul>
  </div>

   <h1 id="two" class="text-center center-block d-block mx-auto mt-3"> REGISTER DETAILS </h1>
  <div id="one">
<table class="table table-bordered table-success table-striped" id="table">
                 
                    <tr>
                      
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact Number</th>
                      <th>Address</th>
                      
                    </tr>

<?php
if(count($register)) :
$cnt=1; 
foreach ($register as $row) :
?>                    
                    <tr>
                     <td><?php echo htmlentities($row->id)?></td>
                      <td><?php echo htmlentities($row->name)?></td>
                     <td><?php echo htmlentities($row->email)?></td>
                     <td><?php echo htmlentities($row->contactnumber)?></td>
                     <td><?php echo htmlentities($row->address)?></td>
                   </tr>
 <?php 
$cnt++;
endforeach;
else : ?>

<?php
endif;
?>                
</table>
</div>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<script>

  x=document.getElementById('table');

  function forward(){
    for(i=0;i<=x[11];i++){
      x.innerHTML=i;
    }
  }
</script>
</body>
</html>