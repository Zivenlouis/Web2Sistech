<?php 
if(isset($_POST['submit'])) {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    require('Php/connection.php');
    $sql = "SELECT * FROM tbl_akun WHERE email='{$email}'";
    $result = $conn -> query($sql);
    if ($row = $result->fetch_assoc()) {
        header("Location: register.php?messageCode=1");
    } else {
        $sql = "INSERT INTO tbl_akun (first_name, last_name, email, password) VALUES ('{$firstName}', '{$lastName}', '{$email}', '{$password}')";
        if (mysqli_query($conn, $sql)) {
            header("Location: sign_in.php?messageCode=3");
        } else {
            header("Location: register.php?messageCode=2");
        }
    }
}
?>