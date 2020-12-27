<!DOCTYPE html>
<html>
  <html lang="en">
    <head>
      <title>FMIPA Hobby Corner</title>
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
<body>
      <div
      id="topNav"
      style="
        font-size: 16px;
        background-color: rgb(110, 20, 255);
        color: white;
        height: 50px;
      "></div>
        <div class="container">
            <div class="row" style="margin-top: 70px;">
                <div class="col-lg-4">
                  <div class="row">
                    <div class="col-lg-4"></div>
                  <div class="col-lg-8">
                    <div class="img-circle text-center">
                      <img  class="rounded-circle" src="<?php echo base_url(); ?>/assets/HCI/uploads/<?php echo $this->session->userdata('foto'); ?>" alt="" style="width: 100px; height: 100px;">
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group text-center">
                    <input type="file" name="poto" class="form-control"><hr>
                    <button class="btn btn-primary" name="updatepoto" type="submit">Submit</button>
                    </div>
                    </form>
                  </div>   
                  </div>               
                </div>
                <div class="col-lg-4">
                    <form action="" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" readonly value="<?php echo $this->session->userdata('username'); ?>" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" readonly value="<?php echo $this->session->userdata('email'); ?>" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="">Old Pasword</label>
                                <input type="password" class="form-control" placeholder="Old Password" name="password" required minlength="8">
                            </div>
                            <div class="form-group">
                                <label for="">New Pasword</label>
                                <input type="password" class="form-control" placeholder="New Password" name="newpassword" required minlength="8">
                            </div>
                            <div class="form-group">
                                <label for="">Retype Password</label>
                                <input type="password" class="form-control" placeholder="Retype Password" name="retypepassword" required minlength="8">
                            </div>
                        </div>
                        <div class="box-footer">
                          <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                          <a href="<?php echo base_url('index.php/Welcome/akun'); ?>" class="btn btn-primary">Back to akun</a>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
        </div>
      </div>
    </body>
  </html>
</html>
