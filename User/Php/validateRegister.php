<?php 

require('Php/connection.php');
if(isset($_POST['submit'])) {
    
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $kelas = $_POST['kelas'];
    $nim = $_POST['nim'];
    $line = $_POST['line'];
    $sql = "SELECT * FROM tbl_akun WHERE email='{$email}'";
    $result = $conn -> query($sql);
    if ($row = $result->fetch_assoc()) {
        header("Location: register.php?messageCode=1");
    } else {
        $sql = "INSERT INTO tbl_akun (first_name, last_name, email, password, kelas, nim, line) VALUES ('$firstName', '$lastName', '$email', '$password', '$kelas', '$nim', '$line')";
        if (mysqli_query($conn, $sql)) {
            header("Location: sign_in.php?messageCode=3");
        } else {
            header("Location: register.php?messageCode=2");
        }
    }
}
?>