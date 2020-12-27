<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Main Page</title>
    <link
      href="<?php echo base_url(); ?>/assets/HCI/bootstrap-4.5.0-dist/css/bootstrap.min.css"
      type="text/css"
      rel="stylesheet"
    />
    <link href="<?php echo base_url(); ?>/assets/HCI/css2.css?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/HCI/PageAwal.css" type="text/css" />
    <script src="<?php echo base_url(); ?>/assets/HCI/jquery/jquery-3.5.1.slim.min.js" >
        </script>
        <script src="<?php echo base_url(); ?>/assets/HCI/bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="background-color: rgb(140, 0, 255)">
    <div id="topNav" style="background-color: rgb(255, 255, 255); height: 70px">
    <div class="row float-right">
    <a href="<?php echo base_url('index.php/Welcome/main'); ?>" class="btn btn-primary" 
      style="background-color: rgb(140, 0, 255); 
      margin-top: 14px; margin-right: 14px; 
      border: rgb(140, 0, 255); "
        >Home</a
      >
      <a class="btn btn-primary float-right" 
      style="background-color: rgb(140, 0, 255); 
      margin-top: 14px; margin-right: 14px; 
      border: rgb(140, 0, 255); " href="TentangKami.html"
        >About Us</a
      >
    </div>
    </div>
    <div id="sub-header" style="background-color: white; height: 50px">
      <div class="row">
        <div class="col-lg-4 text-center">
          <img  class="rounded-circle" src="<?php echo base_url(); ?>/assets/HCI/uploads/<?php echo $this->session->userdata('foto'); ?>" alt="" style="width: 100px; height: 100px;">

        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <input
                type="text"
                class="form-control"
                placeholder="Nama Pengguna"
                readonly
                value=" <?php echo $this->session->userdata('username');?> "
              />
            </div>
          </div>
        </div>
        <!--Ganti Gambar-->
        <div class="col-lg-2">
        <a href="<?php echo base_url('index.php/Welcome/editUser') ?>"><img
            class="rounded-circle float-right"
            src="<?php echo base_url(); ?>/assets/HCI/setting.png"
            alt=""
            style="height: 40px; width: 40px; margin-left: 30px"
          /></a>
        </div>
        <div class="col-lg-2">
        <a href="<?php echo base_url('index.php/Login/logout') ?>">
        <img
            class="rounded-circle"
            src="<?php echo base_url(); ?>/assets/HCI/logout.png"
            alt=""
            style="height: 40px; width: 40px; margin-left: 30px"
          /></a>
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
      <?php foreach($record->result() as  $row){ ?>   
        <div class="box-body" style="background-color: white; margin-top: 20px">
          <div class="row">
            <div class="col-lg-1" style="margin-top: 10px;">
              <img
                src="<?php echo base_url(); ?>/assets/HCI/uploads/<?= $row->foto; ?>"
                alt=""
                class="rounded-circle"
                style="height: 39px; width: 39px; margin-left: 10px"
              />
          </div>
          <div class="col-lg-11" style="margin-top: 10px;">
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
              <div class="col-lg-5">
                <input
                  type="text"
                  class="form-control"
                  readonly
                  value="<?= $row->tag; ?>"
                  name="tag"
                />
              </div>
              <div class="col-lg-1">                
                  <img src="<?php echo base_url(); ?>/assets/HCI/titik3.png"  alt="" style="height: 30px;">
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
            ></textarea>
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
        <?php } ?>
      </div>

  </body>
</html>
