<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    

    <!-- CSS NAVBAR -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/navbar.css" />
    
    <!-- ICON -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">


  </head>

  <body>

    <!-- Navigation -->
    
    <nav class="navbar text-white fixed-top navbar-expand-lg navbar-info bg-info fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">DELUXE TEA REAL-TIME STOCK MANAGEMENT</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="coba fa fa-reorder"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav mx-auto">
            <li class="nav-item">
          </li>
          </ul>
          <ul class="navbar-nav ml-auto samping">
            
            <li class="nav-item dropdown kiri">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Akun
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="#"><?php echo $this->session->userdata('username'); ?></a>
                <a class="dropdown-item" href="<?php echo site_url('c_inputBarang/index') ?>">Input Barang</a> 
                <a class="dropdown-item" href="<?php echo site_url('c_home/logout') ?>">Logout</a> 
              </div>
            </li>
            <li class="nav-item" style="margin-left: 15px"><a href="#" style="word-spacing: 3px" class="nav-link"><span> </span><span>  </span><span>  </span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="edit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Edit </h4>
                </div>
                <?php echo form_open("home/edit"); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label" for="nim">id</label>
                        <input type="text" class="form-control" disabled value="dfgd" id="nim">
                        <input type="hidden" name="nim" class="form-control" value="dfgd" id="nim" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" value="dgfg" id="nama" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>