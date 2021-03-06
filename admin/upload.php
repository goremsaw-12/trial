<?php
$target_dir = "songs/";
$target_file = $target_dir . basename( $_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$txtFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$fileName = $target_dir."new";




// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($txtFileType != "txt" ) {
        echo "Sorry, only txt files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        echo "It is Uploading . . . . .";
        //echo $_FILES["fileToUpload"]["name"];

        if (move_uploaded_file( $_FILES["fileToUpload"]["name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
