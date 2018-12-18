<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Untitled.css">
  <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg .tg-s6z2{text-align:center}
  </style>
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
              <div class="card-body"><img class="d-block img-thumbnail mx-auto img-fluid" src="Asset 1@4x.png" width="170"></div>
            </div>
            <ul class="nav nav-pills flex-column-reverse">
              <li class="nav-item bg-primary"> <a class="nav-link" href="updatestock_partner.html">Update Stock</a> </li>
              <li class="nav-item bg-primary"> <a class="nav-link" href="lihatdatastock_partner.html">Lihat Data Stock</a> </li>
            </ul>
            <div class="card bg-light">
              <div class="card-body" style="padding-bottom: 320px"></div>
            </div>
          </div>
         --></div>
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
                  <h3 contenteditable="true">- Lihat Data Stock -</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php 
                    foreach ($partner as $p ) { 
              ?>
              <p class="lead">&nbsp; &nbsp; &nbsp; &nbsp;Selamat Datang <?php echo $p->nama?></p>
              <?php }?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pl-4">
              <p class="lead" style="font-family: arial; font-size: 15px">&nbsp; &nbsp; &nbsp; &nbsp;History stock : </p>
              <table class="tg" style="undefined;table-layout: fixed; width: 353px; margin-left: 30px">
              <colgroup>
              <col style="width: 46px">
              <col style="width: 139px">
              <col style="width: 168px">
              </colgroup>
                <tr>
                  <th class="tg-s6z2" rowspan="2">No</th>
                  <th class="tg-s6z2" colspan="2">Rasa</th>
                </tr>
                <tr>
                  <td class="tg-s6z2">Lemon</td>
                  <td class="tg-s6z2">Blackcurrant</td>
                </tr>
                <tr>
                  <td class="tg-s6z2">1</td>
                  <?php 
                      foreach ($stockLemon as $l ) { 
                    ?>
                    <td class="tg-s6z2"><?php echo $l->stock1;?> Stock</td>
                    <?php 
                      foreach ($stockblack as $b ) { 
                    ?>
                  <td class="tg-s6z2"><?php echo $b->stock1;?> Stock</td>
                </tr>
                <tr>
                  <td class="tg-s6z2">2</td>
                  <td class="tg-s6z2"><?php echo $l->stock2;?> Stock</td>
                  <td class="tg-s6z2"><?php echo $b->stock2;?> Stock</td>
                </tr>
                <tr>
                  <td class="tg-s6z2">3</td>
                  <td class="tg-s6z2"><?php echo $l->stock3;?> Stock</td>
                  <td class="tg-s6z2"><?php echo $b->stock3;?> Stock</td>
                    <?php }?>
                    <?php }?>
                </tr>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pl-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
</body>

</html>