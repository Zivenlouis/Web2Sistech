<?php
    require("php/image.php");
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        if(isset($_FILES['image']) && $_FILES['image']['size'] != 0) {
            $image = $_FILES['image'];
            $query = "SELECT * FROM tbl_admin_home WHERE id = '$id'";
            $result = $conn -> query($query);
            $row = $result -> fetch_assoc();
            deleteImage('Home', $row['dataImage']);
            $imageData = moveImage('Home', $image);
            date_default_timezone_set('Asia/Jakarta');
            $time = date("Y-m-d H:i:s");         
            $query = "UPDATE tbl_admin_home SET last_modified='{$time}', dataImage='{$imageData}'  WHERE id = {$id}";
            if($conn->query($query)) {
                echo "<p class='successMessage'>Data Updated</p>";
            } else {
                echo "<p class='errorMessage'>Failed to update:". $conn->error . "</p>";
            }
        }
    }
    
?>