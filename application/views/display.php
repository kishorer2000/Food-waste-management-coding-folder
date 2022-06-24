<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { 
     background: url(<?php echo base_url();?>image/7.jpg) no-repeat  center center fixed; 
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
      background-size: cover;
      font-family:  Verdana, Geneva, Tahoma, sans-serif;
}
#one{
 margin: auto;
  width: 50%;

  padding: 15px;
   margin-top: 50px;
   text-align: center;
   
}
.header{
  background-color: white;
  width:500px;
  border-radius: 12px;
}
.header1{

  width:500px;
  border-radius: 12px;
  color: black;
  text-shadow: 2px 2px 5px white,
                2px 2px 5px white,
                2px 2px 5px white,
                2px 2px 5px white,
                2px 2px 5px white,
                2px 2px 5px white,
                2px 2px 5px white,
                2px 2px 5px white,
                2px 2px 5px white

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
<body>
  <?php
$trustemail=$this->session->userdata('savedtrustemail');
$tr=explode('@',$trustemail);
// print_r($tr[0]);
  ?>

  <div class="col-lg-12 col-md-12 col-12 button p-2">
<button type="button" class="btn btn-warning" style="margin-left: 1100px"><a href="<?php echo site_url('home');?>">Log Out</a></button>
</div>

  <div class="col-lg-12 col-md-12 col-12 mt-3 ">
    <h1 class="header text-center center-block d-block mx-auto mt-4">FOOD AVAILABILITY</h1>
    <h2 class="header1 text-center center-block d-block mx-auto m-5"> WELCOME <?php echo "$tr[0]";  ?></h2>
    
  </div>
  <div id="one">
<table class="table table-bordered table-striped table-primary" >
                 
                    <tr>
                      
                      <th>Serial No</th>
                      <th>Category</th>
                      <th>Quantity</th>
                      <th>Others</th>
                      <th>Checkout</th>
                    
                    </tr>

<?php
if(count($foodprovider)) :
$cnt=1; 
foreach ($foodprovider as $row) :
?>                    
                    <tr>
                     <td><?php echo htmlentities($cnt)?></td>
                      <td><?php echo htmlentities($row->category)?></td>
                     <td><?php echo htmlentities($row->quantity)?></td>
                     <td><?php echo htmlentities($row->others)?></td>

                      <td><a href="<?php echo base_url();?>Foodproviders?foreignkey=<?php echo $row->foreignkey;?>&id=<?php echo $row->id;?>" class="btn btn-danger">Check </a></td>

                       <!-- redirect('Foodproviders'.$row['foreignkey'].); -->
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
     background: url(<?php echo base_url();?>image/7.jpg) no-repeat  center center fixed; 
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
      background-size: cover;
}
#one{
 margin: auto;
  width: 32%;
  border: 3px solid green;
  padding: 15px;
   margin-top: 100px;
   text-align: center;
   background-color: white;
}

</style>
<body>
  <div id="one">
<table border >
                 
                    <tr>
                      
                      <th>Id</th>
                      <th>Category</th>
                      <th>Quantity</th>
                      <th>Others</th>
                      <th>Forignkey</th>
                      <th>ProviderDetail</th>
                      
                    </tr>

<?php
if(count($foodprovider)) :
$cnt=1; 
foreach ($foodprovider as $row) :
?>                    
                    <tr>
                     <td><?php echo htmlentities($row->id)?></td>
                      <td><?php echo htmlentities($row->category)?></td>
                     <td><?php echo htmlentities($row->quantity)?></td>
                     <td><?php echo htmlentities($row->others)?></td>
                     <td><?php echo htmlentities($row->foreignkey)?></td>

                      <td><a href="<?php echo base_url();?>Foodproviders?foreignkey=<?php echo $row->foreignkey;?>">Check </a></td>

                       redirect('Foodproviders'.$row['foreignkey'].); 
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
    </body>
    </html> -->