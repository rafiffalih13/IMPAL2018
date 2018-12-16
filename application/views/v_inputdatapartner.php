	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<h3><title> DELUXE TEA</title><h3>	
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assets/css/inputdatapartner.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/bootstrap2/bootstrap.css">
</head>

<body style="margin-left: 150px; margin-top: 80px">
<!-- <div id="header">
	<h3><a href="" class="title" style="color: #F0FFFF; font-family: arial,verdana,sans-serif; position: relative;">Deluxe Tea Real-time Stock Management</a><h3>
	<div class=logout></div>
</div> -->
<?php 
    include_once("navbar.php");
    $username =$this->session->userdata('username'); 
      if((substr($username, 0, 3) === 'own')){
        include_once("sidebar.php");
        
      }else if ((substr($username, 0, 3) === 'adm')){
        include_once("sidebaradmin.php");
        
      } else {
        include_once("sidebarpartner.php");
      }
  ?>

<div class="list-blog single-post d-sm-flex wow fadeInUpBig">
	<!-- <div id="content">
		<ul>
		<li><img class="gambar" src="<?php echo base_url();?>assets/images/deluxetea.png"/></li>
		<li><a href="#">Lihat Data Stock</a></li>
		<li><a href="#">Input Stock</a></li>
		<li><a href="#">Update Stock</a></li>
		<li><a href="#">Input Data Partner</a></li>
		<li><a href="#">Edit Partner</a></li>
		<li><a href="#">Delete Partner</a></li>
		<li><a href="#">Input Data Admin</a></li>
		<li><a href="#">Delete Admin</a></li>
		</ul>
	</div> -->

<div class="main">
      
       	 <form  method="get" action="action=<?php echo base_url(). 'index.php/c_input_partner/simpanPartner';?>" id="form">
       		<label>Username :</label>
			<input type="text" name="username" id="username" />
			
			<label>Password :</label>
			<input type="password" name="password" id="password" />

			<label>Nama :</label>
			<input type="text" name="nama" id="nama" />

			<label>Alamat :</label>
			<input type="text" name="alamat" id="alamat" />

			<label>No Hp :</label>
			<input type="text" name="nohp" id="nohp" />

			<label>Nama Toko :</label>
			<input type="text" name="nohp" id="namatoko" />

			<div class="submit">
			<input type="submit" name="submit" id="submit" value="Submit">
			</div>
		<?php include "prosesinputdata.php";?>	
       				
	</div>
</div>

</body>
</html>
