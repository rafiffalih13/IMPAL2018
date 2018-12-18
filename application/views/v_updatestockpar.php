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
    .tg .tg-baqh{text-align:center;vertical-align:top}
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
                  <h3 contenteditable="true">- Update Stock -</h3>
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
              <p class="lead" style="font-family: arial; font-size: 15px">&nbsp; &nbsp; &nbsp; &nbsp;Stock saat ini : </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pb-3 pl-4">
                
                <table class="tg" style="undefined;table-layout: fixed; width: 219px; margin-left: 25px">
                <colgroup>
                <col style="width: 91px">
                <col style="width: 128px">
                </colgroup>
                  <tr>
                    <th class="tg-baqh" colspan="2">Rasa</th>
                  </tr>
                  <tr>
                    <td class="tg-baqh">Lemon</td>
                    <td class="tg-baqh">Blackcurrant<br></td>
                  </tr>
                  <tr>
                    <?php 
                      foreach ($stockLemon as $l ) { 
                    ?>
                    <td class="tg-baqh"><?php echo $l->stock1;?> Stock</td>
                    <?php }?>
                    <?php 
                      foreach ($stockblack as $b ) { 
                    ?>
                    <td class="tg-baqh"><?php echo $b->stock1;?> Stock</td>
                    <?php }?>
                  </tr>
                </table>


            </div>
          </div>
          <form method="POST" action="<?php echo base_url(). 'index.php/partnerController/updatestock'; ?>">
            <div class="row" col-md-12>
                  <label style="font-size: 20px; margin-left: 59px">Rasa : </label>
                  <select class="form-control" id="rasa" name="rasa" style="width: 215px; margin-left: 20px">
                    <option selected="true" disabled="disabled">Pilih Rasa</option>
                    <?php 
                      foreach ($stock as $s ) { 
                    ?>
                    
                    <option value="<?php echo $s->rasa;?>"><?php echo $s->rasa;?></option>
                    
                    <?php
                      }
                    ?>
                  </select>
                </div>
            <div class="row">
              <div class="form-group row"> 
                <label for="pass" style="font-size: 20px; margin-top: 10px; margin-right: 600px; margin-left: 75px">Jumlah yang Terjual</label>
                  <div class="col-10 col-md-4" style="">
                    <input type="number" class="form-control" name="jml" id="jml" placeholder="Jumlah stock" style="margin-left: 59px">
                  </div>
                </div>
            </div>
            <div class="col-10 col-md-2" style="">
                <button class="btn btn-primary btn-block shadow" type="submit" style="margin-left: 200px">Submit</button>
              </div>
          </form>
          <div class="row">
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
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