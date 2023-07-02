<?php
    function insertAdmin($username, $name, $password) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");      
        $username = mysqli_real_escape_string($conn, $username);
        $name = mysqli_real_escape_string($conn, $name);
        $password = mysqli_real_escape_string($conn, $password);  
        $query = "INSERT INTO tbl_akun_admin (username, name, password, time_created, last_modified) VALUES ('$username', '$name', '$password', '$currentTime', '$currentTime')"; 
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

    function updateAdmin($id, $username, $name, $password) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");      
        $arr = getAdminFromId($id);
    
        $query = "UPDATE tbl_akun_admin SET username = '$username', name = '$name', password = '$password', last_modified = '$currentTime' WHERE id = '$id'"; 
        
        if ($conn->query($query)) {
            return true;
        }
        
        return false;
        
        
    }

?>