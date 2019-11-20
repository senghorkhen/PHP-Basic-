<?php
    include_once "dbConnect.php";
    $id = $_GET['stu_id'];
    $query = "DELETE FROM tbl_student WHERE stu_id = $id";
    $result = mysqli_query($conn, $query);

    if($result) {
        header('location: index.php');
    }else {
        echo "Cannot delete data";
    }
?>