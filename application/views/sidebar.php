<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sidebar.css" />
</head>
<body>

<div class="sidenav">
	<div class="card-body">
		<img class="d-block img-thumbnail mx-auto img-fluid" src="<?php echo base_url();?>assets/images/deluxetea.png" width="180">
	</div>
 	<ul class="nav nav-pills flex-column-reverse">
		<li class="nav-item bg-primary"> <a class="nav-link" href="<?php echo site_url('c_home/deleteadmin') ?>">Delete Admin</a> </li>
	    <li class="nav-item bg-primary"> <a class="nav-link" href="<?php echo site_url('c_home/deletepartner') ?>">Delete Partner</a> </li>
	    <li class="nav-item bg-primary"> <a class="nav-link" href="<?php echo site_url('c_home/updatestock') ?>">Update Stock</a> </li>
	    <li class="nav-item bg-primary"> <a class="nav-link" href="<?php echo site_url('c_home/editpartner') ?>">Edit Partner</a> </li>
	    <li class="nav-item bg-primary"> <a class="nav-link" href="<?php echo site_url('c_home/inputadmin') ?>">Input Data Admin</a> </li>
	    <li class="nav-item bg-primary"> <a class="nav-link" href="<?php echo site_url('c_home/inputpartner') ?>">Input Data Partner</a> </li>
	    <li class="nav-item bg-primary"> <a class="nav-link" href="<?php echo site_url('c_home/inputstock') ?>">Input Stock</a> </li>
	    <li class="nav-item bg-primary"> <a class="nav-link" href="<?php echo site_url('c_home/lihatstock') ?>">Lihat Data Stock</a> </li>
    </ul>
</div>
</body>
</html>