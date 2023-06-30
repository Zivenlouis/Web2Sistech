<?php 

require('Php/connection.php');
if(isset($_POST['submit'])) {
    
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $kelas = $_POST['kelas'];
    $temp = preg_replace('/\d+/', '', $kelas);
    $major = "Undefined";
    switch(mb_strtoupper($temp)) {
        case "TI":
            $major = "Informatics"; 
            break;
        case "SI":
            $major = "System Information";
            break;
        case "M":
            $major = "Management";
            break;
        case "A":
            $major = "Accounting";
            break;
        case "H":
            $major = "Law";
            break;
    }
    $intake = "20" . substr($kelas, 0, 2);
    $nim = $_POST['nim'];
    $line = $_POST['line'];
    $sql = "SELECT * FROM tbl_akun WHERE email='{$email}'";
    $result = $conn -> query($sql);
    if ($row = $result->fetch_assoc()) {
        header("Location: register.php?messageCode=1");
    } else {
        $sql = "INSERT INTO tbl_akun (first_name, last_name, email, password, class, nim, line, major, intake) VALUES ('$firstName', '$lastName', '$email', '$password', '$kelas', '$nim', '$line','$major','$intake')";
        if (mysqli_query($conn, $sql)) {
            header("Location: sign_in.php?messageCode=3$temp");
        } else {
            header("Location: register.php?messageCode=2$temp");
        }
    }
}
?>