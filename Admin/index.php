<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Sistech Admin</title>
    <link
        rel="stylesheet"
        href="assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link
        rel="stylesheet"
        href="assets/vendors/jvectormap/jquery-jvectormap.css"
    />
    <link
        rel="stylesheet"
        href="assets/vendors/flag-icon-css/css/flag-icon.min.css"
    />
    <link
        rel="stylesheet"
        href="assets/vendors/owl-carousel-2/owl.carousel.min.css"
    />
    <link
        rel="stylesheet"
        href="assets/vendors/owl-carousel-2/owl.theme.default.min.css"
    /><link
        rel="stylesheet"
        href="assets/css/adminlogin.css"
    />
    <link rel="shortcut icon" href="../User/Image/favicon.png" />

    <?php require_once("php/connection.php"); ?>
  </head>
  <body>
    <?php require_once("validateLogin.php");?>
    <div class="container-scroller">
    <div class="login-box">
            <div class="login-logo">
                <a href="http://ichef-1.bbci.co.uk/news/660/cpsprodpb/17A21/production/_85310869_85310700.jpg"><img src="https://www.google.com/images/icons/material/product/1x/analytics_64dp.png" alt="My Ad Cubes"></a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <div class="group">
                <form class="container1_1" action="" method="post">
              <input
                type="email"
                class="textbox form-control"
                id="semail"
                name = "email"
                placeholder="Email"
                required
                oninput="clearInfo()"
                style="width:93%"
              />
            </div>

            <div class="group" style="padding-top:15px">
              
              <input
                type="password"
                class="textbox form-control"
                name = "password"
                id="spassword"
                placeholder="Password"
                required
                oninput="clearInfo()"
                style="width:93%"
              />
            </div>


            <p id="error">
              <?php 
                if (isset($_GET['messageCode'])) {
                  $messageCode = $_GET['messageCode'];
                } else {
                  $messageCode = '0';
                }
                if($messageCode == '1') {
                  echo "Your email or password is wrong";
                } else if ($messageCode == '2') {
                  echo "Can't connect to the server";
                } else if ($messageCode == '3') {
                  echo "<p style='color:#4fa485; font-size:15px; margin-left: 10%;'>Your account has been successfully created.</p>";
                } else if ($messageCode == '4') {
                  echo "<p style='color:#4fa485; font-size:15px; margin-left: 10%;'>Your password has been changed successfully.</p>";
                }
              ?>

            </p>

            <div class="group3">
              <input type="submit" class="btn btn-primary" name='submit' onclick="validasi(event)" value="Sign In">
            </div>
            </form>
         
            </div><!-- /.login-box-body -->
        </div>
    </div>
    <script src="../user/js/scriptSignIn.js"></script>         
  </body>
</html>
