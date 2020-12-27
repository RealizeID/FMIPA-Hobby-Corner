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

    <body style="background-color: rgb(110, 20, 255)">
      <div id="topNav" style="background-color: #fff; height: 50px"></div>

      <div class="container col-lg-8" id="Boxs">
        <div class="row" style="background-color: black; height: 40px">
          <div class="col-lg-12">
            <button class="btn btn-danger float-right">close</button>
          </div>
        </div>
        <div class="row" style="background-color: #fff">
          <div class="col-lg-12">
            <form id="Post" action="Post" method="POST">
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        name="judul"
                        placeholder="Judul Artikel"
                      />
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        name="Tag"
                        placeholder="Tag Artikel"
                      />
                    </div>
                  </div>
                  <div class="col-lg-5"></div>
                </div>

                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="artikel"
                    id=""
                    placeholder="isi artikel"
                    rows="15"
                  ></textarea>
                </div>
                <div class="form-group">
                  <img
                    src="<?php echo base_url(); ?>/assets/HCI/user.png"
                    style="width: 15px; height: 15px"
                    alt=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    name="nmpengguna"
                    placeholder="Nama Pengguna"
                  />
                </div>

                <div class="form-group col-lg-12">
                  <textarea
                    class="form-control"
                    name="artikel"
                    id=""
                    placeholder="komentar"
                    rows="8"
                  ></textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary float-right">submit</button>
                </div>
                <div class="row col-lg-12">
                  <div class="form-group">
                    <input
                      type="text"
                      name="nmpengguna"
                      placeholder="Nama Pengguna"
                    />
                  </div>

                  <div class="form-group col-lg-12">
                    <textarea
                      class="form-control"
                      name="artikel"
                      id=""
                      placeholder="komentar"
                      rows="8"
                    ></textarea>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </body>
  </html>
</html>
