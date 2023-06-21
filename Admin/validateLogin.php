<?php 
if(isset($_GET['logout'])) {
    session_start();
    session_destroy();
    session_abort();
    header('location: login.php');
}


if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tbl_akun_admin WHERE username='{$username}' AND password='{$password}'";
    $result = $conn -> query($sql);
    if ($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['loggedInAdmin'] = true;
        $_SESSION['usernameAdmin'] = $row['name'];
        if (isset($_POST['message'])) {
            $conn -> query($sql);
        }
        header("Location: index.php");
    } else {
        header("Location: login.php?messageCode=1");
    }
}

?>