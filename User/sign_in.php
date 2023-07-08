<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign In</title>
    <?php require_once("Layout/head.php"); ?>
    <link rel="stylesheet" href="Style/mainSignIn.css">
    <style>    
      body {
        margin-top: 150px; 
        overflow-y: hidden;
      }

      .change {
        font-size: 15px;
        color: #4fa485;
        text-decoration: none;
        margin-left: 30%;
      }

      .change:hover {
        color: #169b45;
      }
      
      .noAccount a {
        /* color: #1b7d98; */
        margin-left: 0;
      }

      .techno {
        position: relative;
        width: 75%;
        height: 90%;
        top: -15%;
        left: 20%;
      }

      @media screen and (max-width: 1000px) {
        body {
          overflow-y: auto;
        }

        .techno {
          left: 10%;
        }
      }
    </style>
  </head>
  <body>
    <div class="background">
      <div class="eclipse1"></div>
      <div class="eclipse2"></div>
    </div>
    
    <?php require_once("Layout/header.php");?>

    <main>
      <?php require_once("Php/validateLogin.php");?>

      <div class="container" id="sform">
        <div class="container1">
          <form class="container1_1" action="" method="post">
            <h1>Sign In</h1>

            <div class="group">
              <img class="email" src="Image/Main/Username.png">
              <input type="email" class="textbox" id="semail" name = "email" placeholder="Email" required oninput="clearInfo()">
            </div>

            <div class="group">
              <img class="pass" src="Image/Main/Password.png">
              <input type="password" class="textbox" name = "password" id="spassword" placeholder="Password" required oninput="clearInfo()">
            </div>

            <div class="group2">
              <div class="check">
                <input type="checkbox" name="message" value="Message">
                <label for="message">Remember me</label>
              </div>

              <a class="change" href="forgot_password.php">Forgot Password?</a>
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
              <input type="submit" class="button-ijo" name='submit' onclick="validasi(event)" value="Sign In">
            </div>

            <div class="noAccount">
              <p>Don't have an account yet?</p><a class="change" href="register.php">Create one.</a>
            </div>            
          </form>
        </div>

        <div class="container2">
          <img class="techno" src="Image/Main/Techno.png" />
        </div>
      </div>
    </main>

    <script src="js/scriptSignIn.js"></script>
  </body>
</html>
