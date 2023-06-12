<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
    <<?php require_once("Layout/head.php");?>
    <link rel="stylesheet" href="Style/mainForgot.css";>
</head>
<body>
    <div class="background">
        <div class="eclipse1"></div>
        <div class="eclipse2"></div>
    </div>

    <div class="header-logo">
        <img src="Image/logo.png">
        
        <p>SISTECH</p>
    </div>

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
                <p>Re-enter Password</p>
                <input type="password" name="pass2" class="box" id="fpassword2" required oninput="clearInfo2()">
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
</body>
</html>