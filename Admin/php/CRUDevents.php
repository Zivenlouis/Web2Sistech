<?php
    function insertEvents($title, $description, $squareImage, $longImage) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");       
        $squareImage = moveImage('Events', $squareImage);
        $longImage = moveImage('Events', $longImage);
        $query = "INSERT into tbl_admin_events (event_title, event_description, event_square_image, event_long_image, time_created, last_modified) VALUES ('$title', '$description', '$squareImage', '$longImage', '$currentTime', '$currentTime')";
        if($conn->query($query)) return true;
        // echo $conn -> error;
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

    function getEvents($id) {
        require("connection.php");
        $query = "SELECT FROM tbl_admin_events where id = $id";
        
    }

?>