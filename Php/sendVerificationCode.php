<?php
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';
require 'lib/PHPMailer/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
require("Php/connection.php");
if (isset($_POST['submit']) || isset($_POST['resend'])) {
    if (isset($_POST['email']) && isset($_POST['verificationCode']) && $_POST['verificationCode'] != '') {
    $verificationCode = $_POST['verificationCode'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM tbl_akun WHERE email='{$email}' && verification_code='{$verificationCode}'";
    $result = $conn -> query($sql);
    if($row = $result -> fetch_assoc()) {
        header("Location: change_password.php?verificationCode={$verificationCode}&email={$email}");
    } else {
        echo "Verification code is wrong";
    } 
    } else {
        $email = $_POST['email'];
        
        $sql = "SELECT * FROM tbl_akun WHERE email='{$email}'";
        $result = $conn -> query($sql);
        if($row = $result -> fetch_assoc()) {
            //send validation email
            //email: sistechweb2@gmail.com
            //pass : iniuntukweb2
            //smtp pass: nhqvongvxtexojrp
            $verificationCode = "S-" . str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPDebug = 0;
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Timeout = 60;
            $mail->SMTPKeepAlive = true; 
            $mail->Username = "sistechweb2@gmail.com";
            $mail->Password = "nhqvongvxtexojrp";
            $mail->SetFrom("sistechweb2@gmail.com","SISTECH");
            $mail->Subject = "Verification Code - [{$verificationCode}]";
            $mail->AddAddress("{$email}","noreply");
            $mail->MsgHTML("
            <html>
            <head>
                <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f5f5f5;
                }
                p {
                    color: #333;
                }
                </style>
            </head>
            <body>
                <center>
                <h1>Verification Code</h1>
                <p>Use the verification code below to change your password:</p>
                <h1>{$verificationCode}</h1>
                <p>or follow this link to change your password now:</p>
                <a href='localhost/Sistechmedan/change_password.php?verificationCode={$verificationCode}&email={$email}'>Click Here</a>
                </center>
            </body>
            </html>
            ");
            if($mail->Send()) {
                echo "<p style='color:#4fa485; display:flex; justify-content:center;'>Verification code has been sent<p>";
                $mailSent = true;
            }
            else {
                echo "Failed to send verification code";
                $mailSent = false;
            }
            $sql = "UPDATE tbl_akun SET verification_code='{$verificationCode}' WHERE email='{$email}'";
            $conn -> query($sql);
    } else {
        echo "Can't find an account with this email.";
    }
    }
}
?>