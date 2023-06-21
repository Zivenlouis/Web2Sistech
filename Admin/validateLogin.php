<?php 
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tbl_admin WHERE email='{$email}' AND password='{$password}'";
    $result = $conn -> query($sql);
    if ($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $row['username'];
        if (isset($_POST['message'])) {
            $conn -> query($sql);
        }
        header("Location: dashboard.php");
    } else {
        header("Location: index.php?messageCode=1");
    }
}
?>