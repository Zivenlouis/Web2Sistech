<?php
    function moveImage($location, $image) {
        $foto = $image["tmp_name"];
        $targetDirectory = "../UploadImage/" . $location . '/';
        $extension = pathinfo($image["name"], PATHINFO_EXTENSION);
        $newFileName = uniqid() . "." . $extension;
        $targetFile = $targetDirectory . $newFileName;
        if (move_uploaded_file($foto, $targetFile)) {
            return $newFileName;
        } 
        return "";
    }
?>