<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
	body{
		background-image: url('image/25.jpg');
		background-size: cover;
	}
.head{
	background-color: black;
	color: white;
	border-radius: 12px;
	border: 5px solid red;
}
.ms-auto{
	float: right;
}
a{
	text-decoration: none;
	color: white;

}

.button{
  background-color: black;
  border-radius: 12px;
}

	</style>
<body>

<div class="container-fluid">
	<div class="col-lg-12 col-md-12 col-12 button p-2">
<button type="button" class="btn btn-danger" style="margin-left: 1100px"><a href="<?php echo site_url('home');?>">Log Out</a></button>
</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-4 text-center center-block d-block mx-auto mt-5 head">
<br>
			<b>Name</b>:   <?php echo $ud->name; ?> <br><br>

<b>Email</b>: <?php echo $ud->email; ?>  <br><br>

<b>Address</b>: <?php echo $ud->address; ?> <br><br>

<b>Contact Number</b>: <?php echo $ud->contactnumber; ?> <br><br>
</div>

<div class="col-lg-4 col-md-4 col-4 text-center center-block d-block mx-auto mt-5 head">
<br><br>
<b>category</b>:   <?php echo $ged->category; 
 $this->session->set_userdata('cate',$ged->category);
 $cate=$this->session->userdata('cate');

?>    <br><br>

<b>Quantity</b>:   <?php echo $ged->quantity;

 $this->session->set_userdata('quant',$ged->quantity);
 $quant=$this->session->userdata('quant');
 ?>    <br><br>

<b>others</b>:   <?php echo $ged->others;
 $this->session->set_userdata('oth',$ged->others);
 $oth=$this->session->userdata('oth');

 ?>    <br><br>

</div>
</div>

<div class="col-lg-12 col-md-12 col-12 text-center center-block d-block mx-auto pt-5">
<a href="<?php echo site_url('Loggeremailsend'); ?>" class="btn btn-danger">Take Food</a> </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>