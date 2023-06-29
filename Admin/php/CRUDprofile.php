<?php
    function insertProfile($title, $description, $image_1, $image_2, $image_3) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");
        $image_1 = moveImage('Profile', $image_1);
        $image_2 = moveImage('Profile', $image_2);      
        $image_3 = moveImage('Profile', $image_3);      
        $title = mysqli_real_escape_string($conn, $title);
        $description = mysqli_real_escape_string($conn, $description);
        $image_1 = mysqli_real_escape_string($conn, $image_1);
        $image_2 = mysqli_real_escape_string($conn, $image_2);   
        $image_3 = mysqli_real_escape_string($conn, $image_3);   
        $query = "INSERT INTO tbl_admin_profile (profile_title, profile_description, profile_image_1, profile_image_2, profile_image_3, data_created, last_modified) VALUES ('$title', '$description', '$image_1', '$image_2', $image_3, '$currentTime', '$currentTime')"; 
        if ($conn->query($query)) {
            return true;
        }
        return false;
    }

    function deleteProfile($id) {
        require("connection.php");
        $query = "DELETE FROM tbl_admin_profile WHERE id = $id";
        if ($conn -> query($query)) {
            return true;
        }
        return false;
    }

    function getProfileToArr() {
        require("connection.php");
        $query = "SELECT * FROM tbl_admin_profile";
        $rows = array();
        if ($result = $conn -> query($query)) {
            while($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }
        return null;
    }

    function getProfileFromId($id) {
        require("connection.php");
        $query = "SELECT * FROM tbl_admin_profile where profile_id = $id";
        if ($result = $conn -> query($query)) return $result -> fetch_assoc();
        return null;
    }

    function updateProfile($id, $title, $description, $image_1, $image_2, $image_3) {
        require("connection.php");
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = date("Y-m-d H:i:s");      
        $image1Query = '';
        $image2Query = '';
        $image3Query = '';
        $arr = getProfileFromId($id);
        if ($image_1['size'] != 0) {
            deleteImage('profile', $arr['profile_image_1']);
            $image_1 = moveImage('Profile', $image_1);
            $image1Query = "profile_image_1 = '" . mysqli_real_escape_string($conn, $image_1) . "',";
        }
        
        if ($image2['size'] != 0) {
            deleteImage('profile', $arr['profile_image_2']);
            $image_2 = moveImage('Profile', $image_2);
            $image2Query = "profile_image_2 = '" . mysqli_real_escape_string($conn, $image_2) . "',";
        }
        if ($image3['size'] != 0) {
            deleteImage('profile', $arr['profile_image_3']);
            $image_3 = moveImage('Profile', $image_3);
            $image3Query = "profile_image_3 = '" . mysqli_real_escape_string($conn, $image_3) . "',";
        }
        
        $query = "UPDATE tbl_admin_profile SET profile_title = '$title', profile_description = '" . mysqli_real_escape_string($conn, $description) . "', $image1Query $image2Query $image3Query last_modified = '$currentTime' WHERE id = '$id'"; 
        if ($conn->query($query)) {
            return true;
        }
        
        return false;
        
        
    }

?>