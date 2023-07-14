<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
    <?php require_once("Layout/head.php");?>
    <link rel="stylesheet" href="Style/mainForgot.css";>
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

        input[type="checkbox"] {
            box-sizing: border-box;
            width: 15px;
            height: 15px;
            cursor: pointer;
        }

        .check {
            accent-color: #169b45;
            color: #ffffff;
            font-size: 15px;
            margin-left: 0;
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
        <form id="fform" action="<?php if (isset($_GET['email']) && isset($_GET['verificationCode'])) {
                            $email = $_GET['email'];
                            $verificationCode = $_GET['verificationCode'];
                            echo "change_password.php?verificationCode={$verificationCode}&email={$email}";
                        } ?>"  method='post'>
            <h2>Change Password</h2>

            <div id="group">
                <p>New Password</p>
                <input type="password" name="pass1" class="box" id="fpassword1" required oninput="clearInfo2()">

                <div class="check" id="show">
                    <input type="checkbox" id="showPassword" onclick="togglePassword('fpassword1')">
                    <label for="showPassword">Show Password</label>
                </div>

                <p>Re-enter Password</p>
                <input type="password" name="pass2" class="box" id="fpassword2" required oninput="clearInfo2()">

                <div class="check" id="show">
                    <input type="checkbox" id="showPassword" onclick="togglePassword('fpassword2')">
                    <label for="showPassword">Show Password</label>
                </div>

                <p id="error2">
                    <?php
                        if (isset($_GET['email']) && isset($_GET['verificationCode'])) {
                            $email = $_GET['email'];
                            $verificationCode = $_GET['verificationCode'];
                            require("Php/connection.php");
                            $sql = "SELECT * FROM tbl_akun WHERE email='{$email}' AND verification_code='{$verificationCode}'";
                            $result = $conn -> query($sql);
                            if ($result -> fetch_assoc()) {
                                if(isset($_POST['pass1'])) {
                                    $pass1 = $_POST['pass1'];
                                    $pass2 = $_POST['pass2'];
                                    if (strlen($pass1) < 8) {
                                        echo "Password must contain at least 8 characters";
                                    } else if ($pass1 != $pass2) {
                                        echo "Password must be the same";
                                    } else {
                                        $sql2 = "UPDATE tbl_akun SET password='{$pass1}' WHERE email='{$email}'";
                                        $conn -> query($sql2);
                                        header("Location: sign_in.php?messageCode=4");
                                    }
                                }
                            } else {
                                echo "Invalid email or verification vode";
                            }
                        }
                        else {
                            echo "No email or verification vode";
                        }
                    ?>
                </p>

                <div class="btn">
                    <button type="submit" class="button-ijo">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>

    <img class="second" src="Image/background.png">

    <img class="third" src="Image/background.png">

    <script src="js/scriptForgot.js"></script>
    
    <script>
        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>
</html>