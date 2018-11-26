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
    include_once ("sidebar.php");
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
              <h3 contenteditable="true">- Input Stock -</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 pb-4">
          <div class="btn-group btn-group-lg pl-4">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Partner-xxxx</button>
            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Pantner</a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Partner</a>
            </div>
          </div>
        </div>
      </div>
            <div class="row">
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
              <div class="col-md-12">
                <p class="lead">&nbsp; &nbsp; &nbsp; &nbsp;Jumlah yang ingin didistribusikan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pb-2">
                <form class="form-inline">
                  <div class="input-group input-group-lg pl-4">
                    <input type="text" class="form-control pl-4">
                  </div>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-3"><a class="btn btn-primary shadow" href="#">Submit</a></div>
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