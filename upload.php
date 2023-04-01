<?php
include('database.php');
// include('submit.php');
if(isset($_POST['sajili'])) {
    $file = $_FILES['picha'];
    $file_name = $file['name'];
    $filesize = $file['size'];
    $file_temp = $file["tmp_name"];
    $ext = explode('.', $file_name);
    $extension = strtolower(end($ext));
    $allowed_extensions = array('jpeg', 'jpg', 'png');
    if(in_array($extension, $allowed_extensions)) {
      if($filesize <= 5000000) {
        $fileName = "File".time().'.'.$extension;
        $newDestination ='image/'.$fileName;
        $newDestination=htmlspecialchars($newDestination);
        move_uploaded_file($file_temp, $newDestination);
        $query= "UPDATE submit SET picha='$newDestination' WHERE email='$email'";
        if(mysqli_query($db,$query)){
            echo " picture uploaded successfully";
        }
        else{
            echo "not available";
        }
    }
    else{
        echo " file size should be less than 5 mb";
    }
}   
else{
    echo "extensions allowed are .png , .jpeg ,jpg ";
}
}

?>