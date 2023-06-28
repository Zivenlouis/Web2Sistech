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

    function deleteImage($location, $imageName) {
        $path = "../UploadImage/" . $location . "/" . $imageName;
        if(file_exists($path)) if (unlink($path)) return true;
        return false;
    }
?>