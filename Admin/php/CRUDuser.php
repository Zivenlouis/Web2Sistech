<?php
    function insertUser($firstName, $lastName, $email, $nim, $class, $lineId, $major, $intake) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");      
        $firstName = mysqli_real_escape_string($conn, $firstName);
        $lastName = mysqli_real_escape_string($conn, $lastName);
        $email = mysqli_real_escape_string($conn, $email);
        $nim = mysqli_real_escape_string($conn, $nim);
        $class = mysqli_real_escape_string($conn, $class);
        $lineId = mysqli_real_escape_string($conn, $lineId);
        $major = mysqli_real_escape_string($conn, $major);
        $intake = mysqli_real_escape_string($conn, $intake);   
        $query = "INSERT INTO tbl_admin_user (first_name, last_name, email, nim, class, line_id, major, intake, time_created, last_modified) VALUES ('$firstName', '$lastName', '$email', '$nim', '$class', '$lineId', '$major', '$intake', '$currentTime', '$currentTime')"; 
        if ($conn->query($query)) {
            return true;
        }
        // echo $conn->error;
        return false;
    }

    function deleteUser($id) {
        require("connection.php");
        $query = "DELETE FROM tbl_admin_user WHERE id = $id";
        if ($conn -> query($query)) {
            return true;
        }
        return false;
    }

    function getUserToArr() {
        require("connection.php");
        $query = "SELECT * FROM tbl_admin_user";
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

    function getUserFromId($id) {
        require("connection.php");
        $query = "SELECT * FROM tbl_admin_user where id = $id";
        if ($result = $conn -> query($query)) return $result -> fetch_assoc();
        return null;
    }

    function updateUser($id, $firstName, $lastName, $email, $nim, $class, $lineId, $major, $intake) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");      
        $arr = getUserFromId($id);
    
        $query = "UPDATE tbl_admin_user SET first_name = '$firstName', last_name = '$lastName', email = '$email', nim ='$nim', class = '$class', line_id = '$lineId', major = '$major', intake ='$intake', last_modified = '$currentTime' WHERE id = '$id'"; 
        
        if ($conn->query($query)) {
            return true;
        }
        
        return false;
        
        
    }

?>