<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Main Page</title>
    <link
      href="<?php echo base_url(); ?>/assets/HCI/bootstrap-4.5.0-dist/css/bootstrap.min.css"
      type="text/css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="ionicons.min.css" />
    <link rel="stylesheet" href="font-awesome.min.css" />
    <link href="<?php echo base_url(); ?>/assets/HCI/css2.css?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/HCI/PageAwal.css" type="text/css" />
    <script src="<?php echo base_url(); ?>/assets/HCI/jquery/jquery-3.5.1.slim.min.js" >
        </script>
        <script src="<?php echo base_url(); ?>/assets/HCI/bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="background-color: rgb(140, 0, 255)">
    <div
      id="topNav"
      style="
        background-color: rgb(255, 255, 255);
        height: 70px;
        border: 1px;
        border-color: grey;
        border-style: solid;
      "
    >
      <a class="btn btn-primary float-right" 
      style="background-color: rgb(140, 0, 255); 
      margin-top: 14px; margin-right: 14px; 
      border: rgb(140, 0, 255); " href="TentangKami.html"
        >About Us</a
      >    
    </div>
    <div id="sub-header" style="background-color: white; height: 50px">
      <div class="row">
        <div class="col-lg-4 text-center">
          <a href="<?php echo base_url('index.php/Welcome/akun') ?>">
            <img  class="rounded-circle" src="<?php echo base_url(); ?>/assets/HCI/uploads/<?php echo $this->session->userdata('foto'); ?>" alt="" style="width: 50px; height: 50px;">
          </a>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-1" style="margin-top: 7px; margin-left: 160px;">
              <a href="<?php echo base_url('index.php/Welcome/tag') ?>">
              <button style="width: 130px; background-color: rgb(140, 0, 255);" id="btnstyle">
                <img src="<?php echo base_url(); ?>/assets/HCI/iconSearch.png" />
              Search Tag
            </button></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div
          class="box-body"
          style="background-color: rgb(255, 255, 255); margin-top: 20px"
        >
          <div class="row">
            <div class="col-lg-1">
              <img
                src="<?php echo base_url(); ?>/assets/HCI/user.png"
                alt=""
                class="rounded-circle"
                style="height: 39px; width: 39px; margin-left: 10px"
              />
            </div>
            <div class="col-lg-11">
              <div>
                <a
                  href="<?php echo base_url('index.php/Welcome/create') ?>"
                  class="btn btn-block"
                  style="color: black"
                  >Create Post</a
                >
              </div>
            </div>
          </div>
        </div>
        <?php foreach($record->result() as  $row){ ?>   
        <div class="box-body" style="background-color: white; margin-top: 20px">
          <div class="row">
            <div class="col-lg-1">
              <img
                src="<?php echo base_url(); ?>/assets/HCI/uploads/<?= $row->foto; ?>"
                alt=""
                class="rounded-circle"
                style="height: 39px; width: 39px; margin-left: 10px"
              />
            </div>
            <div class="col-lg-11">
              <div class="row">
                <div class="col-lg-6">
                  <input
                    type="text"
                    class="form-control"
                    readonly
                    value="<?= $row->username; ?>"
                    name="UserName"
                  />
                </div>
                <div class="col-lg-6">
                  <input
                    type="text"
                    class="form-control"
                    readonly
                    value="<?= $row->tag; ?>"
                    name="UserName"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <input
                    type="text"
                    class="form-control"
                    value="<?= $row->judul; ?>"
                    readonly
                  />
                </div>
                <div class="col-lg-6"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <textarea
                class="form-control"
                name=""
                id=""
                cols="30"
                rows="10"
                readonly
              
              > <?= $row->isi; ?>
              </textarea
              >
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <img
                src="<?php echo base_url(); ?>/assets/HCI/user.png"
                style="height: 15px; width: 15px; margin-left: 30px"
                alt=""
              />
            </div>
          </div>
        </div>
        
        <?php } ?>
      </div>
  
  <div class="col-lg-3"></div>
    </div>
  </body>
</html>
