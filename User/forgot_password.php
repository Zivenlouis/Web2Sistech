<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <?php 
        require_once("Layout/head.php");
        $mailSent = false;
    ?>
    <link rel="stylesheet" href="Style/mainForgot.css">
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center !important;
            justify-content: center !important;
            overflow-y: hidden;
        }

        .box {
            padding-left: 5px;
            width: 330px;
            height: 33px;
            margin-bottom: 10px;
            border-radius: 5px;
            font-size: 20px;
            outline: none;
            opacity: 50%;
        }

    </style>
</head>
<body>
    <div class="background">
        <div class="eclipse1"></div>
        <div class="eclipse2"></div>
    </div>

    <a href="index.php">
        <div class="header-logo">
          <img src="Image/Header/logo.png" />

          <p>SISTECH</p>
        </div>
      </a>

    <img class="first" src="Image/background.png">

    <div class="container">
        <form id="fform" action="" method="post">
            <h2 style='margin-bottom: 50px;'>Forgot Password?</h2>

            <p style='display:flex; justify-content: center;'>Email</p>
            <input type="email" name='email' value='<?php if (isset($_POST['email'])) echo $_POST['email'];?>' class="box" id="femail" style="margin-top: 10px; margin-bottom:10px" required oninput="clearInfo1()">

            <p id="error1" style="margin-bottom: 10px;">
                <?php require_once("Php/sendVerificationCode.php"); ?>
            </p>

            <div id="group" style='margin-top:10px; <?php if ($mailSent) echo "display:block"; else echo "display:none;" ?>' >
                <p style='display:flex; justify-content: center; '>Verification Code</p>
                <input type="text" class="box" name='verificationCode' value='' style='margin-top:10px; margin-bottom: 20px'>
            </div>

            <div class="btn">
                <input type="submit" value='Submit' name='submit' class="button-ijo" id="myButton">
                <input type="submit" style='margin-left: 20px; display:<?php if($mailSent) echo 'block'; else echo 'none'; ?>' value='Resend Code' name='resend' class="button-ijo" id="btnResend" onclick="">
            </div>    
        </form>
    </div>

    <img class="second" src="Image/background.png">

    <img class="third" src="Image/background.png">

    <script src="js/scriptForgot"></script>
</body>
</html>