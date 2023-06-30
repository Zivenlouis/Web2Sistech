<?php 
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tbl_akun WHERE email='{$email}' AND password='{$password}'";
    $result = $conn -> query($sql);
    if ($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['loggedIn'] = true;
        $_SESSION['firstName'] = $row['first_name'];
        $_SESSION['userId'] = $row['id'];
        if (isset($_POST['message'])) {
            $token = bin2hex(random_bytes(16));
            setcookie('remember_token', $token, time() + (30 * 24 * 60 * 60), '/');
            $sql = "UPDATE tbl_akun SET remember_token='{$token}' WHERE email='{$email}'";
            $conn -> query($sql);
        }
        header("Location: index.php");
    } else {
        header("Location: sign_in.php?messageCode=1");
    }
}
?>