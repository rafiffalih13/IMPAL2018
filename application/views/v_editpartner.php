<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/must.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Untitled.css">
</head>

<body style="margin-left: 150px; margin-top: 80px">
  <!-- <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button" data-toggle="collapse" data-target="#navbar14">
        <p class="navbar-brand mb-0 text-white">
          <i class="fa d-inline fa-lg fa-stop-circle"></i> BRAND </p>
      </button>
      <div class="collapse navbar-collapse" id="navbar14">
        <h3>
          <p class="d-none d-md-block lead mb-0 text-white">DELUXE TEA REAL-TIME STOCK MANAGEMENT</p>
        </h3>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
            </a> </li>
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
            </a> </li>
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
            </a> </li>
        </ul>
        <a class="btn btn-default navbar-btn text-light"><i class="fa fa-user fa-fw"></i>LogOut</a>
      </div>
    </div>
  </nav> -->
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
  <div class="py-0">
    <div class="container-fluid">
      <div class="row">
        <!-- <div class="" style="">
          <div id="content">
            <div class="card bg-light">
              <div class="card-body"><img class="d-block img-thumbnail mx-auto img-fluid" src="../Asset 1@4x.png" width="170"></div>
            </div>
            <ul class="nav nav-pills flex-column-reverse">
              <li class="nav-item bg-primary"> <a class="nav-link" href="deleteadmin.html">Delete Admin</a> </li>
              <li class="nav-item bg-primary"> <a class="nav-link" href="inputdataadmin.html">Input Data Admin</a> </li>
              <li class="nav-item bg-primary"> <a class="nav-link" href="deletepartner.html">Delete Partner</a> </li>
              <li class="nav-item bg-primary"> <a class="nav-link" href="editpartner.html">Edit Partner</a> </li>
              <li class="nav-item bg-primary"> <a class="nav-link" href="inputdatapartner.html">Input Data Partner</a> </li>
              <li class="nav-item bg-primary"> <a class="nav-link" href="updatestock.html">Update Stock</a> </li>
              <li class="nav-item bg-primary"> <a class="nav-link" href="inputstock.html">Input Stock</a> </li>
              <li class="nav-item bg-primary"> <a class="nav-link" href="lihatdatastock.html">Lihat Data Stock</a> </li>
            </ul>
          </div>
        </div> -->
        <div class="col-9" style="">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="blockquote">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pb-2">
                  <h3 class="pb-3">- Edit Partner -</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pb-5">
              <div class="btn-group btn-group-lg pl-4">
                <form method="POST" action="<?php echo base_url(). 'index.php/pemilikController/c_editpartner'; ?>">
              <div class="row" col-md-13>
                <label style="font-size: 20px; margin-right: 590px">Username Partner</label>
                <select class="form-control" id="username" name="username" style="width: 250px; margin-left:  px">
                  <option selected="true" disabled="disabled">Pilih username partner</option>
                  <?php 
                    foreach ($partner as $p ) { 
                  ?>
                  
                  <option value="<?php echo $p->username;?>"><?php echo $p->username;?></option>
                  
                  <?php
                    }
                  ?>
                </select>
              </div>
              <br>
              
              <br>
             <div class="form-group row"> 
              <label for="pass" style="font-size: 20px; margin-right: 600px;">Password Baru</label>
                <div class="col-10 col-md-4 style="">
                   <input type="password" class="form-control" name="pass" id="pass" placeholder="Password Baru" style="margin-left: -15px"> </div>
              </div>
              <div class="col-10 col-md-3" style="">
                <button class="btn btn-primary btn-block shadow" type="submit" style="margin-left: 50px">Submit</button>
              </div>
            </form>
                <!-- <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Partner-xxxx&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</button>
                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Partner</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Partner</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">

              <p class="lead">&nbsp; &nbsp; &nbsp; &nbsp;Password Baru
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pb-4">
              <form class="form-inline">
                <div class="input-group input-group-lg pl-4">
                  <input type="text" class="form-control pl-4 mr-3">
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3"><a class="btn btn-primary shadow active btn-lg" href="#">Update</a></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>

</html>