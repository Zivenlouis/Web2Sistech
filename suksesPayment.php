<?php
    if(isset($_GET['messageCode'])) {
        $code = $_GET['messageCode'];
        if($code == '1') {
            echo "Anjay sukses";
        } else if($code == '2') {
            echo "Anjay back";
        } else if ($code == '3') {
            echo "cie error";
        } else if ($code == '4') {
            echo "lain-lain";
        }
    }

?>