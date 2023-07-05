<?php
    function moveImage($location, $image) {
        $foto = $image["tmp_name"];
        
        $targetDirectory = "../UploadImage/" . $location . '/';
        $extension = pathinfo($image["name"], PATHINFO_EXTENSION);
        $newFileName = uniqid() . "." . $extension;
        $targetFile = $targetDirectory . $newFileName;
        if (compressImage($foto, $targetFile, 75)) {
            return $newFileName;
        } 
        return "";
    }

    function deleteImage($location, $imageName) {
        $path = "../UploadImage/" . $location . "/" . $imageName;
        if(file_exists($path)) if (unlink($path)) return true;
        return false;
    }

    function compressImage($source, $destination, $quality) {

        $info = getimagesize($source);
      
        if ($info['mime'] == 'image/jpeg') 
          $image = imagecreatefromjpeg($source);
      
        elseif ($info['mime'] == 'image/gif') 
          $image = imagecreatefromgif($source);
      
        elseif ($info['mime'] == 'image/png') 
          $image = imagecreatefrompng($source);
          imagealphablending($image, false);
          imagesavealpha($image, true);
      
      
        if ($info['mime'] == 'image/png') {
          if (imagepng($image, $destination, round(9 * $quality / 100))) {
            return true;
          }
        } else {
            if (imagejpeg($image, $destination, $quality)) {
              return true;
          }
        }
        return false;
      
      }
?>