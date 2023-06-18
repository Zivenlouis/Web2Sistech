<?php
    for($i = 1; $i <= 6; $i++) {
        if(isset($_POST['update'.$i])) {
            $imageTmp = $_FILES["image".$i]['tmp_name'];
            $imageData = addslashes(file_get_contents($imageTmp));
            date_default_timezone_set('Asia/Jakarta');
            $time = date("Y-m-d H:i:s");         
            $query = "UPDATE tbl_admin_home SET last_modified='{$time}', dataImage='{$imageData}'  WHERE id = {$i}";
            if($conn->query($query) === true) {
                echo "<p class='successMessage'>Data Updated</p>";
            } else {
                echo "<p class='errorMessage'>Failed to update:". $conn->error ."</p>";
            }
        }
    }
?>