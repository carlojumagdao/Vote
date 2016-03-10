<?php
// Check if image file is a actual image or fake image

function fnUpload($strFileInput) {

    $target_dir = "../assets/img/uploads/";
    $picData[0] = 1;

    $target_file = $target_dir . basename($_FILES[$strFileInput]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $picData[1] = $target_file;

    $check = getimagesize($_FILES[$strFileInput]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $picData[0] = 1;
    } else {
        $picData[2] = "File is not an image.";
        $picData[0] = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $picData[2] = "Sorry, file already exists.";
        $picData[0] = 0;
    }
    // Check file size
    if ($_FILES[$strFileInput]["size"] > 500000) {
        $picData[2] = "Sorry, your file is too large.";
        $picData[0] = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $picData[2] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $picData[0] = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($picData[0] == 0) {
        // $picData[2] = "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$strFileInput]["tmp_name"], $target_file)) {
            $picData[2] = "The file ". basename( $_FILES[$strFileInput]["name"]). " has been uploaded.";
        } else {
            $picData[2] = "Sorry, there was an error uploading your file.";
        }
    }
    return $picData;
}

?>