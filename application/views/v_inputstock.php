<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Untitled.css">
</head>


<body>
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
  <div class="isi">
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
              <h3 contenteditable="false">- Input Stock -</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 pb-4">
          <div class="btn-group btn-group-lg pl-4">
            <form method="POST" action="<?php echo base_url(). 'index.php/pemilikController/c_inputstock'; ?>">
              <div class="row" col-md-12>
                <label style="font-size: 20px">Toko : </label>
                <select class="form-control" id="toko" name="toko" style="width: 200px; margin-left: 20px">
                  <option selected="true" disabled="disabled">Pilih Toko</option>
                  <?php 
                    foreach ($partner as $p ) { 
                  ?>
                  
                  <option value="<?php echo $p->namatoko;?>"><?php echo $p->namatoko;?></option>
                  
                  <?php
                    }
                  ?>
                </select>
              </div>
              <br>
              <div class="row" col-md-12>
                <label style="font-size: 20px">Rasa : </label>
                <select class="form-control" id="rasa" name="rasa" style="width: 200px; margin-left: 20px">
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
              <br>
             <div class="form-group row"> 
              <label for="pass" style="font-size: 20px">Jumlah yang ingin didistribusikan</label>
                <div class="col-10 col-md-7" style="">
                   <input type="number" class="form-control" name="jml" id="jml" placeholder="Jumlah stock" style="margin-left: -15px"> </div>
              </div>
              <div class="col-10 col-md-3" style="">
                <button class="btn btn-primary btn-block shadow" type="submit" style="margin-left: 150px">Submit</button>
              </div>
            </form>
            <!-- <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Partner-xxxx</button>
            <div class="dropdown-menu"> 
              <a class="dropdown-item" href="#">Pantner</a>
              <a class="dropdown-item" href="#">Partner</a>
            </div> -->
          </div>
        </div>
      </div>
            <!-- <div class="row">
              <div class="col-md-12">
                <p class="lead">&nbsp; &nbsp; &nbsp; &nbsp;Rasa</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pb-3">
                <div class="btn-group btn-group-lg pl-4">
                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Pilih Rasa</button>
                  <div class="dropdown-menu"> <a class="dropdown-item" href="#">Rasa</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Rasa</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12"> -->
                
             
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