<?php
    function insertAdmin($user, $nama, $pass) {
        require("connection.php");
        // date_default_timezone_set('Asia/Jakarta');
        // $currentTime = date("Y-m-d H:i:s");      
        $user = mysqli_real_escape_string($conn, $user);
        $nama = mysqli_real_escape_string($conn, $nama);
        $pass = mysqli_real_escape_string($conn, $pass);  
        $query = "INSERT INTO tbl_akun_admin (username, name, password) VALUES ('$user', '$nama', '$pass')"; 
        if ($conn->query($query)) {
            return true;
        }
        // echo $conn->error;
        return false;
    }

    function deleteAdmin($id) {
        require("connection.php");
        $query = "DELETE FROM tbl_akun_admin WHERE id = $id";
        if ($conn -> query($query)) {
            return true;
        }
        return false;
    }

    function getAdminToArr() {
        require("connection.php");
        $query = "SELECT * FROM tbl_akun_admin";
        $rows = array();
        if ($result = $conn -> query($query)) {
            while($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }
        return null;
    }

    // function getActiveEventsToArr() {
    //     require("connection.php");
    //     $query = "SELECT * FROM tbl_admin_events WHERE active='1'";
    //     $rows = array();
    //     if ($result = $conn -> query($query)) {
    //         while($row = mysqli_fetch_assoc($result)) {
    //             $rows[] = $row;
    //         }
    //         return $rows;
    //     }
    //     return null;
    // }

    function getAdminFromId($id) {
        require("connection.php");
        $query = "SELECT * FROM tbl_akun_admin where id = $id";
        if ($result = $conn -> query($query)) return $result -> fetch_assoc();
        return null;
    }

    function updateAdmin($id, $user, $nama, $pass) {
        require("connection.php");
        // date_default_timezone_set('Asia/Jakarta');
        // $currentTime = date("Y-m-d H:i:s");      
        $arr = getAdminFromId($id);
    
        $query = "UPDATE tbl_akun_admin SET username = '$user', name = '$nama', password = '$pass' WHERE id = '$id'"; 
        
        if ($conn->query($query)) {
            return true;
        }
        
        return false;
        
        
    }

?>