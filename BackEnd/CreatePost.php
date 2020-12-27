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
          <a href="<?php echo base_url('index.php/Welcome/MainPage') ?>"></a>
            <button class="btn btn-danger float-right" style="margin: 5px; padding: 5px; padding-top: 1px; padding-bottom: 1px;">X</button>
          </div>
        </div>
        <div class="row" style="background-color: #fff">
          <div class="col-lg-12">
            <form id="Post" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="judul"
                    placeholder="Judul Artikel"
                  />
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
                  <select class="form-control" name="tag" id="tag">
                    <option>Pilih Tag</option>
                    <option>Olahraga</option>
                    <option>Memasak</option>
                    <option>Membaca</option>
                    <option>Menulis</option>
                    <option>Bermain Game</option>
                    <option>Mendaki</option>
                    <option>Traveling</option>
                  </select>
                </div>
              </div>

              <script>
                if ((id = "Tag" = "Pilih Tag"))
                  function disableBtn() {
                    document.getElementById("submit").disabled = true;
                  }

                function enableBtn() {
                  document.getElementById("submit").disabled = false;
                }
              </script>

              <div class="box-footer">
                <button class="btn btn-primary" name="submit" id="submit" type="submit">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </body>
  </html>
</html>
