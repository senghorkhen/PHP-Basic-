<?php
    include_once "dbConnect.php";
    $id = $_GET['id'];

    $query = "DELETE FROM tbl_user WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result) {
        header("location: index.php");
    }else {
        echo "Cannot delet";
    }
?>