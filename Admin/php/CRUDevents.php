<?php
    function insertEvents($title, $description, $squareImage, $longImage, $price, $active) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");
        $squareImage = moveImage('Events', $squareImage);
        $longImage = moveImage('Events', $longImage);      
        $title = mysqli_real_escape_string($conn, $title);
        $description = mysqli_real_escape_string($conn, $description);
        $squareImage = mysqli_real_escape_string($conn, $squareImage);
        $longImage = mysqli_real_escape_string($conn, $longImage);   
        $query = "INSERT INTO tbl_admin_events (event_title, event_description, event_square_image, event_long_image, time_created, last_modified, price, active) VALUES ('$title', '$description', '$squareImage', '$longImage', '$currentTime', '$currentTime', '$price', '$active')"; 
        if ($conn->query($query)) {
            return true;
        }
        // echo $conn->error;
        return false;
    }

    function deleteEvents($id) {
        require("connection.php");
        $query = "DELETE FROM tbl_admin_events WHERE id = $id";
        if ($conn -> query($query)) {
            return true;
        }
        return false;
    }

    function getEventsToArr() {
        require("connection.php");
        $query = "SELECT * FROM tbl_admin_events";
        $rows = array();
        if ($result = $conn -> query($query)) {
            while($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }
        return null;
    }

    function getActiveEventsToArr() {
        require("connection.php");
        $query = "SELECT * FROM tbl_admin_events WHERE active='1'";
        $rows = array();
        if ($result = $conn -> query($query)) {
            while($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }
        return null;
    }

    function getEventsFromId($id) {
        require("connection.php");
        $query = "SELECT * FROM tbl_admin_events where id = $id";
        if ($result = $conn -> query($query)) return $result -> fetch_assoc();
        return null;
    }

    function updateEvents($id, $title, $description, $squareImage, $longImage, $price, $active) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");      
        $longImageQuery = '';
        $squareImageQuery = '';
        $arr = getEventsFromId($id);
        if ($squareImage['size'] != 0) {
            deleteImage('Events', $arr['event_square_image']);
            $squareImage = moveImage('Events', $squareImage);
            $squareImageQuery = "event_square_image = '" . mysqli_real_escape_string($conn, $squareImage) . "',";
        }
        
        if ($longImage['size'] != 0) {
            deleteImage('Events', $arr['event_long_image']);
            $longImage = moveImage('Events', $longImage);
            $longImageQuery = "event_long_image = '" . mysqli_real_escape_string($conn, $longImage) . "',";
        }
        
        $description = str_replace("\n", "<br>", $description);
        $query = "UPDATE tbl_admin_events SET event_title = '$title', event_description = '" . mysqli_real_escape_string($conn, $description) . "', $squareImageQuery $longImageQuery last_modified = '$currentTime', price = '$price', active ='$active' WHERE id = '$id'"; 
        
        if ($conn->query($query)) {
            return true;
        }
        
        return false;
        
        
    }

?>