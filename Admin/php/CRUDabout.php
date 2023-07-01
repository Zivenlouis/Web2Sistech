<?php
    function insertAbouts($title, $description, $circleImage, $longImage) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");
        $circleImage = moveImage('Aboutus', $circleImage);
        $longImage = moveImage('Aboutus', $longImage);      
        $title = mysqli_real_escape_string($conn, $title);
        $description = mysqli_real_escape_string($conn, $description);
        $circleImage = mysqli_real_escape_string($conn, $circleImage);
        $longImage = mysqli_real_escape_string($conn, $longImage);   
        $query = "INSERT INTO tbl_admin_about (name, about_title, about_content, time_created, last_modified) VALUES ('$title', '$description', '$circleImage', '$longImage', '$currentTime', '$currentTime')"; 
        if ($conn->query($query)) {
            return true;
        }
        // echo $conn->error;
        return false;
    }

    function deleteAbouts($id) {
        require("connection.php");
        $query = "DELETE FROM tbl_admin_about WHERE id = $id";
        if ($conn -> query($query)) {
            return true;
        }
        return false;
    }

    function getAboutsToArr() {
        require("connection.php");
        $query = "SELECT * FROM tbl_admin_about";
        $rows = array();
        if ($result = $conn -> query($query)) {
            while($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }
        return null;
    }


    function getAboutsFromId($id) {
        require("connection.php");
        $query = "SELECT * FROM tbl_admin_about where id = $id";
        if ($result = $conn -> query($query)) return $result -> fetch_assoc();
        return null;
    }

    function updateAbouts($id, $title, $description, $circleImage, $longImage) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");      
        $longImageQuery = '';
        $circleImageQuery = '';
        $arr = getAboutsFromId($id);
        if ($circleImage['size'] != 0) {
            deleteImage('Aboutus', $arr['about_circle_image']);
            $circleImage = moveImage('Aboutus', $circleImage);
            $circleImageQuery = "about_circle_image = '" . mysqli_real_escape_string($conn, $circleImage) . "',";
        }
        
        if ($longImage['size'] != 0) {
            deleteImage('Aboutus', $arr['about_long_image']);
            $longImage = moveImage('Aboutus', $longImage);
            $longImageQuery = "about_long_image = '" . mysqli_real_escape_string($conn, $longImage) . "',";
        }
        $description = str_replace("\n", "<br>", $description);
        $query = "UPDATE tbl_admin_about SET about_title = '$title', about_description = '" . mysqli_real_escape_string($conn, $description) . "', $circleImageQuery $longImageQuery last_modified = '$currentTime' WHERE id = '$id'"; 
        
        if ($conn->query($query)) {
            return true;
        }
        
        return false;
        
        
    }

?>