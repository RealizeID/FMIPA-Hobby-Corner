<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
       <link href="<?php echo base_url(); ?>/assets/HCI/bootstrap-4.5.0-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" type="text/csss" href="<?php echo base_url(); ?>/assets/HCI/styleLogin.css" />
    <title>Login FMIPA Hobby Corner</title>
  </head>
  <body>
    <div
      id="topNav"
      style="
        font-size: 16px;
        background-color: rgb(110, 20, 255);
        color: white;
        height: 50px;
      "
    >
      <div class="container">
        <button
          class="navbar p-1"
          style="margin-left: 90%; background: none; border: none"
        >
          <a
            href="TentangKami.html"
            class="rightTopBar"
            style="
              font-size: 12pt;
              color: white;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
              margin-top: 10px;
            "
            >Tentang Kami</a
          >
        </button>
      </div>
    </div>
    <div
      class="container"
      style="width: 30%; margin-top: 10%; box-shadow: 0 1px 2px; padding: 30px"
    >
      <h4 class="text-center">LOGIN</h4>
      <hr />
      <form action="<?php echo base_url('index.php/Login/login') ?>" method="post">
        <div class="form-group">
          <label for="">Username</label>
          <input
            type="text"
            name="username"
            class="form-control"
            placeholder="Username or Email"
          />
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input
            type="password"
            name="password"
            class="form-control"
            placeholder="Password"
          />
        </div>
        <span class="daftar">
          <button type="submit" class="btn btn-primary">
            <a
              href="Daftar.html"
              style="
                color: white;
                padding-left: 40px;
                padding-right: 40px;
                margin-left: 10px;
              "
              >Daftar</a
            >
          </button></span
        >
        <button
            type="submit"
            class="btn btn-primary"
            style="background-color: rgb(0, 119, 255);padding-left: 40px; padding-right: 40px"
          >Submit
          </button>
      </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
