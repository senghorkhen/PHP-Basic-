<?php 
if(isset($_POST['file_upload'])) {
    $fileName = $_FILES['file-name']['name'];
    $temporayName = $_FILES['file-name']['tmp_name'];
    $storeLocation = '../pictures/'.$fileName;
    move_uploaded_file( $temporayName, $storeLocation);
    echo "<img src='$storeLocation'>";
}